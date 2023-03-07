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
                <div class="card-header text-center"><h1>Benvenuto!
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
                                    
                                @if ($artist->phone)
                                 <p class="card-text"> <strong>Numero di telefono:</strong>{{ $artist->phone }}</p>
                                @endif
                           
                                @if ($artist->cv)
                                    <a class="btn btn-secondary" href="{{ asset('Storage/' . $artist->cv) }}"
                                        role="button"> Scarica
                                        CV
                                    </a>
                                @endif 

                                <div class="mt-3 text-center d-flex justify-content-between align-items-center flex-wrap ">
                                    @if (!$artist->cv || !$artist->image || !$artist->phone)
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
        </div>
    </div>
@endsection





