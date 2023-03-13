@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1>Tutte le Opere:</h1>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-3 mb-3">
                <a href="{{ route('admin.posts.show', $post) }}" style="text-decoration:none; color:black;">
                    <div class="card h-100 border-dark">
                        @if ($post->image)
                            <img src="../img/image.jpg" class="card-img-top" alt="{{ $post->name }}">
                        @endif
                        @if (!$post->image)
                            <img src="../img/image.jpg" class="card-img-top" alt="{{ $post->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>
                            <h5 class="card-title mt-2"><strong>{{ $post->category->name }}</strong></h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p class="card-text">Codice Univoco: <strong> {{ $post->slug }}</strong></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Data creazione: {{ $post->created_at }}</small>
                        </div>

                        {{-- <div class="col-4  text-left d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.posts.show', $post) }}" type="button" class="btn btn-primary btn-sm">Vedi</a>

                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                
                                <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                            </form>
                        </div> --}}
                    </div>  
                </a>    
            </div>
        @endforeach
    </div>
</div>
@endsection
        

        {{-- @if ($post->user_id)
            
        @endif


        @if (!$post->user_id)

        @endif

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
                                        <a href="{{ route('admin.posts.show', $post) }}" type="button" class="btn btn-primary btn-sm">Modifica</a>

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



                {{-- <div class="row row-cols-1 row-cols-md-3"> --}}
                    {{-- <div class="col mb-4 flex">
                        <div class="card">

                            <div class="card-body">
                                <img class="card-img-top " style="width: 20rem; height: 200px; margin-top:14px; margin-left:55px" src="{{ asset('Storage/' . $post->image) }}" alt="{{ $post->name }}">                               


                                <h5 class="card-title mt-2">Categoria: <strong>{{ $post->category->name }}</strong></h5>

                                <p class="card-text">{{ $post->content }}</p>
                                <p class="card-text">{{ $post->slug }}</p>

                                <p>
                                   <a href="{{ route('admin.posts.show', $post) }}" type="button" class="btn btn-primary btn-sm">Vedi</a>
                                </p>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    
                                    <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                                </form>
                            </div>
                        </div>
                    </div> --}}



