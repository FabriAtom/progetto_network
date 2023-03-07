@extends('layouts.app')

@section('content')

  <div class="jumbotron">
      <h1 class="display-4 text-center">KGPARTNERS</h1>
      <h2>Come possiamo aiutarti?</h2>
      <hr class="my-4">
  </div>



  <section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="../img/fotoquadri.bmp" class="d-block w-100" alt="">
                {{-- <iframe width="800" height="320" src="../img/inchiostroSfondo.mp4"> </iframe>  --}}

                {{-- <video  controls>
                    <source src=”../img/inchiostroSfondo.mp4” type=video/mp4>
                  </video> --}}
            </div>
          <div class="carousel-item active">
            <img src="../img/art-gallery.png" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../img/arte1.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>


  <div class="text-center pt-3">
    <p><Strong>KGPARTNERS</Strong>, Siamo la tua piattaforma numero 1 di ricerca Artisti in tutta Italia.
      Qui trovi tutte le Opere artistiche di vari generi, ti basta cercare!</p>
    <hr class="my-4">
  </div>
  

  <div class="container-fluid">
    <div class="row">
         <div class="col-8">
              <h1 class="py-5 pl-3 pt-2 pb-2">Visita i nostri Artisti!</h1>
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