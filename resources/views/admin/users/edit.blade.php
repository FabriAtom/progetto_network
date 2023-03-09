 {{-- possibilità di editare/aggiungere ulteriori dettagli
    possibilità di acquistare sponsor 
    tasto che da' possibilità di visualizzare il profilo da guest --}}

@extends('layouts.app')
<?php

$categories = [
    'Pittore',
    'Scultore',
    'Fotografo',
];


sort($categories);
?>


@section('content')

<section>
    <div class="container">
        <h2 class="mt-3 mb-4">
            Crea un nuovo Artista
        </h2>
    </div>

    <div class="container">
        <form action="{{ route('admin.users.update', $artist) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Modifica il tuo nome') }}</label>
    
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ $artist->name }}" required autocomplete="name" autofocus>
    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __(' Modifica il tuo cognome') }}</label>
    
                <div class="col-md-6">
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                        name="surname" value="{{ $artist->surname }}" required autocomplete="surname" autofocus>
    
                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Modifica la tua email') }}</label>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" 
                    name="email" id="email" placeholder="Email" value="{{ old('email',$artist->email) }}" required autocomplete="address" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Modifica il tuo indirizzo') }}</label>
    
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ $artist->address }}" required autocomplete="address" autofocus>
    
                    @error('address')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Modifica il tuo numero') }}</label>
    
                <div class="col-md-6">
                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone', $artist->phone) }}" required autocomplete="phone" autofocus>
    
                    @error('phone')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            @if($artist->image)
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="image">Cambia la tua foto profilo</label>
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                </div>
            @endif
            @if($artist->cv)
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="cv">Cambia il tuo CV</label>
                    <div class="col-md-6">
                        <input type="file" name="cv" class="form-control-file" id="cv">
                    </div>
                </div>
            @endif
            <p style="text-align:center;">
               <input type="submit" value="salva">
            </p>
        </form>
    </div>
</section>


@endsection 
















