@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="container py-5 text-center">
        <div class="row g-4">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h2 class="card-title">{{ $comic->title }}</h2>
                    <p class="card-text">{{ $comic->description }}</p>
                    <div class="row row-cols-4">
                        <div class="col"><strong>Price:</strong> {{ $comic->price }} €</div>
                        <div class="col"><strong>Series:</strong> {{ $comic->series }}</div>
                        <div class="col"><strong>Sale dae:</strong> {{ $comic->sale_date }}</div>
                        <div class="col"><strong>Type:</strong> {{ $comic->type }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 text-center">
            <h3><a class="nav-link" href="{{ route('comics.index') }}">Comics List</a></h3>
        </div>
    </div>
@endsection
