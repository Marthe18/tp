@extends('admin.admin')
@section('title', 'Toutes les options')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h1> @yield('title')</h1> </div>

<div class="form-group mt-3">

<a  class="btn btn-primary float-end" href="{{ route('admin.option.create') }}" class="btn btn-primary">Ajouter une option</a>
</div>

</div>
</div>
@if(count($options) > 0)

<table class="table table-striped m-3">
    <thead>
        <tr>
            <th>Nom</th>
        <th class="text-end">Actions</th
        </tr>
    </thead>
    <tbody>
        @foreach ($options as $i =>  $option)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $option->name}}</td>
<td>
    <div class="d-flex gap-2 w-100 justify-content-end">
        <a href="{{ route('admin.option.edit',$option) }}" class="btn btn-primary">Editer </a>
<form action="{{ route('admin.option.destroy',$option->id) }}" method="post">
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
{{ $options->links() }}
@endsection