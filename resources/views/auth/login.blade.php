@extends('base')

@section('title', 'se connecter')
@section('content')

<div class="mt-4 container">
    <h1>@yield('title')</h1>


    <form  method='post' action="{{ route('login')}}" class="vstack gap-3">
        @csrf
        @include('shared.input',[ 'type' => 'email', 'class' =>'col',  'label' => 'Email', 'name' => 'email'])
        @include('shared.input',[ 'type' => 'password', 'class' =>'col',  'label' => 'Mot de passe', 'name' => 'password'])
<button type="submit" class="btn btn-primary"> Se connecter</button>
    </form>
</div>

@endsection
