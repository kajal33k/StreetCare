<x-layouts.app :title="__('Transform')">

    <div class="max-w-6xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">All Transform</h1>
            <a href="{{ route('backend.difference.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded shadow">
                + Create New
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-200 text-green-800 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid gap-4">
            @forelse($transforms as $transform)
                <div class="p-4 border border-gray-200 rounded-lg flex items-center justify-between bg-white shadow-sm">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">{{ $transform->title }}</h2>
                        <p class="text-gray-600 mt-1">{{ Str::limit($transform->description, 100) }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('backend.transform.edit', $transform) }}"
                           class="bg-blue-600 text-white p-2 rounded-lg hover:underline">
                            Edit
                        </a>
                        <form action="{{ route('backend.transform.destroy', $transform) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white p-2 rounded-lg hover:underline">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">No transformss found.</p>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $transforms->links() }}
        </div>
    </div>

</x-layouts.app>
