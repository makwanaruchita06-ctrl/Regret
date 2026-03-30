<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Portfolio - Regret Consultancy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">

    <style>
        :root {
            --primary: #0257b3;
            --primary-hover: #0d9488;
            --secondary: #0f172a;
        }

        body {
            background-color: #f1f5f9;
        }

        .sidebar {
            background-color: var(--secondary);
        }

        .topbar {
            background-color: var(--secondary);
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="font-sans">

    @include('layouts.sidebar')
    @include('layouts.topbar')

    <script>
    function deleteGalleryImage(portfolioId, index) {
        if (!confirm('Delete this image? This cannot be undone.')) return;
        
        fetch(`/admin/portfolios/${portfolioId}/images/${index}`, {
            method: 'DELETE',
            headers: {
'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove from DOM
                const container = document.getElementById('galleryImages');
                const imgDiv = container.children[index];
                if (imgDiv) imgDiv.remove();
                // Reindex remaining (shift indices)
                Array.from(container.children).forEach((div, newIndex) => {
                    div.querySelector('img').dataset.imageIndex = newIndex;
                    div.querySelector('button').onclick = () => deleteGalleryImage(portfolioId, newIndex);
                });
                // Show success
                showSuccessPopup(data.message);
            } else {
                showErrorPopup('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showErrorPopup('Delete failed');
        });
    }

    function showSuccessPopup(message) {
        const popup = document.createElement('div');
        popup.id = 'successPopup';
        popup.className = 'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50';
        popup.innerHTML = `
            <div class="bg-white rounded-2xl shadow-2xl p-8 flex flex-col items-center max-w-md mx-4">
                <div class="w-20 h-20 rounded-full bg-green-500 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2 text-center">Success!</h3>
                <p class="text-gray-600 text-center">${message}</p>
                <button onclick="this.closest('#successPopup').remove()" class="mt-6 px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">OK</button>
            </div>
        `;
        document.body.appendChild(popup);
        setTimeout(() => { 
            const p = document.getElementById('successPopup'); 
            if (p) p.remove(); 
        }, 4000);
    }

    function showErrorPopup(message) {
        const popup = document.createElement('div');
        popup.id = 'errorPopup';
        popup.className = 'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50';
        popup.innerHTML = `
            <div class="bg-white rounded-2xl shadow-2xl p-8 flex flex-col items-center max-w-md mx-4">
                <div class="w-20 h-20 rounded-full bg-red-500 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-2.268-.833-3.038 0L3.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2 text-center">Error</h3>
                <p class="text-gray-600 text-center">${message}</p>
                <button onclick="this.closest('#errorPopup').remove()" class="mt-6 px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">OK</button>
            </div>
        `;
        document.body.appendChild(popup);
        setTimeout(() => { 
            const p = document.getElementById('errorPopup'); 
            if (p) p.remove(); 
        }, 5000);
    }

    document.addEventListener('click', function(e) {
        if (e.target.dataset.loading === 'true') {
            e.preventDefault();
            return false;
        }
    });
    </script>

    <main class="pt-16 p-4 md:p-6 md:ml-64 mt-10">

        <div class="max-w-3xl mx-auto">

            <div class="rounded-xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="p-4 md:p-6 border-b border-slate-200">

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                        <div>

                            <h3 class="text-xl font-bold text-[#1e293b]">Edit Portfolio</h3>

                            <p class="text-sm text-slate-500 mt-1">Update portfolio entry</p>

                        </div>

                        <a href="{{ route('portfolios.index') }}"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 inline-flex items-center gap-2 justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />

                            </svg>

                            Back

                        </a>

                    </div>

                </div>

                <form method="POST" action="{{ route('portfolios.update', $portfolio) }}" enctype="multipart/form-data"
                    class="p-4 md:p-6">

                    @csrf
                    @method('PUT')

                    <div class="mb-6">

                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Title <span class="text-red-500">*</span>
                        </label>

                        <input type="text" name="title" value="{{ old('title', $portfolio->title) }}"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0257b3] @error('title') border-red-500 @enderror"
                            placeholder="Enter portfolio title">

                        @error('title')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="mb-6">

                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Description
                        </label>


                        <textarea name="description" rows="4"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0257b3] @error('description') border-red-500 @enderror"
                            placeholder="Enter portfolio description">{{ old('description', $portfolio->description) }}</textarea>

                        @error('description')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                    </div>

                    <!-- Keywords -->

                    <div class="mb-6">

                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Keywords
                        </label>

                        <textarea name="keywords" rows="3"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0257b3] @error('keywords') border-red-500 @enderror"
                            placeholder="Enter keywords (comma separated)">{{ old('keywords', $portfolio->keywords) }}</textarea>

                        @error('keywords')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="mb-6">

                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Image
                        </label>

