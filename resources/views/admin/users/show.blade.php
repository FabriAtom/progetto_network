
{{-- dettagli dell artista loggato
    possibilità di accedere all'edit
    possibilità di leggere le recensioni
    possibilità di leggere i messaggi
    possibilità di vedere le statistiche --}}
@extends('layouts.app')
@section('content')

<section>
    <div class="container">
    <h2>elenco post</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>titolo</th>
                            <th>contenuto</th>
                            <th>image</th>
                            <th>slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->posts()->orderBy('title', 'desc')->get() as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->image }}</td>
                            <td>{{ $post->slug }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


@endsection