@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2 class="mt-3 mb-4">
            Crea un nuovo Artista
        </h2>
    </div>

    <div class="container">
        <form action="{{ route('artists.update', $artist) }}" method="POST">
            @csrf
            @method('PUT')

            <p>
                <label for="name">Nome</label>
                <input type="text" style=" @error('name') border-color: red @enderror" name="name" id="name" placeholder="Nome Artista" value="{{ old('name', $artist->name ) }}">
                @error('name')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="surname">Cognome</label>
                <input type="text" style=" @error('surname') border-color: red @enderror" name="surname" id="surname" placeholder="Cognome Artista" value="{{ old('surname', $artist->surname) }}">
                @error('surname')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" style=" @error('email') border-color: red @enderror" name="email" id="email" placeholder="Email" value="{{ old('email',$artist->email) }}">
                @error('email')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="address">Indirizzo</label>
                <input type="text" style=" @error('address') border-color: red @enderror" name="address" id="address" placeholder="Indirizzo"  value="{{ old('address',$artist->address) }}">
                @error('address')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="category">Categoria</label>
                <input type="text" style=" @error('category') border-color: red @enderror" name="category" id="category" placeholder="Categoria Artistica" value="{{ old('category',$artist->category) }}">
                @error('category')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="phone">Telefono</label>
                <input type="tel" style=" @error('phone') border-color: red @enderror" name="phone" id="phone" placeholder="Numero di Telefono" value="{{ old('phone',$artist->phone) }}">
                @error('phone')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
               <input type="submit" value="salva">
            </p>
        </form>
    </div>
</section>


@endsection