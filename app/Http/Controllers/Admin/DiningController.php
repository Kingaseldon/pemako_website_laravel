<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DiningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dinings=Dining::all();
        return view('admin.dining.index',compact('dinings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dining.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'description' => 'required'
        ]);
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);

        $dining = new Dining();
        $dining->image = $fileName;
        $dining->name = $request->name;
        $dining->description = $request->description;
        $dining->save();

        return redirect()->route('dining.index')
        ->with('success', 'Dining Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dining $dining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dining $dining)
    {
        return view('admin.dining.edit', compact('dining'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dining $dining)
    {

        $fileName = '';

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            if ($dining->image) {
                Storage::delete('public/images/' . $dining->image);
            }
        } else {
            $fileName = $dining->image;
        }
        $dining->name = $request->input('name');
        $dining->description = $request->input('description');
        $dining->image = $fileName;
        $dining->save();
        return redirect()->route('dining.index')->with('success', 'Dining Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dining $dining)
    {

        if ($dining->image) {
            Storage::delete('public/images/' . $dining->image);
        }
        $dining->delete();

        return redirect()->route('dining.index')->with([
            'success' => 'Dining deleted successfully!',

        ]);
    }
}
