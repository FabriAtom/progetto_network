<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

{{-- @extends('layouts.app')
@section('content')
@endsection --}}
<body>


    <div class="mynavbar">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="height: 70px;">
            <div class="container">
                <div class="logo">
                  <a class="navbar-brand" href="{{ url('/')}}">
                    <img src="{{asset('img/Logo.png')}}" alt="logo">
                  </a>
                </div>
                {{-- <a class="navbar-brand" href="{{ url('/')}}">
                   Homepage
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                   

                   
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('admin.home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-right menu-list" aria-labelledby="navbarDropdown">
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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
   

    <div id="app">
        
    </div>
    <script src="{{ asset('js/front.js') }}" defer></script>
</body>

</html>















































{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">slug</th>
                        <th scope="col">Creazione</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody> --}}
                    {{-- @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>



                        <td>{{ $post->category->name }}</td>

                        <td>{{ $post->content }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post) }}" type="button" class="btn btn-primary btn-sm">Vedi</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                
                                <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>    
                    @endforeach --}}
                {{-- </tbody>
            </table>
        </div>
    </div>
</div> --}}
       




