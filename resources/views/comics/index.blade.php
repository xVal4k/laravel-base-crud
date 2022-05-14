@extends('templates.base')

@section('pageTitle', 'comics')

@section('pageMain')
    <div class="container text-center">
        <div class="row row-cols-4 g-4 py-5">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h2 class="card-title">
                                <a class="text-decoration-none"
                                    href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                            </h2>
                            <div class="row row-cols-3 justify-content-center">
                                <div class="col">
                                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                                </div>
                                <div class="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-dark">
                                                    Please confirm your choice
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('comics.destroy', $comic->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links() }}
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('comics.create') }}">Add new comic</a>
        </h3>
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></h3>
    </div>
@endsection
