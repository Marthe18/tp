@extends('base')

@section('content')
    
 <div class="bg-light p-5 text-center">
    <div class="container">
        <h1>Lorem ipsum dolor sit amet consecte</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eius quas eos ipsam at, sunt perspiciatis recusandae aliquam voluptas eaque explicabo distinctio architecto reprehenderit soluta nobis libero, sequi mollitia error!</p>
    </div>
 </div>
 <div class="container">
    <h2>Nos derniers biens</h2>
    <div class="row">
        @foreach ($properties as $property )
        <div class="col">
            @include('property.card')
        </div>
            
        @endforeach
    </div>

 </div>
 @endsection
