@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-8">
             <h1>Titolo: {{ $post->title }}</h1>


             <h2>Artista: {{ $post->user->name }}
                <a href="{{ route('admin.users.show',$post->user->name)}}"></a>
            </h2>

             <p> {{ $post->slug }}</p>

             <h3>Categoria: {{ $post->category->name }}</h3>

             {{-- SE C'è LA CATEGORIA ALLORA STAMPEREMO --}}
              {{-- @if($post->category)
              <p>{{ $post->category->name }}</p>
              @endif --}}

             {{-- @dump($post->category()) --}}

             <ul class="d-flex gap-5">
                <li>{{ $post->created_at }}</li>
                <li>{{ $post->updated_at }}</li>
             </ul>
        </div>
        <div class="col-4  text-left d-flex justify-content-end align-items-center">
             <a href="{{ route('admin.posts.edit', $post) }}" type="button" class="btn btn-primary btn-sm">Modifica</a>
             {{-- form eliminazione --}}
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
{{-- <div class="container">
    <div class="row">
        <div class="col-12">
            @if($post->category)
            @foreach($post->category->posts as $relatedPost) 

            <p>{{ $relatedPost->title }}</p>
            @endforeach
            @endif
        </div>
    </div>
</div> --}}
@endsection