@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>  


            <div class="card mt-5 overflow-hidden ">
                <div class="card-header text-center"><h1> Profilo Artista appena creato
                    {{-- {{ $->name }} {{ $user->surname }} </h1> --}}
                </div> 
            
               {{-- <div class="d-flex flex-row">
                    @if ($artist->image)
                        <div class="card " style="width: 50%">
                            <img class="card-img-top" src="{{ asset('Storage/' . $artist->image) }}"
                                alt="immagine {{ $artist->name }}">
                        </div>
                    @endif
                    <div class="card-body" @if (!$artist->image) style="width: 100%" @endif
                        @if ($artist->image) style="width: 50%" @endif>
                        <p class="card-text"><strong> Email: </strong>{{ $artist->email }}</p>
                        <p class="card-text"> <strong> Indirizzo: </strong>{{ $artist->address }}</p>

                        @if ($artist->phone)
                            <p class="card-text"> <strong> Numero di telefono: </strong>{{ $artist->phone }}</p>
                        @endif

                        @if ($artist->services)
                            <p class="card-text"> <strong> Prestazioni: </strong>{{ $artist->services }}</p>
                        @endif

                        @if ($artist->cv)
                            <a class="btn btn-secondary" href="{{ asset('Storage/' . $artist->cv) }}"
                                role="button">&#129047; Scarica
                                CV &#129047;</a>
                        @endif
                        <div class="mt-3 text-center d-flex justify-content-between align-items-center flex-wrap ">
                            @if (!$artist->cv || !$artist->image || !$artist->services || !$artist->phone)
                                <a class="btn btn-primary " href="{{ route('admin.artists.create', $artist) }}"
                                    role="button">Completa il tuo profilo da Medico</a>
                            @endif
                            {{-- @if (count($doctor->sponsorships) == 0 || $lastSponsorship < Carbon::now())
                            <a class="btn btn-warning" href="{{ route('admin.sponsorships.create', $doctor) }}"
                                role="button">Boost 
                            </a> --}}
                           
                            {{-- <a class="btn btn-success" href="{{ route('admin.artists.edit', $artist) }}"
                                role="button">Modifica
                            </a>
                            <form action="{{ route('admin.artists.destroy', $artist) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value=" CANCELLA " class="btn btn-danger mt-1">
                            </form>
                        </div>
                    </div>

                </div>

            </div>  --}}
        </div>
    </div>
</div>








{{-- 
<section>
    <div class="container">
        <h1>Profilo Artista</h1>
    </div>
    
    <div class="card" style="width: 18rem; margin-left:7em;">
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">

          <h2 class="card-title">{{ $artist->name }}  {{ $artist->surname }}</h2>
          <h3 class="pb-2">{{ $artist->category }}</h3>

          <p class="card-text"> 
            <strong>Nickname:</strong>
            {{$artist->nickname}}
          </p>
          <p class="card-text">
            <strong>Indirizzo:</strong>
            Indirizzo:
            {{$artist->address}}
          </p>
          <p class="card-text"> 
            <strong>Email:</strong>
            {{$artist->email}}
          </p>
          <p class="card-text"> 
            <strong>Telefono:</strong>
            {{$artist->phone}}
          </p>
          <div>
            <div class="container">
                <a href="{{ route('admin.artists.edit',$artist) }}">Modifica Profilo</a>
                {{-- form elimina --}}
                {{--<form action="{{ route('admin.artists.destroy',$artist) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Elimina">
                </form>
              </div> 
          </div>
        </div>
      </div>
</section>
    

<section>
        <div class="container">
            <h3>
            Elenco Opere
            </h3>
        </div>
</section> --}}


@endsection