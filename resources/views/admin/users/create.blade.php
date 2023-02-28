@extends('layouts.app')

@section('content')
    <h1 class="text-center"> Completa il tuo profilo da artista</h1>
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(!$artist->image)
        <div class="form-group">
            <label for="image">Carica una foto di te</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>

        @endif
        @if(!$artist->cv)
        <div class="form-group">
            <label for="cv">Carica una foto del tuo CV come PDF</label>
            <input type="file" name="cv" class="form-control-file" id="cv">
        </div>
        @endif

        @if(!$artist->phone)
        <div class="mb-3">
            <label for="phone" class="form-label">Inserisci il tuo numero di telefono</label>
            <input type="text" class="form-control" id="phone" name="phone"
                value="{{ old('phone') }}">
        </div>
        @endif
        <input type="submit" class="btn btn-success" role="button" value="Salva Modifiche">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