@if($portfolio->image)
                            <div class="mb-3">
                                <img src="{{ asset('uploads/portfolios/' . $portfolio->image) }}"
                                    class="w-28 h-28 md:w-32 md:h-32 object-cover rounded-lg">
                                <p class="mt-1 text-xs text-slate-500">
                                    Current Featured Image (new replaces it)
                                </p>
                            </div>
                        @endif

                        @if($portfolio->images && count($portfolio->images) > 0)
                            <div class="mb-3">
                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Current Gallery Images <span class="text-xs text-slate-500">(Click trash to delete)</span>
                                </label>
   <div class="grid grid-cols-2 md:grid-cols-4 gap-2" id="galleryImages">
    
    @foreach($portfolio->images as $img)
     <div class="relative group image-item w-20 h-20">

    <img src="{{ asset('uploads/portfolios/' . $img) }}" 
         class="w-full h-full object-cover rounded-lg border">

    <button 
        type="button"
        onclick="removeGalleryImage(this, '{{ $img }}')"
        class="absolute top-1 right-1 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold opacity-0 group-hover:opacity-100 transition-all z-10 shadow-md">
        ✕
    </button>

</div>
    @endforeach

</div>

<input type="hidden" name="deleted_images" id="deletedImages">
                                <p class="mt-1 text-xs text-slate-500">
                                    Hover trash icon to delete. New uploads will be added.
                                </p>
                            </div>
                        @endif

                        <label class="block text-sm font-medium text-slate-700 mb-2 mt-4">
                            Add More Gallery Images
                        </label>
                        <input type="file" name="images[]" accept="image/*" multiple
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0257b3]">
                        <p class="mt-1 text-xs text-slate-500">
                            Append new images (jpeg, png, jpg, gif, svg. Max 10, 2MB each)
                        </p>

                    </div>

                    <div class="mb-6">

                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>

                        <select name="status"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0257b3] @error('status') border-red-500 @enderror">

                            <option value="active" {{ old('status', $portfolio->status) == 'active' ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="inactive" {{ old('status', $portfolio->status) == 'inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>

                        </select>

                        @error('status')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="flex flex-col sm:flex-row justify-start gap-3">



                        <button type="submit" class="btn-primary px-6 py-2 rounded-lg">

                            Update Portfolio

                        </button>
                        <a href="{{ route('portfolios.index') }}"
                            class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 text-center">

                            Cancel

                        </a>
                    </div>

                </form>

            </div>

        </div>

    </main>
<script>
let deletedImages = [];

function removeGalleryImage(btn, imageName) {
    if (!confirm('Delete this image?')) return;

    const item = btn.closest('.image-item');

    // UI remove
    item.style.transition = "all 0.3s ease";
    item.style.opacity = "0";
    item.style.transform = "scale(0.8)";

    setTimeout(() => {
        item.remove();
    }, 300);

    // ✅ store IMAGE NAME (not index)
    deletedImages.push(imageName);

    document.getElementById('deletedImages').value = deletedImages.join(',');
}
</script>
</body>

</html>