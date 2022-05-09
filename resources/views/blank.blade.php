@extends('templates.base')

@section('pageTitle', 'Blank Page')

@section('pageMain')
    <div class="container text-center py-5">
        <h1>THIS IS A BLANK PAGE</h1>
        <h3><a class="nav-link my-4" href="{{ route('home') }}">Home</a></h3>
    </div>
@endsection
