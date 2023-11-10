@extends('admin.admin')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h1 class="text-center"> Les biens</h1> </div>

<div class="form-group mt-3">

<a  class="btn btn-primary float-end" href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter un bien</a>
</div>

</div>
</div>
@if(count($properties) > 0)

<table class="table table-bordered m-3">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th>City</th>

            <th   width="280px" class="text-center">Actions</th

        </tr>
    </thead>
    <tbody>
        @foreach ($properties as $i =>  $property)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $property->title}}</td>
            <td>{{ $property->surface}}m</td>
            <td>{{ number_format($property->price, thousands_separator: '')}}</td>
            <td>{{ $property->city}}</td>
<td>
<form action="{{ route('admin.property.destroy',$property->id) }}" method="post">
   @csrf
   @method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
</form>
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