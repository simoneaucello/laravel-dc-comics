@extends('layout.main')

@section('title')
    Modifica fumetto
@endsection

@section('content')
    <div class="container my-5">
        <h1 class="text-white">Modifica Fumetto:</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="text-warning mb-5">{{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="title" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    value=" {{ old('title', $comic->title) }} ">

                @error('title')
                    <small class="text-danger fw-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="description" class="form-label">Descrizione</label>
                <input name="description" type="text" class="form-control @error('description') is-invalid @enderror"
                    id="description" aria-describedby="emailHelp" value=" {{ old('description', $comic->description) }} ">

                @error('description')
                    <small class="text-danger fw-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="thumb" class="form-label">Immagine(url)</label>
                <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror"
                    id="thumb" aria-describedby="emailHelp" value=" {{ old('thumb', $comic->thumb) }} ">

                @error('thumb')
                    <small class="text-danger fw-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="price" class="form-label">Prezzo</label>
                <input name="price" type="text" class="form-control @error('price') is-invalid @enderror"
                    id="price" aria-describedby="emailHelp" value=" {{ old('price', $comic->price) }} ">

                @error('price')
                    <small class="text-danger fw-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="series" class="form-label">Serie</label>
                <input name="series" type="text" class="form-control @error('series') is-invalid @enderror"
                    id="series" aria-describedby="emailHelp" value=" {{ old('series', $comic->series) }} ">

                @error('series')
                    <small class="text-danger fw-bold">
                        {{ $message }}
                    </small>
                @enderror


            </div>
            <div class="mb-3 bg-body-tertiary rounded p-2">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input name="sale_date" type="text" class="form-control @error('sale_date') is-invalid @enderror"
                    id="sale_date" aria-describedby="emailHelp" value=" {{ old('sale_date', $comic->sale_date) }} ">

                @error('sale_date')
                    <small class="text-danger fw-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <button type="submit" class="btn bg-dark text-white">INSERISCI</button>


        </form>
    </div>
@endsection
