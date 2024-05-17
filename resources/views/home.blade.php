@extends('layout.main')

@section('title')
    DC Comics
@endsection

@section('content')
    <div class="container my-5 ">
        <h1 class="text-center fw-bold text-white title "> DC <br> COMICS <br> <i class="fa-solid fa-angles-down"></i></h1>

        <h4 class="text-center mt-5 text-white">Questo database contiene <span class="text-warning">{{ $num_comics }}
            </span> fumetti </h4>

        <div class="d-flex justify-content-center mt-5">
            <a class="btn bg-danger text-white border fw-bold p-3" href="{{ route('comics.index') }}">SFOGLIA</a>
        </div>
    </div>
@endsection
