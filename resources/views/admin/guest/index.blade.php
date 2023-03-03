@extends('layouts.app')

@section('content')

  <div class="jumbotron">
      <h1 class="display-4 text-center">KGPARTNERS</h1>
      <h2>Come possiamo aiutarti?</h2>
      <hr class="my-4">
  </div>


  <div class="text-center">
    <p><Strong>KGPARTNERS</Strong>, Siamo la tua piattaforma numero 1 di ricerca Artisti in tutta Italia.
      Qui trovi tutte le Opere artistiche di vari generi, ti basta cercare!</p>
    <hr class="my-4">
  </div>

  <div class="container-fluid">
    <div class="row">
         <div class="col-8">
              <h1 class="py-5">Visita i nostri Artisti!</h1>
          </div>
      </div>

      <div class="container-fluid">
        @if (session('message-success'))
          <div class="alert alert-success">
           <h3>Messaggio inviato con successo!</h3>
          </div>
        @endif 
      </div>




      @foreach ($users as $user)
       <div class="col">
        <a href="{{ route('show', $user) }}" style="text-decoration: none;">

          
            <div class="card mb-5 text-center border-dark" style="height: 450px; background:grey"> 
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
              <div class="card-body">
                <h2 class="card-title text-dark">{{ $user->name }} {{ $user->surname }}</h2>
                <hr>   
                <div style="color:black">
                  <p>{{ $user->name }}</p>
                  <p>{{ $user->address }}</p>       
                  <p>{{ $user->email }}</p>   
                  <p>{{ $user->phone }}</p>           
                </div> 
              </div>      
            </div>
          </a> 
       </div>
      @endforeach
   </div>
  @endsection