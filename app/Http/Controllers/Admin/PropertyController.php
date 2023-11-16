<?php

namespace App\Http\Controllers\Admin;
use App\Models\Property;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $property = new Property();
        $property->fill([
            'surface' => 40,
            'rooms' => 3,
            'bedrooms' => 1,
            'floor' => 0,
            'postal_code' => 34000,
            'sold' => false,
        ]);

        return view('admin.properties.create', [
            'property' => $property,
            'options' => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
    $property = Property::create($request->validated());
    $property->options()->sync($request->validated('option'));
    $pathImage = Storage::disk('public')->put('images', $request->picture);
    // $imageName = time().'.'.$request->picture->extension();
    // $imagePath = storage_path('app/public/images/');
    // $request->picture->move($imagePath, $imageName);
    $property->picture = $pathImage;
    $property->save();
    return to_route('admin.property.index')->with('success' , 'Le bien a été créér');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
       return view('admin.properties.create', [
        'property' => $property,
        'options' => Option::pluck('name', 'id'),

       ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $property->update($request->validated());
        $property->options()->sync($request->validated('option'));
        return to_route('admin.property.index')->with('succes', 'le bien a été modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return to_route('admin.property.index')->with('success' , 'le bien a été supprimer avec succes');

    }
}
