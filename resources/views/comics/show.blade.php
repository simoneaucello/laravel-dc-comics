@extends('layout.main')

@section('content')
    <div class="container d-flex my-5">
        <img class="img-show me-5" src="{{ $comic->thumb }}" alt=" {{ $comic->title }} ">
        <div>
            <h2 class="text-warning">{{ $comic->title }}</h2>
            <p class="mt-5"> {{ $comic->description }} </p>
            <p class="mt-3 fw-bold"> {{ $comic->sale_date }} </p>
            <h5 class="mt-3 fw-bold text-white"> {{ $comic->series }} </h5>
            <p class="mt-3 fw-bold"> {{ $comic->type }} </p>
            <p class="mt-3 fw-bold text-white"> Artisti: <br> <span class="text-dark"> {{ $comic->artists }} </span></p>
            <p class="mt-3 fw-bold text-white"> Scrittori: <br> <span class="text-dark"> {{ $comic->writers }} </span></p>
            <p class="mt-3 fw-bold text-warning"> {{ $comic->price }} </p>

        </div>

    </div>
@endsection
