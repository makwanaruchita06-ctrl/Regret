<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    use \App\Traits\Notifiable;

    public function index(Request $request): View
    {
        $search = $request->get('search', '');
        $sortColumn = $request->get('sort', 'id');
        $sortDirection = $request->get('direction', 'desc');
        $perPage = $request->get('per_page', 10);
        $allowedPerPage = [5, 10, 25, 50];
        if (!in_array($perPage, $allowedPerPage)) {
            $perPage = 10;
        }
        $allowedSortColumns = ['id', 'title', 'status', 'created_at'];
        if (!in_array($sortColumn, $allowedSortColumns)) {
            $sortColumn = 'id';
        }
        $query = Portfolio::query();
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        $query->orderBy($sortColumn, $sortDirection === 'asc' ? 'asc' : 'desc');
        $portfolios = $query->paginate($perPage)->appends($request->query());
        return view('admin.portfolios.index', compact('portfolios', 'search', 'sortColumn', 'sortDirection', 'perPage'));
    }

    public function create(): View
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'nullable|array|max:10',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'keywords' => 'nullable|string|max:500',
        ]);

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->description = $request->description ?? '';

        $portfolio->status = $request->status;
        $portfolio->keywords = $request->keywords ?? '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/portfolios'), $imageName);
            $portfolio->image = $imageName;
        }

        // Handle multiple images
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];
            foreach ($images as $imageFile) {
                $imageName = time() . '_' . $imageFile->getClientOriginalName();
                $imageFile->move(public_path('uploads/portfolios'), $imageName);
                $imagePaths[] = $imageName;
            }
            $portfolio->images = array_merge(($portfolio->images ?? []), $imagePaths);
        }

        $portfolio->save();

        $this->logNotification('Portfolio created', 'New portfolio "' . $request->title . '" created successfully', 'success');

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully!');
    }

    public function edit(Portfolio $portfolio): View
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'nullable|array|max:10',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'keywords' => 'nullable|string|max:500',
        ]);

        $portfolio->title = $request->title;
        $portfolio->description = $request->description ?? '';

        $portfolio->status = $request->status;
        $portfolio->keywords = $request->keywords ?? '';

        // Handle multiple images update (append new)
       // ✅ Start with old images
$images = $portfolio->images ?? [];

// ✅ delete by NAME (not index)
if ($request->filled('deleted_images')) {
    $deleteNames = explode(',', $request->deleted_images);

    foreach ($deleteNames as $name) {
        $filePath = public_path('uploads/portfolios/' . $name);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // remove from array
        $images = array_filter($images, function ($img) use ($name) {
            return $img !== $name;
        });
    }

    $images = array_values($images);
}

// ✅ ADD new images
if ($request->hasFile('images')) {
    foreach ($request->file('images') as $imageFile) {
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        $imageFile->move(public_path('uploads/portfolios'), $imageName);
        $images[] = $imageName;
    }
}

// ✅ SAVE FINAL
$portfolio->images = $images;
$portfolio->save();
        $this->logNotification('Portfolio updated', 'Portfolio "' . $portfolio->title . '" updated successfully', 'success');

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully!');
    }

    public function destroy(Request $request, Portfolio $portfolio)
    {
        if ($request->ajax() || $request->wantsJson()) {
            // Delete single image
            if ($portfolio->image && File::exists(public_path('uploads/portfolios/' . $portfolio->image))) {
                File::delete(public_path('uploads/portfolios/' . $portfolio->image));
            }
            // Delete gallery images
            if ($portfolio->images) {
                foreach ($portfolio->images as $img) {
                    if (File::exists(public_path('uploads/portfolios/' . $img))) {
                        File::delete(public_path('uploads/portfolios/' . $img));
                    }
                }
            }
            $portfolio->delete();
            $this->logNotification('Portfolio deleted', 'Portfolio "' . $portfolio->title . '" deleted', 'warning');
            return response()->json(['message' => 'Portfolio deleted successfully!', 'success' => true]);
        }

        // Non-AJAX delete
        if ($portfolio->image && File::exists(public_path('uploads/portfolios/' . $portfolio->image))) {
            File::delete(public_path('uploads/portfolios/' . $portfolio->image));
        }
        if ($portfolio->images) {
            foreach ($portfolio->images as $img) {
                if (File::exists(public_path('uploads/portfolios/' . $img))) {
                    File::delete(public_path('uploads/portfolios/' . $img));
                }
            }
        }
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully!');
    }

    public function deleteImage(Request $request, Portfolio $portfolio, $index)
    {
        if ($request->ajax() || $request->wantsJson()) {
            if (isset($portfolio->images[$index])) {
                $imageName = $portfolio->images[$index];
                // Delete file
                if (File::exists(public_path('uploads/portfolios/' . $imageName))) {
                    File::delete(public_path('uploads/portfolios/' . $imageName));
                }
                // Remove from array
                array_splice($portfolio->images, $index, 1);
                $portfolio->save();
                
                return response()->json([
                    'success' => true, 
                    'message' => 'Image deleted successfully',
                    'images' => $portfolio->images
                ]);
            }
            return response()->json(['success' => false, 'message' => 'Image not found'], 404);
        }
        return response()->json(['success' => false, 'message' => 'AJAX only'], 400);
    }
public function showDetails($id): View
    {
        // Fetch specific portfolio by ID (or you can use slug if available)
        $portfolio = Portfolio::findOrFail($id);
        
        // Agar aapko category-wise related items bhi chahiye dashboard mein dikhane ke liye:
        $relatedPortfolios = Portfolio::where('status', 'active')
                                      ->where('id', '!=', $id)
                                      ->take(6)
                                      ->get();

   
  return view('ProtofolioDetails', compact('portfolio'));
    }
    public function publicIndex(): View
    {
        $portfolios = Portfolio::where('status', 'active')
                              ->orderBy('created_at', 'asc')
                              ->get();
        
        $workExperiences = \App\Models\WorkExperience::where('status', 'active')
                              ->orderBy('created_at', 'asc')
                              ->get();
        
        return view('protofolio', compact('portfolios', 'workExperiences'));
    }
}

