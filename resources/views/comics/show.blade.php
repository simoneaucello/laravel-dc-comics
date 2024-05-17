@extends('layout.main')

@section('title')
    Dettagli Fumetto
@endsection

@section('content')
    <div class="container d-flex my-5 ">
        <img class="img-show me-5" src="{{ $comic->thumb }}" alt=" {{ $comic->title }} ">
        <div>
            <h2 class="text-warning">{{ $comic->title }}</h2>
            <p class="mt-5 text-white"> {{ $comic->description }} </p>
            <p class="mt-3 fw-bold text-warning"> {{ $comic->sale_date }} </p>
            <h5 class="mt-3 fw-bold text-white"> {{ $comic->series }} </h5>
            <p class="mt-3 fw-bold text-warning"> {{ $comic->type }} </p>
            <p class="mt-3 fw-bold text-warning"> Artisti: <br> <span class="text-white"> {{ $comic->artists }} </span></p>
            <p class="mt-3 fw-bold text-warning"> Scrittori: <br> <span class="text-white"> {{ $comic->writers }} </span>
            </p>
            <p class="mt-3 fw-bold text-danger"> PREZZO: {{ $comic->price }} </p>

        </div>

    </div>
@endsection
