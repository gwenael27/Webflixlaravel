@extends('layouts.base')
@section('title')
    Accueil - @parent
@endsection
@section('content')
    

    <h1 class="text-5xl ">coucou {{$name}}</h1> 
    {!! $html !!}
    <a href="/a-propos">A-Propos</a>
    <ul>
        @foreach($cars as $car)
            <li>{{$car}}</li>
        @endforeach
    </ul>
@endsection