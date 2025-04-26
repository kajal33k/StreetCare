<x-layouts.app :title="__('Difference')">

    <div class="max-w-6xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">All Differences</h1>
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
            @forelse($differences as $difference)
                <div class="p-4 border border-gray-200  rounded-lg flex items-center justify-between shadow-xl">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">{{ $difference->title }}</h2>
                        <p class="text-gray-600 mt-1">{{ Str::limit($difference->description, 100) }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('backend.difference.edit', $difference) }}"
                           class="bg-blue-600 text-white p-2 rounded-lg hover:underline">
                            Edit
                        </a>
                        <form action="{{ route('backend.difference.destroy', $difference) }}" method="POST"
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
                <p class="text-gray-500">No differences found.</p>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $differences->links() }}
        </div>
    </div>

</x-layouts.app>
