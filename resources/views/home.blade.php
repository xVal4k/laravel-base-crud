@extends('templates/base')

@section('pageTitle', 'Home Comics')

@section('pageMain')
    <div class="container text-center py-5">
        <h1>THIS IS THE EMPTY HOME PAGE</h1>
        <h3><a class="nav-link my-4" href="{{ route('comics.index') }}">Comics List</a></h3>
    </div>
@endsection
