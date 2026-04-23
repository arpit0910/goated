<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryItem;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = GalleryItem::latest()->get();
        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'required|image|max:5120',
            'type' => 'required',
            'is_featured' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        GalleryItem::create($data);
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item uploaded successfully.');
    }

    public function edit(GalleryItem $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, GalleryItem $gallery)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image|max:5120',
            'type' => 'required',
            'is_featured' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($data);
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(GalleryItem $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item deleted successfully.');
    }
}
