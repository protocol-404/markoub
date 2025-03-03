<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-6">
                        <a href="{{ route('admin.categories.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to Categories
                        </a>
                    </div>

                    <div class="bg-gray-50 p-6 rounded">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $category->name }}</h3>
                            <p class="text-sm text-gray-500">Slug: {{ $category->slug }}</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-md font-medium text-gray-700">Description:</h4>
                            <p class="mt-1">{{ $category->description ?: 'No description available' }}</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-md font-medium text-gray-700">Status:</h4>
                            @if($category->is_active)
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Active</span>
                            @else
                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Inactive</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <h4 class="text-md font-medium text-gray-700">Created At:</h4>
                            <p>{{ $category->created_at->format('M d, Y H:i') }}</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-md font-medium text-gray-700">Last Updated:</h4>
                            <p>{{ $category->updated_at->format('M d, Y H:i') }}</p>
                        </div>

                        <div class="flex mt-6 space-x-3">
                            <a href="{{ route('admin.categories.edit', $category) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
