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
                </div> 
            
       
            
            <div class="card mt-5 overflow-hidden ">
                <div class="card-header text-center"><h1> {{ $artist->name }} {{ $artist->surname }} </h1></div>
                
                <div class="d-flex flex-row">
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
                                {{-- <p> <strong> Categoria :</strong>
                                    
                                    @foreach ($artist->categories as $key => $spec)
                                    <span class="card-text">{{ $spec->category }}@if (!$loop->last)
                                        ,
                                        @endif </span>
                                        @endforeach
                                    </p> --}}
                                    
                                    @if ($artist->phone)
                                    <p class="card-text"> <strong> Numero di telefono: </strong>{{ $artist->phone }}</p>
                                    @endif
                                    {{--                          
                                        @if ($artist->cv)
                                <a class="btn btn-secondary" href="{{ asset('Storage/' . $doctor->cv) }}"
                                    role="button">&#129047; Scarica
                                    CV &#129047;</a>
                                    @endif --}}
                                    <div class="mt-3 text-center d-flex justify-content-between align-items-center flex-wrap ">
                                        @if (!$artist->cv || !$artist->image || !$artist->services || !$artist->phone)
                                        <a class="btn btn-primary " href="{{ route('admin.users.create', $artist) }}"
                                        role="button">Completa il tuo profilo da Artista</a>
                                        @endif
                                        <a class="btn btn-success" href="{{ route('admin.users.edit', $artist) }}"
                                        role="button">Modifica
                                    </a>
                                    <form action="{{ route('admin.users.destroy', $artist) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value=" CANCELLA " class="btn btn-danger mt-1">
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
                        {{-- </div>
                            @if (count($messages) > 0)
                            <h2 class="text-center mt-4">Messaggi Ricevuti:</h2>
                            <div style="height: 500px; overflow-y:scroll" class=" mt-5">
                                @foreach ($messages as $message)
                                <div class="card text-center mb-2 text-wrap">
                                    <div class="card-header">
                                        <h5>Da: {{ $message->name_sender }} {{ $message->surname_sender }}</h5>
                                    </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $message->message_sender }}
                                    </p>
                                    <blockquote class="blockquote mb-0">
                                        <a href="#"><footer class="blockquote-footer">{{ $message->mail_sender }}</footer></a>
                                    </blockquote>
                                </div>
                                <div class="card-footer text-white bg-secondary">
                                    Inviato il: {{ $message->created_at->format('d-m-Y H:m') }}
                                    
                                </div>
                            </div>
                            @endforeach
                            
                            
                            
                        </div> --}}
                        {{-- @endif
                            @if (count($reviews) > 0)
                            <h2 class="text-center mt-5">Recensioni Ricevute:</h2>
                            <div style="height: 500px; overflow-y:scroll" class=" mt-5">
                                @foreach ($reviews as $review)
                                <div class="card text-center mb-2 text-wrap">
                                    <div class="card-header">
                                        <h5>Da: {{ $review->name_reviewer }} {{ $review->surname_reviewer }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{ $review->review }}
                                        </p>
                                    </div>
                                    <div class="card-footer text-white bg-secondary">
                                        il: {{ $review->created_at->format('d-m-Y H:m') }}
                                        
                                    </div>
                            </div>
                        @endforeach



                    </div>
                @endif

                @if (count($stars) > 0 || count($messages) > 0 || count($reviews) > 0 )
                    <h2 class="text-center mt-5 mb-5">Statistiche :</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mese</th>
                                <th scope="col">Numero di Voti</th>
                                <th scope="col">Media voti</th>
                                <th scope="col">Numero messaggi</th>
                                <th scope="col">Numero recensioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stats as $month)
                                <tr>
                                    <td>{{ $month['Mese'] }}</td>
                                    <td>{{ array_key_exists('Numero di voti',$month) ? $month['Numero di voti'] : '0' }}</td> 
                                    <td>{{array_key_exists('Numero di voti',$month) ? round($month['Media voti'] / $month['Numero di voti'], 1) : '0' }}</td>
                                    <td>{{ array_key_exists('Numero di messaggi',$month) ? $month['Numero di messaggi'] : '0' }} </td>  
                                    <td>{{ array_key_exists('Numero di recensioni',$month) ? $month['Numero di recensioni'] : '0' }} </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif --}}
            </div>
        </div>
    </div>
@endsection







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


