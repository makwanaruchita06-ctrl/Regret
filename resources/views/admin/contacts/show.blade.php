<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details - {{ $contact->name }} - Regret Consultancy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <style>
        :root {
            --primary: #0257b3;
            --primary-hover: #0d9488;
            --secondary: #0f172a;
        }
        body { background-color: #f1f5f9; }
    </style>
</head>
<body class="font-sans">
    <!-- Include Sidebar -->
    @include('layouts.sidebar')
    
    <!-- Include Topbar -->
    @include('layouts.topbar')
    
    <!-- Main Content -->
    <main class="pt-16 p-4 md:p-6 md:ml-64 mt-10">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('contacts.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 hover:border-slate-400 text-sm font-medium text-slate-700 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to List
                </a>
            </div>
            
            <!-- Contact Details Card -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <!-- Header -->
                <div class="p-6 border-b border-slate-200 bg-gradient-to-r from-slate-50 to-slate-100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h1 class="text-3xl font-bold text-[#1e293b]">Contact Inquiry Details</h1>
                            <p class="text-sm text-slate-500 mt-1">From {{ $contact->name }}</p>
                        </div>
                        <div class="flex items-center gap-3">
                            @if($contact->status === 'unread')
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800">Unread</span>
                            @elseif($contact->status === 'read')
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">Read</span>
                            @else
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">Replied</span>
                            @endif
                            <span class="text-xs text-slate-500">ID: #{{ $contact->id }}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Main Details Grid -->
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                        <!-- Contact Info -->
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-500 mb-2">Name</label>
                                <div class="p-4 bg-slate-50 rounded-lg">
                                    <h3 class="text-2xl font-bold text-slate-900">{{ $contact->name }}</h3>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-slate-500 mb-2">Email</label>
                                <div class="p-4 bg-slate-50 rounded-lg">
                                    <p class="text-slate-900 font-medium">{{ $contact->email }}</p>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-slate-500 mb-2">Phone</label>
                                <div class="p-4 bg-slate-50 rounded-lg">
                                    <p class="text-slate-900 font-medium">{{ $contact->phone ?? 'Not provided' }}</p>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-slate-500 mb-2">Subject</label>
                                <div class="p-4 bg-slate-50 rounded-lg">
                                    <p class="text-slate-900 font-semibold">{{ $contact->subject ?? 'No subject' }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-500 mb-4">Message</label>
                            <div class="p-6 bg-slate-50 rounded-xl border border-slate-200 min-h-[300px]">
                                <p class="text-slate-800 leading-relaxed whitespace-pre-wrap">{{ $contact->message }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline & Status -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Received Date -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-100">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Received</h4>
                                    <p class="text-sm text-slate-600">{{ $contact->created_at->format('M d, Y h:i A') }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Status & Actions -->
                        <div class="bg-gradient-to-r from-emerald-50 to-green-50 p-6 rounded-xl border border-emerald-100">
                            <h4 class="font-semibold text-slate-900 mb-4">Status & Actions</h4>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <form action="{{ route('contacts.mark-read', $contact) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="w-full sm:w-auto px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium transition-all text-sm">
                                        Mark as Read
                                    </button>
                                </form>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="flex-1" onsubmit="return confirm('Delete this inquiry?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full sm:w-auto px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium transition-all text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

