<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Artisti</title>
</head>



<body>
<section>
        <div class="mynavbar">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid"> --}}

                
                    <a class="navbar-brand" href="https://www.kgpartners.it/">KGPARTNERS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> --}}
                        <ul class="navbar-nav ml-auto list_links">

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.posts.index') }}">Opere</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>


                                    <div class="dropdown-menu dropdown-menu-right menu-list show" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.home') }}">
                                            Profilo
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest  
                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"  href="{{ route('homepage') }}">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.artists.index') }}">Artisti</a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item" href="#">Login Artista</a></li>

                                    <li><a class="dropdown-item" href="#">Login Struttura</a></li>
                                    
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Login Acquisto</a></li>
                                </ul>
                            </li> --}}
                            {{-- <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Cerca</button>
                            </form> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
</section>



    

    @include('partials.header')

    <main>
        @yield('content')
    </main>
    
</body>
</html>