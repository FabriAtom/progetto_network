@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1>Le Mie Opere:</h1>
        </div>
        <div class="col-4 text-left d-flex justify-content-end align-items-center">
            <a href="{{ route('admin.posts.create') }}" type="button" class="btn btn-primary btn-sm">Aggiungi Post</a>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col">
                <a href="{{ route('admin.posts.show', $post) }}" style="text-decoration: none;">
                    <div class="card mb-5 text-center border-dark">
                        <div class="card-header text-center"><h3> {{ $post->title }}</h3></div> 
                        @if ($post->image)
                            <div class="card-img-top justify-content-center">
                                <img class="card-img-top " style="width: 20rem; height:300px; margin-top: 14px; margin-left:80px;" src="{{ asset('Storage/' . $post->image) }}" alt="{{ $post->name }}">                               
                            </div>
                        @endif
                        @if (!$post->image)
                            <div class="card">
                                <img class="card-img-top " style="width: 20rem; height:300px; margin-top:14px; margin-left:80px;" src="{{ asset('Storage/' . $post->image) }}" alt="{{ $post->name }}">                               
                            </div>   
                        @endif   
                        <div class="card-body">
                            <h5 class="card-title mt-2">Categoria: <strong>{{ $post->category->name }}</strong></h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p class="card-text">{{ $post->slug }}</p>
                        </div> 
                    </div>
                </a>    
            </div>      
        @endforeach
        
                
                
                
                
            {{-- @if($post->user)
                @foreach($post->user->posts as $relatedPost)
                    <p>{{ $relatedPost->title }}</p>
                @endforeach
            @endif
        </div> --}}
    </div>
</div>
@endsection



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














            {{-- <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Img</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Creazione</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->image }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post) }}" type="button" class="btn btn-primary btn-sm">Vedi</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    
                                    <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table> --}}

