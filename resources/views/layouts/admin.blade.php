<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Panel')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @yield('styles')
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-5 border-b border-gray-700">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>

            <nav class="flex-1 p-4">
                <div class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : '' }}">
                        <i class="fas fa-th-large mr-3"></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-users mr-3"></i> Users
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-box mr-3"></i> Products
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-shopping-cart mr-3"></i> Orders
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-cog mr-3"></i> Settings
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm z-10 fixed top-0 left-64 right-0 h-16 flex items-center justify-between px-6">
                <div class="flex items-center">
                    <div class="relative">
                        <i class="fas fa-search text-gray-400 absolute left-3 top-3"></i>
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'Admin+User' }}" alt="User" class="w-8 h-8 rounded-full mr-2">
                        <span class="font-medium text-gray-700">{{ Auth::user()->name ?? 'Admin User' }}</span>
                    </div>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600 transition duration-200">
                            <i class="fas fa-sign-out-alt mr-1"></i> Logout
                        </button>
                    </form>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 overflow-y-auto">
                @yield('content')
            </div>
        </div>
    </div>

    @yield('scripts')
</body>
</html>
