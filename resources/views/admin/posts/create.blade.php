@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-8">
              <h1>Crea nuovo post</h1>   
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
                      <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="image">
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
