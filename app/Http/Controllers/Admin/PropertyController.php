<?php

namespace App\Http\Controllers\Admin;
use App\Models\Property; 
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    
        return view('admin.properties.create', [
            'property' => $property
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {

    $property = Property::create($request->validated());
    return to_route('admin.property.index')->with('success' , 'Le bien a été créér');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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