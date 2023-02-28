{{-- @extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2 class="mt-3 mb-4">
            Crea un nuovo Artista
        </h2>
    </div>

    <div class="container">
        <form action="{{ route('admin.artists.store') }}" method="POST">
            @csrf
            <p>
                <label for="name">Nome</label>
                <input type="text" style=" @error('name') border-color: red @enderror" name="name" id="name" placeholder="Nome Artista" value="{{ old('name') }}">
                @error('name')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="surname">Cognome</label>
                <input type="text" style=" @error('surname') border-color: red @enderror" name="surname" id="surname" placeholder="Cognome Artista" value="{{ old('surname') }}">
                @error('surname')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" style=" @error('email') border-color: red @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="address">Indirizzo</label>
                <input type="text" style=" @error('address') border-color: red @enderror" name="address" id="address" placeholder="Indirizzo"  value="{{ old('address') }}">
                @error('address')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="category">Categoria</label>
                <input type="text" style=" @error('category') border-color: red @enderror" name="category" id="category" placeholder="Categoria Artistica" value="{{ old('category') }}">
                @error('category')
                    <div style="color:red; font-size:12px; background:white; border:0; padding:0;" class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </p>
            <p>
                <label for="phone">Telefono</label>
                <input type="number" style=" @error('phone') border-color: red @enderror" name="phone" id="phone" placeholder="Numero di Telefono" value="{{ old('phone') }}">
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


@endsection --}}