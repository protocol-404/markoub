@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Category') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('name')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                            <textarea name="description" id="description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
                                Active
                            </label>
                        </div>

                        <div class="flex items-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Category
                            </button>
                            <a href="{{ route('admin.categories.index') }}" class="ml-4 text-gray-500">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
