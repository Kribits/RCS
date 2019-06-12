@extends('layouts.main')

@section('content')

    <!-- Jaunākais bloga ieraksts -->
    <div class="container ">
      <div class="row ">
          <div class="col-sm-12 my-2">
                  <h2>Jaunākais bloga ieraksts</h2>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
                  <div class="card mb-3">
                      <img src="{{ $firstPost->img_url }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{ $firstPost->title }}</h5>
                        <p class="card-text">{{ $firstPost->excerpt }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/ieraksti/{{ $firstPost->id }}" class="btn btn-warning">Lasīt</a>
                      </div>
                  </div>
        </div>
      </div>
    </div>
  <!-- /Jaunākais bloga ieraksts -->
  <!-- Visi bloga ieraksti -->
  <div class="container ">
    <div class="row">
      <div class="col-sm-12">
        <h3>Senāki bloga ieraksti</h3>
      </div>
    </div>
              <!-- Pēdējie ieraksti -->
    <div class="row">
      @foreach ($posts as $postItem )
          <div class="col-md-3 my-3">
              <div class="card-deck">
                  <div class="card">
                    <img src="{{ $postItem->img_url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $postItem->title }}</h5>
                      <p class="card-text">{{ $postItem->excerpt }}</p>
                      <p class="card-text "><small class="text-muted ">Last updated 3 mins ago</small></p>
                      <a href="/ieraksti/{{ $postItem->id }}" class="btn btn-warning">Lasīt</a>
                    </div>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
  </div>
  <!-- /Visi bloga ieraksti -->


@endsection

