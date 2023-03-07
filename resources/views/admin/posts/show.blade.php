@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-8">
             <h1>Titolo: {{ $post->title }}</h1>
             <h2>Artista: {{ $post->user->name }}
                {{-- <a href="{{ route('admin.users.show',$post->user->name) }}"></a> --}}
            </h2>

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

            <p> {{ $post->slug }}</p>

            <h3>Categoria: {{ $post->category->name }}</h3>

            <ul class="d-flex gap-5">
                <li>{{ $post->created_at }}</li>
                <li>{{ $post->updated_at }}</li>
            </ul>
        </div>

        <div class="col-4  text-left d-flex justify-content-end align-items-center">
             <a href="{{ route('admin.posts.edit', $post) }}" type="button" class="btn btn-primary btn-sm">Modifica</a>

             <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">

                @csrf
                @method('DELETE')
                
                <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
            </form>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col-12">
            <p>
                {!! $post->content !!}
            </p>
        </div>
    </div>
</div>


{{-- elenco post che hanno la stessa categoria --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            @if($post->user)
            @foreach($post->user->posts as $relatedPost) 

            <p>{{ $relatedPost->title }}</p>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection