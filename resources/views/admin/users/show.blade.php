{{-- dettagli dell artista loggato
    possibilità di accedere all'edit
    possibilità di leggere le recensioni
    possibilità di leggere i messaggi
possibilità di vedere le statistiche  --}}
@extends('layouts.app')


@section('content')

    <div class="container" style="display:flex; justify-content:flex-end;" >
        <a style="text-decoration: none;" href=" {{ route('admin.posts.create') }}">Aggiungi Artista</a>
    </div>
    
    <section>
        <div class="container">
            <h4 class="pt-3">Opere Utente: <strong>{{ $artist->name }}</strong> </h4>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-5" style="display:flex;">
                    @foreach($artist->posts as $post) 
                            <div class="card-deck pt-3">
                                <div class="card text-left justify-content-end align-items-center mr-5 mb-2">
                                    <h4 class="card-title pl-3 pt-3"><strong>Opera: </strong>{{ $post->title }}</h4>

                                    @if ($post->image)
                                        <div class="col-12">
                                            <img src="{{ $post->$img_path->image }}" width="400px" alt="">
                                        </div> 
                                    @endif
                                    @if (!$post->image)
                                        <div class="card" style="border:0;">
                                            <img class="card-img-top" style="width: 24rem; height:400px; margin-top:14px;" src="../img/image.jpg" alt="{{ $post->name }}">                               
                                        </div>   
                                    @endif 

                                    <div class="card-body">
                                        <h5><strong>Categoria: </strong>{{ $post->category->name }}</h5>
                                        <p class="card-text"><strong>Descrizione: <br> </strong>{{ $post->content }}</p>
                                    </div>

                                    <div class="card-footer">
                                        <small class="text-muted">Creato il: {{ $post->created_at }}</small>
                                    </div>
                                    
                                    <div class="col-4 text-left d-flex justify-content-end align-items-center mt-2 mb-2">
                                        <a href="{{ route('admin.posts.show', $post) }}" type="button" class="btn btn-primary btn-sm mr-2">Dettaglio</a>

                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            
                                            <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
