<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBannerRequest;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->paginate(10);
        return view('backend.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('backend.banner.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
    
        // Store image
        $imagePath = $request->file('image')->store('banners', 'public');
    
        // Save to database
        Banner::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath, // this will be like banners/filename.jpg
        ]);
    
        return redirect()->route('backend.banner.index')->with('success', 'Banner created!');
    }

    public function show(Banner $banner)
    {
        return view('backend.banner.show', compact('banner'));
    }

    public function edit(Banner $banner)
    {
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
{
    $banner = Banner::findOrFail($id);

    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('banners', 'public');
    }

    $banner->update($data);

    return redirect()->route('backend.banner.index')->with('success', 'Banner updated!');
}

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('backend.banner.index')->with('success', 'Banner deleted successfully.');
    }
}
