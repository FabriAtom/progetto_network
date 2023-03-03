{{-- possibilità di editare/aggiungere ulteriori dettagli
    possibilità di acquistare sponsor 
    tasto che da' possibilità di visualizzare il profilo da guest
--}}

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
    <h1 class="text-center  mb-3"> Modifica il tuo profilo</h1>
    <form action="{{ route('admin.users.update',$artist) }}" method="POST" enctype="multipart/form-data">
        
        @csrf

        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Modifica il tuo nome') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ $artist->name }}" required autocomplete="name" autofocus>

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
            <label for="address"
                class="col-md-4 col-form-label text-md-right">{{ __('Modifica il tuo indirizzo') }}</label>

            <div class="col-md-6">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ $artist->address }}" required autocomplete="address" autofocus>

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        @if($artist->phone)
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">Modifica il tuo numero di telefono</label>
            <div class="col-md-6">

                <input type="text" class="form-control  @error('phone') is-invalid @enderror" required id="phone" name="phone"
                    value="{{ $artist->phone }}">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        @endif

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

        <div class="text-center mt-5">
            <input type="submit" class="btn btn-success" role="button" value="Salva Modifiche">

        </div>
    </form>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}


@endsection
