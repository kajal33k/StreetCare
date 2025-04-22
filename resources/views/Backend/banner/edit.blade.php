@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-xl">
    <h1 class="text-2xl font-bold mb-6">Edit Banner</h1>

    <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded" value="{{ old('title', $banner->title) }}" required>
            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full border p-2 rounded" rows="4" required>{{ old('description', $banner->description) }}</textarea>
            @error('description') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-semibold">Current Image</label>
            <img src="{{ asset('storage/' . $banner->image) }}" class="w-full h-48 object-cover rounded mb-2">
            <input type="file" name="image" class="w-full">
            @error('image') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
