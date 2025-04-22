<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BannerController extends Controller
{
    /**
     * Display a listing of the banners.
     */
    public function index(): View
    {
        $banners = Banner::latest()->paginate(10);
        return view('banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new banner.
     */
    public function create(): View
    {
        return view('banner.create');
    }

    /**
     * Store a newly created banner in storage.
     */
    public function store(BannerRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        Banner::create($data);

        return redirect()->route('banner.index')->with('success', 'Banner created successfully!');
    }

    /**
     * Show the form for editing the specified banner.
     */
    public function edit(Banner $banner): View
    {
        return view('banner.edit', compact('banner'));
    }

    /**
     * Update the specified banner in storage.
     */
    public function update(BannerRequest $request, Banner $banner): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($data);

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully!');
    }

    /**
     * Remove the specified banner from storage.
     */
    public function destroy(Banner $banner): RedirectResponse
    {
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully!');
    }
}
