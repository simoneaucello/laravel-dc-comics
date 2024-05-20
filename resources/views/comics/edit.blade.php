@extends('layout.main')

@section('title')
    Modifica fumetto
@endsection

@section('content')
    <div class="container my-5">
        <h1 class="text-white">Modifica Fumetto:</h1>
        <h1 class="text-warning mb-5">{{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="title" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control" id="title" value=" {{ $comic->title }} ">
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="description" class="form-label">Descrizione</label>
                <input name="description" type="text" class="form-control" id="description"
                    value=" {{ $comic->description }} " aria-describedby="emailHelp">
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="thumb" class="form-label">Immagine(url)</label>
                <input name="thumb" type="text" class="form-control" id="thumb"
                    value=" {{ $comic->thumb }} "aria-describedby="emailHelp">
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="price" class="form-label">Prezzo</label>
                <input name="price" type="text" class="form-control" id="price"
                    value=" {{ $comic->price }} "aria-describedby="emailHelp">
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="series" class="form-label">Serie</label>
                <input name="series" type="text" class="form-control" id="series"
                    value=" {{ $comic->series }} "aria-describedby="emailHelp">
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input name="sale_date" type="text" class="form-control" id="sale_date"
                    value=" {{ $comic->sale_date }} "aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn bg-dark text-white">INSERISCI</button>

        </form>
    </div>
@endsection
