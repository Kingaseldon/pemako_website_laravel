<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /*\
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption' => 'required',
        ]);
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);

        $gallery = new Gallery;
        $gallery->image = $fileName;
        $gallery->caption = $request->caption;
        $gallery->save();

        return redirect()->route('galleries.index')
            ->with('success', 'Image Uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {

        $fileName = '';

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            if ($gallery->image) {
                Storage::delete('public/images/' . $gallery->image);
            }
        } else {
            $fileName = $gallery->image;
        }
        $gallery->caption = $request->input('caption');
        $gallery->image = $fileName;
        $gallery->save();
        return redirect()->route('galleries.index')->with('success', 'Gallery Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
     

        if ($gallery->image) {
            Storage::delete('public/images/' . $gallery->image);
        }
        $gallery->delete();

        return redirect()->route('galleries.index')->with([
            'success' => 'gallery deleted successfully!',
       
        ]);
    }
}
