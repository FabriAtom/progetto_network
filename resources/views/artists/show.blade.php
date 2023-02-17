@extends('layouts.app')

@section('content')


<section>
    <div class="container">
        <h1>Artista: {{ $artist->name }} {{ $artist->surname }} </h1>
        <h3>Categoria: {{ $artist->category }}</h3>
    </div>
    
    <div>
        <ul>
            <li>
                <span>nickname:</span> {{$artist->nickname}}
            </li>
            <li>
                <span>Indirizzo:</span> {{$artist->address}}
            </li>
            <li>
                <span>Email:</span> {{$artist->email}}
            </li>
            <li>
                <span>Image:</span> {{$artist->image}}
            </li>
            <li>
                <span>Phone:</span> {{$artist->phone}}
            </li>
            <li>
                <span>Cv:</span> {{$artist->cv}}
            </li>
        </ul>
    </div>  
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">
          <h3 class="card-title">{{ $artist->name }}  {{ $artist->surname }}</h3>
          <p class="card-text"> 
            {{$artist->nickname}}
          </p>
          <p class="card-text">
            {{$artist->address}}
            {{$artist->email}}
            {{$artist->phone}}
          </p>
          <a href="#" class="btn btn-primary">Go</a>
        </div>
      </div>
</section>
    

<section>
        <div class="container">
            <h2>
            Elenco Opere
            </h2>
        </div>
</section>


@endsection