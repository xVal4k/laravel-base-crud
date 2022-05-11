@extends('templates.base')

@section('pageTitle', 'comics')

@section('pageMain')
    <div class="container text-center">
        <div class="row row-cols-4 g-4 py-5">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h2 class="card-title">
                                <a class="text-decoration-none" href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links() }}
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('comics.create') }}">Add new comic</a></h3>
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></h3>
    </div>
@endsection
