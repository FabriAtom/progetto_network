@extends('layouts.app')

@section('content')

{{-- CREATE --}}
<section>
    <div class="container" style="display:flex; justify-content:flex-end;" >
        <a style="text-decoration: none;" href=" {{ route('artists.create') }}">Aggiungi Artista</a>
    </div>
</section>


{{-- <ul>
    @forelse($artists as $artist)
        <li>
            <h4>
                <a href="{{ route('artists.show', $artist) }}">
                    {{ $artist->name }} {{ $artist->surname }}
                </a>
            </h4>
        </li>
    @empty
        <li>nessun artista trovato</li>
    @endforelse
</ul> --}}


<section>
    <div class="Info text-center">
        <p><Strong>KGPARTNERS</Strong>, Siamo la tua piattaforma numero 1 di ricerca Artisti in tutta Italia.
          Qui trovi tutto ciò di cui hai bisogno, ti basta cercare!</p>
        <hr class="my-4">
      </div>
      
      <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <h1 class="py-5">Consulta gli Artisti!</h1>
            </div>
          </div>
        </div>
        
        <div class="container-fluid">
          @if (session('message-success'))
         <div class="alert alert-success">
            <h3>Messaggio inviato con successo!</h3>
         </div>
          @endif 
          <div class="row">
            @foreach ($artists as $artist)
             <div class="col">
              <a href="{{ route('artists.show', $artist) }}" style="text-decoration: none;">
      
                  <div class="card mb-5 text-center border-dark" style="height: 550px; background:rgba(10, 100, 110, 0.4)"> 
                    @if ($artist->image)
                    <div class="card-img-top justify-content-center">
                      <img class="card-img-top " style="width: 16rem; height: 170px; margin-top: 14px" src="{{ asset('Storage/' . $artist->image) }}" alt="immagine {{ $artist->name }}">                               
                    </div>
                    @endif
                    @if (!$artist->image)
                        <div class="card-img-top">
                            <img src="../img/omino.png" style="width: 16rem; height: 170px; margin-top: 14px" alt="default-avatar">
                        </div>
                    @else
                        
                    @endif
                    
                    <div class="card-body text-dark">
                      <h2 class="card-title text-dark">{{ $artist->name }} {{ $artist->surname }}</h2>
                      <hr> 
                      <p><strong> Nome d'Arte: </strong>  {{ $artist->nickname }} </p>
                      <p><strong>Categoria Artistica: </strong> {{ $artist->category }}</p>
                      <p><strong>Indirizzo: </strong> {{ $artist->address }}</p>
                      <p><strong>Cell: </strong> {{ $artist->phone }}</p>
                      <p><strong><a style="text-decoration: none" href="{{ route('artists.edit', $artist) }}">Modifica</a></strong></p>
                      <p><strong>
                        <form action="{{ route('artists.destroy',$artist) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina">
                        </form>
                      </strong></p>
                    </div>
                  </div>
                </a> 
             </div>
            @endforeach
          </div>
        </div>
</section>

@endsection