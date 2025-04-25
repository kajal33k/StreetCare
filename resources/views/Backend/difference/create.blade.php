<x-layouts.app :title="__('Difference')">

    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create Difference</h1>

        <form action="{{ route('backend.difference.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-transparent p-6 rounded-lg shadow-sm border border-gray-200">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-100 mb-1">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                       class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       required>
                @error('title')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-100 mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                          class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                          required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-100 mb-1">Image</label>
                <input type="file" id="image" name="image"
                       class="w-full text-sm text-gray-100 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-white file:bg-indigo-600 hover:file:bg-indigo-700">
                @error('image')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-green-500">
                    Save
                </button>
            </div>
        </form>
    </div>

</x-layouts.app>
