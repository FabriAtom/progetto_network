@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-8">
             <h2 class="mt-3">Opera: <strong>{{ $post->title }}</strong></h2>
             <h3>Artista: <strong>{{ $post->user->name }}</strong></h3>

            @if ($post->image)
                <div class="col-12">                    
                    <img src="../img/image.jpg" class="card-img-top" alt="{{ $post->name }}">
                    {{-- <img src="{{ $post->img_path }}" width="400" alt=""> --}}
                    {{-- <img src="{{ asset('storage/'.$post->img_path) }}" width="400px" alt=""> --}}
                    {{-- <img src="{{ $post->cover_path }}" width="400" alt=""> --}}
                </div> 
            @endif



            @if($post->cover)
                <div class="col-12">
                 <img src="{{ $post->cover_path }}" width="400" alt="">
                </div>
            @endif




            @if (!$post->image)
                <div class="card" style="border:0;">
                    <img class="card-img-top" style="width: 20rem; height:300px; margin-top:14px;" src="../img/image.jpg" alt="{{ $post->name }}">
                    {{-- <img src="{{ asset('storage/'.$post->image) }}" width="400px" alt=""> --}}
                    
                 </div>   
            @endif 

            <p>Codice Univoco: <strong>{{ $post->slug }}</strong></p>


            <h3>Categoria: <strong>{{ $post->category->name }}</strong></h3>

            <hr>

            <ul class="d-flex gap-5">
                <li>Creato il: {{ $post->created_at }}</li>
                <li>Aggiornato il: {{ $post->updated_at }}</li>
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
                <strong>Descrizione:</strong>
                <br>
                {!! $post->content !!}
            </p>
        </div>
        <hr>
    </div>
</div>


{{-- altre Opere stessa categoria --}}
{{--
<div class="container">
    <div class="row">
        <ul class="col-12">
            @if($post->category)
                @foreach($post->category->posts()->where('id','!=',$post->id)->get() as $relatedPost)
                    <li>
                    <a href="{{ route('admin.posts.show',$relatedPost) }}">
                        {{ $relatedPost->title }}
                    </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div> --}}
@endsection