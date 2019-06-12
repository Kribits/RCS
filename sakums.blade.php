@extends('layouts.main')
<!-- Fona attēls -->
<div class="jumbotron" style="background-image: url(https://picsum.photos/id/102/1220/490" )>
  <div class="container">
      <div class="col-sm-6">
          <h1 class="display-4">Sveicam jūs ogu lapā!</h1>
          <div class="py-5">
              <p class="lead">Dabīgi saldai dzīvei.</p>
              <div class="py-5">
                  <!-- <hr class="my-5"> -->
                  <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                  <a class="btn btn-warning btn-lg" href="/contacts" role="button">Par mani</a>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- /Fona attēls -->
    <!-- Pēdējie ieraksti -->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <h2>Jaunākie bloga ieraksti</h2>
            </div>
        </div>
        <div class="row">
                @foreach ($posts as $allPosts )
                <div class="col-md-3 my-3">
                    <div class="card-deck">
                        <div class="card">
                          <img src="{{ $allPosts->img_url }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{ $allPosts->title }}</h5>
                            <p class="card-text">{{ $allPosts->excerpt }}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="/ieraksti/{{ $allPosts->id }}" class="btn btn-warning">Lasīt</a>
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /Pēdējie ieraksti -->
    <!-- Poga -->
    <div class="container">
        <div class="row">
            <div class="col">
                <button id="button" type="button" class="btn btn-block btn-lg btn-warning"><a href="/blog" target="blank">Visi ieraksti</a></button>
            </div>
        </div>
    </div>
    <!-- /Poga -->
    <!-- Slaideris -->
    <div class="container">
        <div class="row">
            <div class="col my-3 py-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/1080/1400/500" class="d-block w-100" alt="zemenes">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/429/1400/500" class="d-block w-100" alt="avenes">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/493/1400/500" class="d-block w-100" alt="muslis">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Slaideris -->

