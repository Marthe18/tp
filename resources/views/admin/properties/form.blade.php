@extends('admin.admin')
@section('title', $property->exists ? "Editer un bien" : "Créer un bien")

@section('content')
    <h1>@yield('title')</h1>




    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}">
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="surface" class="form-label">Surface</label>
                <input type="text" class="form-control" id="surface" name="surface" value="{{ $property->surface }}">
            </div>

            <div class="col">
                <label for="price" class="form-label">Prix</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $property->price }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $property->description }}</textarea>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="rooms" class="form-label">Pièces</label>
                <input type="text" class="form-control" id="rooms" name="rooms" value="{{ $property->rooms }}">
            </div>

            <div class="col">
                <label for="bedrooms" class="form-label">Chambres</label>
                <input type="text" class="form-control" id="bedrooms" name="bedrooms" value="{{ $property->bedrooms }}">
            </div>

            <div class="col">
                <label for="floor" class="form-label">Etage</label>
                <input type="text" class="form-control" id="floor" name="floor" value="{{ $property->floor }}">
            </div>
        </div>

        <div class="form-group m-3">
        <button type="submit" class="btn btn-primary float-end">Créer</button>
        </div>
    </form>
@endsection
