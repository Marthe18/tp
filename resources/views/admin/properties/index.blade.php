@extends('admin.admin')
@section('title', 'Tout les biens')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h1> @yield('title')</h1> </div>

<div class="form-group mt-3">

<a  class="btn btn-primary float-end" href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter un bien</a>
</div>

</div>
</div>
@if(count($properties) > 0)

<table class="table table-striped m-3">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th>City</th>

            <th class="text-end">Actions</th

        </tr>
    </thead>
    <tbody>
        @foreach ($properties as $i =>  $property)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $property->title}}</td>
            <td>{{ $property->surface}}m²</td>
            <td>{{ number_format($property->price, thousands_separator: '')}}</td>
            <td>{{ $property->city}}</td>
<td>
    <div class="d-flex gap-2 w-100 justify-content-end">
        <a href="{{ route('admin.property.edit',$property) }}" class="btn btn-primary">Editer </a>
<form action="{{ route('admin.property.destroy',$property->id) }}" method="post">
   @csrf
   @method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>

</td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@else
Aucun Bien
            @endif
{{ $properties->links() }}
@endsection