@extends('admin.admin')
@section('title', $property->exists ? "Editer un bien" : "Créer un bien")

@section('content')
    <h1>@yield('title')</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ??  $property->title }}">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') ??  $property->city }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') ??  $property->address }}">
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="surface" class="form-label">Surface</label>
                <input type="text" class="form-control" id="surface" name="surface" value="{{ old('surface') ??  $property->surface }}">
            </div>

            <div class="col">
                <label for="price" class="form-label">Prix</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ??  $property->price }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $property->description }}</textarea>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="rooms" class="form-label">Pièces</label>
                <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms') ??  $property->rooms }}">
            </div>

            <div class="col">
                <label for="bedrooms" class="form-label">Chambres</label>
                <input type="text" class="form-control" id="bedrooms" name="bedrooms" value="{{ old('bedrooms') ?? $property->bedrooms }}">
            </div>

            <div class="col">
                <label for="floor" class="form-label">Etage</label>
                <input type="text" class="form-control" id="floor" name="floor" value="{{  old('floor') ?? $property->floor }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="postal_code" class="form-label">Code Postal</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{  old('postal_code') ?? $property->postal_code }}">
        </div>

        <div class="mb-3">
            <label for="sold" class="form-label">Vendu</label>
            <input type="checkbox" id="sold" value="1" name="sold">
        </div>

        <div class="form-group m-3">
            <button type="submit" class="btn btn-primary float-end">Créer</button>
        </div>
    </form>
@endsection
