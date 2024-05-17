@extends('layout.main')


@section('content')
    <div class="container">
        <h1 class="my-5 text-center text-bg-dark title-index ">FUMETTI</h1>
        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                Il fumetto è stato eliminato correttamente.
            </div>
        @endif
        <div class="d-flex flex-wrap justify-content-around  ">

            @foreach ($comics as $comic)
                <div class="card my-3" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">{{ $comic->title }}</h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-danger fw-bold">{{ $comic->price }}</li>
                        <li class="list-group-item">{{ $comic->series }}</li>
                        <li class="list-group-item">{{ $comic->sale_date }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('comics.show', $comic) }}" class="card-link btn bg-dark text-white">DETTAGLI</a>
                        <a href="{{ route('comics.edit', $comic) }}" class="card-link btn bg-warning text-dark me-3"><i
                                class="fa-solid fa-pen"></i></a>


                        <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline-block"
                            onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="card-link btn bg-danger text-white"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>



                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
