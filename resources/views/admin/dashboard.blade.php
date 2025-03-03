@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="bg-gray-50 min-h-screen pt-20">
    <!-- Dashboard Header -->
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Dashboard</h1>
            <p class="text-gray-600">Welcome back, {{ Auth::user()->name ?? 'Admin' }}</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Users Stats -->
            <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg hover:translate-y-[-5px]">
                <div class="flex items-center">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-users text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Users</p>
                        <p class="text-2xl font-bold text-gray-800">1,245</p>
                        <p class="text-sm text-green-600 flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> +12% from last month
                        </p>
                    </div>
                </div>
            </div>

            <!-- Orders Stats -->
            <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg hover:translate-y-[-5px]">
                <div class="flex items-center">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-shopping-cart text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Orders</p>
                        <p class="text-2xl font-bold text-gray-800">342</p>
                        <p class="text-sm text-green-600 flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> +8% from last month
                        </p>
                    </div>
                </div>
            </div>

            <!-- Revenue Stats -->
            <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg hover:translate-y-[-5px]">
                <div class="flex items-center">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-dollar-sign text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Revenue</p>
                        <p class="text-2xl font-bold text-gray-800">$13,456</p>
                        <p class="text-sm text-green-600 flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> +23% from last month
                        </p>
                    </div>
                </div>
            </div>

            <!-- Growth Stats -->
            <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg hover:translate-y-[-5px]">
                <div class="flex items-center">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-chart-line text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Growth</p>
                        <p class="text-2xl font-bold text-gray-800">18.2%</p>
                        <p class="text-sm text-green-600 flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> +4.3% from last month
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Activity -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Recent Activity</h2>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="px-6 py-4 flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-user-plus text-blue-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">New user registered</h4>
                                <p class="text-gray-600 text-sm">John Doe just created an account</p>
                                <span class="text-xs text-gray-500">2 minutes ago</span>
                            </div>
                        </div>

                        <div class="px-6 py-4 flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-shopping-bag text-blue-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">New order placed</h4>
                                <p class="text-gray-600 text-sm">Order #12345 was placed</p>
                                <span class="text-xs text-gray-500">45 minutes ago</span>
                            </div>
                        </div>

                        <div class="px-6 py-4 flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-comment text-blue-700"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">New comment</h4>
                                <p class="text-gray-600 text-sm">Jane Smith commented on a product</p>
                                <span class="text-xs text-gray-500">3 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 text-center">
                        <a href="#" class="text-blue-700 hover:text-blue-900 text-sm font-medium">View all activity</a>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div>
                <div class="bg-white rounded-xl shadow-md">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Quick Actions</h2>
                    </div>
                    <div class="p-6 grid grid-cols-2 gap-4">
                        <a href="#" class="bg-gray-50 hover:bg-blue-700 hover:text-white text-gray-800 group flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 transition-colors duration-300">
                            <i class="fas fa-plus text-blue-700 group-hover:text-white text-xl mb-2"></i>
                            <span class="text-sm">Add Product</span>
                        </a>
                        <a href="#" class="bg-gray-50 hover:bg-blue-700 hover:text-white text-gray-800 group flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 transition-colors duration-300">
                            <i class="fas fa-user-plus text-blue-700 group-hover:text-white text-xl mb-2"></i>
                            <span class="text-sm">Add User</span>
                        </a>
                        <a href="#" class="bg-gray-50 hover:bg-blue-700 hover:text-white text-gray-800 group flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 transition-colors duration-300">
                            <i class="fas fa-cog text-blue-700 group-hover:text-white text-xl mb-2"></i>
                            <span class="text-sm">Settings</span>
                        </a>
                        <a href="#" class="bg-gray-50 hover:bg-blue-700 hover:text-white text-gray-800 group flex flex-col items-center justify-center p-4 rounded-lg border border-gray-200 transition-colors duration-300">
                            <i class="fas fa-file-alt text-blue-700 group-hover:text-white text-xl mb-2"></i>
                            <span class="text-sm">Reports</span>
                        </a>
                    </div>
                </div>

                <!-- Recent Notifications -->
                <div class="bg-white rounded-xl shadow-md mt-6">
                    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Notifications</h2>
                        <span class="bg-blue-700 text-white text-xs rounded-full py-1 px-2">3 New</span>
                    </div>
                    <div class="p-4">
                        <div class="bg-blue-50 text-blue-700 px-4 py-3 rounded-lg mb-3 flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            <p class="text-sm">System update scheduled for tomorrow</p>
                        </div>
                        <div class="bg-green-50 text-green-700 px-4 py-3 rounded-lg mb-3 flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            <p class="text-sm">New feature successfully deployed</p>
                        </div>
                        <div class="bg-yellow-50 text-yellow-700 px-4 py-3 rounded-lg flex items-center">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <p class="text-sm">Low inventory alert for 5 products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Dashboard loaded!');
    });
</script>
@endsection
