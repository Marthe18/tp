<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyContactRequest;
use App\Models\Property;
use  App\Http\Requests\SearchPropetiesResquest;
use App\Mail\PropertyContacMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use function PHPSTORM_META\expectedArguments;

class PropertyController extends Controller
{
    public function index( SearchPropetiesResquest $request) {

        $query = Property::query()->orderBy('created_at', 'desc');
        if ( $price = $request->validated('price')) {
            $query = $query->where('price','<=' , $price);
        }
        if ( $surface = $request->validated('surface')) {
            $query = $query->where('surface','>=' , $surface);
        }

        if ( $rooms = $request->validated('rooms')) {
            $query = $query->where('rooms','>=' , $rooms);
        }
        if ( $title = $request->validated('title')) {
            $query = $query->where('title','like' ," %{$title}%");
        }
        return view('property.index', [
            'properties' => $query->paginate(16),
            'input' => $request->validated()

        ]);

    }

    public function show(string $slug, Property $property) {
        $expectedSlug =$property->getSlug();
        if ($slug !== $expectedSlug) {
            return to_route('property.show' , ['slug' =>$expectedSlug, 'property' => $property]);
        }
        return view('property.show', [
            'property'=> $property
        ]);
    }

    public function contact( Property $property, PropertyContactRequest $request) {
        Mail::send(new PropertyContacMail($property, $request->validated()));
        return back()->with('success', 'votre demande de contact a bien été renvoyé');
    }
}
