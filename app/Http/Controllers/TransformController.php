<?php

namespace App\Http\Controllers;

use App\Models\Transform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransformController extends Controller
{
    public function index()
    {
        $transforms = Transform::latest()->paginate(10);
        return view('backend.transform.index', compact('transforms'));
    }

    public function create()
    {
        return view('backend.transform.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateTransform($request);

        $validated['image'] = $request->file('image')->store('transforms', 'public');

        Transform::create($validated);

        return redirect()->route('backend.transform.index')->with('success', 'Transform created successfully.');
    }

    public function show(Transform $transform)
    {
        return view('backend.transform.show', compact('transform'));
    }

    public function edit(Transform $transform)
    {
        return view('backend.transform.edit', compact('transform'));
    }

    public function update(Request $request, Transform $transform)
    {
        $validated = $this->validateTransform($request, true);

        if ($request->hasFile('image')) {
            if ($transform->image) {
                Storage::disk('public')->delete($transform->image);
            }

            $validated['image'] = $request->file('image')->store('transforms', 'public');
        }

        $transform->update($validated);

        return redirect()->route('backend.transform.index')->with('success', 'Transform updated successfully.');
    }

    public function destroy(Transform $transform)
    {
        if ($transform->image) {
            Storage::disk('public')->delete($transform->image);
        }

        $transform->delete();

        return redirect()->route('backend.transform.index')->with('success', 'Transform deleted successfully.');
    }

    private function validateTransform(Request $request, $isUpdate = false)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => ($isUpdate ? 'nullable' : 'required') . '|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ];

        return $request->validate($rules);
    }
}
