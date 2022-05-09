@extends('templates.base')

@section('pageTitle', 'Blank Page')

@section('pageMain')
    <div class="container text-center py-5">
        <h1>THIS IS A BLANK PAGE</h1>
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></h3>
    </div>
@endsection
