@extends('layouts.base')
@section('title')
    A-Propos - @parent
@endsection
@section('content')
<h1>A-propos</h1>

<ul>
    @foreach($devs as $dev)
        <li>{{$dev}}</li>
    @endforeach
</ul>
@endsection