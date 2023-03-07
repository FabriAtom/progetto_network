@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
             <h1> crea nuovo post</h1>   
        </div>
        <div class="col-4 text-left d-flex justify-content-end align-items-center">
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
       <div class="col-12">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('POST')

                <div class="form-group">
                  <label for="title">Titolo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" name="title" aria-describedby="helpTitle">
                  <small id="helpTitle" class="form-text text-muted">Inserisci il titolo del Post.</small>
                  @error('title')
                    <div id="title" class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="category">Categoria</label>
                  <select name="category_id" class="custom-select @error('category_id') is-invalid @enderror">
                    <option value=""></option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if(old('category_id') === $category->id) selected @endif> {{ $category->name }} </option>
                    @endforeach
                  </select>
                  <small id="helpCategory" class="form-text text-muted" >Seleziona la Categoria</small>
                  @error('category_id')
                    <div id="category" class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>


                {{-- <div class="form-group">
                  <label for="image">Immagine copertina opera</label>

                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input @error('image') is-invalid @endif" id="image">
                    <label for="custom-file-label" for="image">scegli immagine...</label>
                    @error('image')
                      <div id="image" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>  --}}


                <div class="form-group">
                  <label for="image">Immagine copertina opera</label>
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input @error('image') is-invalid @endif" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                    @error('image')
                    <div id="image" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                 </div>
                </div>


                <div class="form-group">
                  <label for="content">Contenuto</label>
                  <textarea class="form-control" id="content" name="content" rows="20" placeholder="Contenuto del Post">{{ old('content') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
</div>



@endsection


{{-- @extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2 class="mt-3 mb-4">
            Crea un nuovo Post
        </h2>
    </div>



    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf


            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" name="title" aria-describedby="helpTitle">
              <small id="helpTitle" class="form-text text-muted">Inserisci il titolo del Post.</small>
              @error('title')
                <div id="title" class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="category">Categoria</label>
              <select name="category_id" class="custom-select @error('category_id') is-invalid @enderror">
                <option value=""></option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" @if(old('category_id') === $category->id) selected @endif> {{ $category->name }} </option>
                @endforeach
              </select>
              <small id="helpCategory" class="form-text text-muted" >Seleziona la Categoria</small>
              @error('category_id')
                <div id="category" class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            
            {{-- <p>
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