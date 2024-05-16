@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="text-warning">Nuovo fumetto</h2>
        <form action="{{ route('comics.store') }}" method="POST"> @csrf

            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input name="titolo" type="text" class="form-control" id="titolo">
            </div>
            <div class="mb-3">
                <label for="src" class="form-label">Immagine(src)</label>
                <input name="src" type="text" class="form-control" id="src" aria-describedby="emailHelp">
            </div>

        </form>
    </div>
@endsection
