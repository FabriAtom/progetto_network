
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">slug</th>
                        <th scope="col">Creazione</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>



                        <td>{{ $post->category->name }}</td>

                        <td>{{ $post->content }}</td>
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
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
       