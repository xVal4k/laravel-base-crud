@extends('templates/base')

@section('pageTitle', 'Home Comics')

@section('pageMain')
    <div class="container text-center py-5">
        <h1>THIS IS THE EMPTY HOME PAGE</h1>
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('comics.index') }}">Comics List</a></h3>
    </div>
@endsection
