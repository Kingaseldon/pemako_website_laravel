<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Accomodation;
use App\Models\Amenity;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
        //     $accomodations = Accomodation::with('amenities')->get();

        //     return response()->json(['message' => 'Success', 'accomodations' => $accomodations]);
        // } catch(Exception $e) {
        //     return response()->json(['message'=> $e->getMessage()]);
        // }
        $accomodations = Accomodation::with('amenities')->get();
        return view('admin.accomodation.index', compact('accomodations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accomodation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'amenity' => 'required|string',
            'more_description' => 'required|string',
            'slider' => 'required|array',
            
        ]);
        // Store slider images
        $sliderImages = [];
        if ($request->hasFile('slider')) {
            foreach ($request->file('slider') as $sliderImage) {
                $sliderImagePath = $sliderImage->store('slider_images', 'public');
                $sliderImages[] = $sliderImagePath;
            }
        }

        $amenitiesInput = $validatedData['amenity'];
        $amenitiesArray = explode(',', $amenitiesInput);

        // Store the image
        $imagePath = $request->file('image')->store('room_images', 'public');

        // Create the accommodation
        $accomodation = new Accomodation([
            'name' => $validatedData['name'],
            'image' => $imagePath,
            'description' => $validatedData['description'],
            'more_description' => $validatedData['more_description'],
        ]);
        $accomodation->save();

        foreach ($sliderImages as $sliderImagePath) {
            $sliderImage = new Slider(['slider' => $sliderImagePath]);
            $accomodation->sliders()->save($sliderImage);
        }

        // Attach amenities
        foreach ($amenitiesArray as $amenityName) {
            $amenity = new Amenity(['amenity' => trim($amenityName)]);
            $accomodation->amenities()->save($amenity);
        }


        return redirect()->route('rooms.index')
        ->with('success', 'Room Uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $room)
    {
        $accomodations = Accomodation::with('sliders')->find($room);

        if (!$accomodations) {
            abort(404);
        }
        return view('admin.accomodation.show', compact('accomodations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accomodation $room)
    {
        $amenities = Amenity::all();
        $sliders=Slider::all();
        return view('admin.accomodation.edit', compact('room','amenities','sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accomodation $room)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'amenity' => 'required|string',
            'more_description' => 'required|string',
            'slider' => 'array',
        ]);

        // Store slider images
        $sliderImages = [];
        if ($request->hasFile('slider')) {
            foreach ($request->file('slider') as $sliderImage) {
                $sliderImagePath = $sliderImage->store('slider_images', 'public');
                $sliderImages[] = $sliderImagePath;
            }
        }

        $amenitiesInput = $validatedData['amenity'];
        $amenitiesArray = explode(',', $amenitiesInput);

        // Update the room's basic information
        $room->name = $validatedData['name'];
        $room->description = $validatedData['description'];
        $room->more_description = $validatedData['more_description'];

        // Update the room's image if a new one is provided
        if ($request->hasFile('image')) {
            // Delete the old image file
            Storage::disk('public')->delete($room->image);

            // Store the new image file
            $imagePath = $request->file('image')->store('room_images', 'public');
            $room->image = $imagePath;
        }

        // Save the updated room information
        $room->save();

        // Update slider images
        foreach ($sliderImages as $sliderImagePath) {
            $sliderImage = new Slider(['slider' => $sliderImagePath]);
            $room->sliders()->save($sliderImage);
        }

        // Remove existing amenities and attach the new ones
        $room->amenities()->delete();
        foreach ($amenitiesArray as $amenityName) {
            $amenity = new Amenity(['amenity' => trim($amenityName)]);
            $room->amenities()->save($amenity);
        }

        if ($request->has('remove_sliders')) {
            $removedSliders = $request->input('remove_sliders');

            foreach ($removedSliders as $removedSliderPath) {
                // Delete the slider image from storage
                Storage::disk('public')->delete($removedSliderPath);

                // Delete the slider entry from the database
                Slider::where('slider', $removedSliderPath)->delete();
            }
        }


        return redirect()->route('rooms.index')
        ->with('success', 'Room updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accomodation $room)
    {
        Storage::disk('public')->delete($room->image);

        // Delete the associated amenities
        $room->amenities()->delete();

        // Delete the room (room) itself
        $room->delete();

        return redirect()->route('rooms.index')
        ->with('success', 'Room and amenities deleted successfully.');
    }
}
