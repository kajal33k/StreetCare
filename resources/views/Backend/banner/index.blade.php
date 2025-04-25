<x-layouts.app :title="__('Banner')">
   
    
    <div class="max-w-6xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">All Banners</h1>
            <a href="{{ route('backend.banner.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                + Create New
            </a>
        </div>
    
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
    
        <div class="grid gap-4">
            @forelse($banners as $banner)
                <div class="p-4 border rounded flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $banner->title }}</h2>
                        <p class="text-gray-600">{{ Str::limit($banner->description, 100) }}</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('backend.banner.edit', $banner) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('backend.banner.destroy', $banner) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>No banners found.</p>
            @endforelse
        </div>
    
        <div class="mt-6">
            {{ $banners->links() }}
        </div>
    </div>
  
    
</x-layouts.app>
