<?php

namespace App\Http\Controllers;

use App\Models\Difference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DifferenceController extends Controller
{
    public function index()
    {
        $differences = Difference::latest()->paginate(10);
        return view('backend.difference.index', compact('differences'));
    }

    public function create()
    {
        return view('backend.difference.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        // Store image
        $imagePath = $request->file('image')->store('differences', 'public');

        // Save to database
        Difference::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('backend.difference.index')->with('success', 'Difference created successfully.');
    }

    public function show(Difference $difference)
    {
        return view('backend.difference.show', compact('difference'));
    }

    public function edit(Difference $difference)
    {
        return view('backend.difference.edit', compact('difference'));
    }

    public function update(Request $request, Difference $difference)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Optionally delete the old image here
            if ($difference->image) {
                Storage::disk('public')->delete($difference->image);
            }

            $validated['image'] = $request->file('image')->store('differences', 'public');
        }

        $difference->update($validated);

        return redirect()->route('backend.difference.index')->with('success', 'Difference updated successfully.');
    }

    public function destroy(Difference $difference)
    {
        if ($difference->image) {
            Storage::disk('public')->delete($difference->image);
        }

        $difference->delete();

        return redirect()->route('backend.difference.index')->with('success', 'Difference deleted successfully.');
    }
}
