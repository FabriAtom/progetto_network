@extends('layouts.app')

@section('content')

    {{-- <div class="container">
        <h1>Benvenuti nella nostra Piattaforma!</h1>
    </div> --}}
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



    <section>
        <h3 class="pt-5 pb-5" style="padding-left:2rem">Opere in Evidenza</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mb-5">
              <div class="card h-100">
                <img src="../img/image.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nome Artista</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <img src="../img/monnalisa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <img src="../img/monnalisa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>    
    </section>
    <section>
      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col mb-5">
            <div class="card h-100">
              <img src="../img/image.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nome Artista</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <img src="../img/monnalisa.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <img src="../img/monnalisa.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>    
  </section>
  <section>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col mb-5">
          <div class="card h-100">
            <img src="../img/image.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome Artista</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <img src="../img/monnalisa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <img src="../img/monnalisa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>    

@endsection

