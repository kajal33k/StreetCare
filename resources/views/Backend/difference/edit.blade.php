<x-layouts.app :title="__('Difference')">

    <div class="max-w-xl mx-auto py-10 px-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Difference</h1>

        <form action="{{ route('backend.difference.update', $difference) }}" method="POST" enctype="multipart/form-data"
              class="space-y-6 bg-transparent p-6 rounded-lg shadow-sm border border-gray-200">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-100 mb-1">Title</label>
                <input type="text" id="title" name="title"
                       value="{{ old('title', $difference->title) }}"
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
                          required>{{ old('description', $difference->description) }}</textarea>
                @error('description')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-100 mb-2">Current Image</label>
                <div class="mb-3">
                    @if($difference->image)
                        <img src="{{ asset('storage/' . $difference->image) }}"
                             alt="Current Image"
                             class="w-full h-48 object-cover rounded-lg border border-gray-200">
                    @else
                        <p class="text-sm text-gray-100">No image uploaded.</p>
                    @endif
                </div>

                <input type="file" id="image" name="image"
                       class="w-full text-sm text-gray-100 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-white file:bg-indigo-600 hover:file:bg-indigo-700">
                @error('image')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    Update
                </button>
            </div>
        </form>
    </div>

</x-layouts.app>
