<x-layouts.app :title="__('Banner')">
   
<div class="max-w-xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Create Banner</h1>

    <form action="{{ route('backend.banner.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border px-4 py-2 rounded" required>
            @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" rows="4" class="w-full border px-4 py-2 rounded" required>{{ old('description') }}</textarea>
            @error('description') <div class="text-red-600">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block font-medium">Image</label>
            <input type="file" name="image" class="block w-full">
            @error('image') <div class="text-red-600">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</div>

</x-layouts.app>






