@extends('layouts.app')

@section('content')

  <div class="jumbotron bg-info">
      <h1 class="display-4 text-center">KGPARTNERS</h1>
      <h2>Come possiamo aiutarti?</h2>
      <hr class="my-4">
  </div>


  <div class="Info text-center">
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
   </div>
  @endsection