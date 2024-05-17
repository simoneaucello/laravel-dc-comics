<header>
    <nav class="navbar navbar-expand-lg bg-dark  ">
        <div class="container-fluid ">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link text-white" href="{{ route('comics.index') }}">DC Comics</a>
                    <a class="nav-link text-white" href="{{ route('contacts') }}">Contatti</a>
                </div>
                <div>
                    <a class="btn bg-danger text-white border fw-bold" href="{{ route('comics.create') }}">Crea
                        un
                        nuovo
                        fumetto</a>
                </div>
            </div>
        </div>
    </nav>


</header>
