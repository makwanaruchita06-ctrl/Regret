<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - Regret Consultancy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #0f172a;
        }
        .teal-accent {
            color: #0257b3;
        }
        .teal-bg {
            background-color: #0257b3;
        }
        .teal-bg-hover:hover {
            background-color: #0d9488;
        }
        input {
            background-color: #1e293b;
            border: 1px solid #334155;
            color: #e5e7eb;
        }
        input:focus {
            border-color: #0257b3;
            outline: none;
        }
        input::placeholder {
            color: #94a3b8;
        }
        .error-border {
            border-color: #ef4444 !important;
        }
    </style>
</head>
<body class="h-screen flex">
    <!-- Left Side - Image (same as login) -->
    <div class="hidden lg:flex lg:w-1/2 bg-[#0257b3] items-center justify-center">
        <img src="{{ asset('image/middl.png') }}" alt="Regret Consultancy" class="w-full h-full object-cover">
    </div>
    
    <!-- Right Side - Change Password Form (adapted from current form) -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-[#0f172a]">
        <div class="w-full max-w-lg">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold teal-accent mb-2">Change Password</h1>
                <p class="text-[#e5e7eb]">Enter current password and new password below</p>
            </div>
            
            @if (session('success'))
            <div class="mb-6 p-4 bg-green-500/10 border border-green-500 text-green-400 text-sm rounded-lg">
                {{ session('success') }}
            </div>
            @endif
            
            @if ($errors->any())
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500 text-red-400 text-sm rounded-lg">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{ route('admin.password.update') }}" method="POST" class="space-y-5">
                @csrf @method('PUT')
                
                <div>
                    <label class="block text-sm font-medium text-[#e5e7eb] mb-2">Current Password *</label>
                    <input type="password" name="current_password" required 
                           class="w-full px-4 py-3 rounded-lg" placeholder="Enter current password">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-[#e5e7eb] mb-2">New Password *</label>
                    <input type="password" name="password" required minlength="8"
                           class="w-full px-4 py-3 rounded-lg" placeholder="Enter new password (min 8 chars)">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-[#e5e7eb] mb-2">Confirm New Password *</label>
                    <input type="password" name="password_confirmation" required minlength="8"
                           class="w-full px-4 py-3 rounded-lg" placeholder="Confirm new password">
                </div>
                
                <div class="flex gap-4 mt-8">
                    <button type="submit" class="flex-1 teal-bg teal-bg-hover text-white font-semibold py-3 px-6 rounded-lg">
                        Change Password
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex-1 text-center py-3 px-6 bg-[#1e293b] hover:bg-[#334155] text-[#e5e7eb] rounded-lg font-semibold transition-all">
                        Back to Dashboard
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

