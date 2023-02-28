@extends('layouts.app')

@section('content')

  <div class="jumbotron bg-info">
      <h1 class="display-4 text-center">KGPARTNERS</h1>
      <h2>Come possiamo aiutarti?</h2>
      <hr class="my-4">
  </div>


  <div class="Info text-center">
    <p><Strong>KGPARTNERS</Strong>, Siamo la tua piattaforma numero 1 di ricerca Artisti in tutta Italia.
      Qui trovi tutte le Opere artistiche di vari generi, ti basta cercare!</p>
    <hr class="my-4">
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-8">
              <h1 class="py-5">Visita i nostri Artisti!</h1>
          </div>
      </div>

      <div class="container-fluid">
        @if (session('message-success'))
      <div class="alert alert-success">
          <h3>Messaggio inviato con successo!</h3>
      </div>
        @endif 
        <div class="row">
          {{-- @foreach ($users as $user)
             <div class="col">
              <a href="{{ route('admin.artists.show', $artist) }}" style="text-decoration: none;">
      
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
                      {{-- <p><strong><a style="text-decoration: none" href="{{ route('artists.edit', $artist) }}">Modifica</a></strong></p> --}}
                      {{-- <p><strong>
                        <form action="{{ route('artists.destroy',$artist) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina">
                        </form>
                      </strong></p> --}}
                    </div>
                  </div>
                </a> 
             </div>
            {{-- @endforeach --}}
          {{-- @foreach ($artists as $artist)
          <div class="col">
              <a href="{{ route('admin.artists.show', $artist) }}" style="text-decoration: none;">
                <div class="card mb-5 text-center bg-info border-dark" style="height: 450px;"> 
                  @if ($artist->image)
                  <div class="card-img-top justify-content-center">
                    <img class="card-img-top " style="width: 16rem; height: 170px; margin-top: 14px" src="{{ asset('Storage/' . $artist->image) }}" alt="immagine {{ $artist->name }}">                               
                  </div>
                  @endif
                  @if (!$artist->image)
                      <div class="card-img-top">
                          <img src="https://www.sketchappsources.com/resources/source-image/doctor-illustration-hamamzai.png" style="width: 16rem; height: 170px; margin-top: 14px" alt="default-avatar">
                      </div>
                  @else
                      
                  @endif
                  
                  <div class="card-body">
                    <h2 class="card-title text-dark">{{ $artist->name }} {{ $artist->surname }}</h2>
                    <hr>           
                  </div>              
                </div>
              </a> 
          </div>
          @endforeach --}}
        </div>
      </div>
   </div>
  @endsection