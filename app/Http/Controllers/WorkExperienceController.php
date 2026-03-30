<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class WorkExperienceController extends Controller
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
        $query = WorkExperience::query();
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('years', 'like', "%{$search}%");
            });
        }
        $query->orderBy($sortColumn, $sortDirection === 'asc' ? 'asc' : 'desc');
        $workExperiences = $query->paginate($perPage)->appends($request->query());
        return view('admin.workexperiences.index', compact('workExperiences', 'search', 'sortColumn', 'sortDirection', 'perPage'));
    }

    public function create(): View
    {
        return view('admin.workexperiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'years' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $workExperience = new WorkExperience();
        $workExperience->title = $request->title;
        $workExperience->years = $request->years;

        $workExperience->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/work-experiences'), $imageName);
            $workExperience->image = $imageName;
        }

        $workExperience->save();

        $this->logNotification('Work Experience created', 'New work experience "' . $request->title . '" created successfully', 'success');

        return redirect()->route('workexperiences.index')->with('success', 'Work Experience created successfully!');
    }

    public function edit(WorkExperience $workExperience): View
    {
        return view('admin.workexperiences.edit', compact('workExperience'));
    }

    public function update(Request $request, WorkExperience $workExperience)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'years' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $workExperience->title = $request->title;
        $workExperience->years = $request->years;

        $workExperience->status = $request->status;

        if ($request->hasFile('image')) {
            if ($workExperience->image && File::exists(public_path('uploads/work-experiences/' . $workExperience->image))) {
                File::delete(public_path('uploads/work-experiences/' . $workExperience->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/work-experiences'), $imageName);
            $workExperience->image = $imageName;
        }

        $workExperience->save();

        $this->logNotification('Work Experience updated', 'Work experience "' . $workExperience->title . '" updated successfully', 'success');

        return redirect()->route('workexperiences.index')->with('success', 'Work Experience updated successfully!');
    }

    public function destroy(Request $request, WorkExperience $workExperience)
    {
        if ($request->ajax() || $request->wantsJson()) {
            if ($workExperience->image && File::exists(public_path('uploads/work-experiences/' . $workExperience->image))) {
                File::delete(public_path('uploads/work-experiences/' . $workExperience->image));
            }
            $workExperience->delete();
            $this->logNotification('Work Experience deleted', 'Work experience "' . $workExperience->title . '" deleted', 'warning');
            return response()->json(['message' => 'Work Experience deleted successfully!', 'success' => true]);
        }

        if ($workExperience->image && File::exists(public_path('uploads/work-experiences/' . $workExperience->image))) {
            File::delete(public_path('uploads/work-experiences/' . $workExperience->image));
        }
        $workExperience->delete();
        return redirect()->route('workexperiences.index')->with('success', 'Work Experience deleted successfully!');
    }
}
