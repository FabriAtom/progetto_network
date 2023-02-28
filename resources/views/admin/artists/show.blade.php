{{-- @extends('layouts.app')

@section('content')


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
               {{-- <form action="{{ route('admin.artists.destroy',$artist) }}" method="POST">
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


{{-- @endsection  --}}