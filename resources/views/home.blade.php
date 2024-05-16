@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="text-center fw-bold"> DC COMICS</h1>

        <h3 class="text-center mt-5">Questo database contiene {{ $num_comics }} fumetti </h3>
    </div>
@endsection
