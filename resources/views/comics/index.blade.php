@extends('layout.main')


@section('content')
    <h1 class="my-5 text-center text-bg-dark">Tutti i Fumetti</h1>
    <div class="d-flex flex-wrap justify-content-around  ">

        @foreach ($comics as $comic)
            <div class="card my-3" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder">{{ $comic->title }}</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->price }}</li>
                    <li class="list-group-item">{{ $comic->series }}</li>
                    <li class="list-group-item">{{ $comic->sale_date }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('comics.show', $comic) }}" class="card-link btn bg-dark text-white">DETTAGLI</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
