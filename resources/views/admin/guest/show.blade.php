{{-- dettagli singolo dottore visto da guest 
    possibilità di lasciare una recensione
    possibilità di lasciare un voto 
    possibilità di mandare un messaggio --}}

    @extends('layouts.app')

    @section('content')
    
    
    
    
<div class="container-fluid">
      {{-- @if (session('review-success'))
      <div class="alert alert-success">
         <h3>Hai inviato con successo la tua recensione!</h3>
      </div> 
       @endif--}} 
    
    <div class="row justify-content-center">
        <div class="card mt-5 overflow-hidden" style="width: 1000px;">
            <span class="badge badge-warning" style="color:black">stai guardando:</span>

          <div class="card-header text-center"> <h3> Artista {{ $user->name }} {{ $user->surname }} </h3>
            @if ($user->image)
                <div class="card-img-top justify-content-center">
                    <img class="card-img-top " style="width: 16rem; height: 170px; margin-top: 14px" src="{{ asset('Storage/' . $user->image) }}" alt="immagine {{ $user->name }}">                               
                </div>
            @endif
            @if (!$user->image)
                <div class="card-img-top">
                    <img src="https://picsum.photos/200/300" style="width: 16rem; height: 170px; margin-top: 14px" alt="default-avatar">
                </div>
            @endif 
             
          </div>
          <div class="d-flex flex-row">
                <div class="card-body">
                    <p class="card-text"><strong> Email: </strong>{{ $user->email }}</p>
                    <p class="card-text"> <strong> Indirizzo: </strong>{{ $user->address }}</p>
        
                    @if ($user->phone)
                        <p class="card-text"> <strong> Numero di telefono: </strong>{{ $user->phone }}</p>
                    @endif
        
                    @if ($user->cv)
                        <a class="btn btn-secondary" href="{{ asset('Storage/' . $user->cv) }}"
                            role="button">&#129047; Scarica
                            CV &#129047;
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <h1>Opere dell'Artista</h1>
<hr>

    {{-- 
    <div class="container">
        <h1>Opere di {{ $post->user->name }}</h1>
        <div class="row">
            <div class="col-6">
                @if($post->user_id)
                    @foreach($post->user->posts as $relatedPost) 
                        <div class="card-deck">
                            <div class="card">
                                <h4 class="card-title pl-3 pt-3"><strong>Opera: </strong>{{ $relatedPost->title }}</h4>

                                @if ($post->image)
                                    <div class="col-12">
                                        <img src="{{ $post->$img_path->image }}" width="400px" alt="">
                                    </div> 
                                @endif
                                @if (!$post->image)
                                    <div class="card" style="border:0;">
                                        <img class="card-img-top" style="width: 20rem; height:300px; margin-top:14px;" src="{{ asset('Storage/' . $post->image) }}" alt="{{ $post->name }}">                               
                                    </div>   
                                @endif 

                                <div class="card-body">
                                    <p><strong>Categoria: </strong>{{ $post->category->name }}</p>
                                    <p class="card-text"><strong>description: </strong>{{ $relatedPost->content }}</p>
                                </div>

                                <div class="card-footer">
                                    <small class="text-muted">Creato il: {{ $relatedPost->created_at }}</small>
                                </div>
                                
                                <div class="col-4  text-left d-flex justify-content-end align-items-center">
                                    <a href="{{ route('admin.posts.show', $post->id) }}" type="button" class="btn btn-primary btn-sm">Modifica</a>

                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        
                                        <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div> --}}
    Ciclo le opere dell'artista corrente
</div>
@endsection