@extends('layouts/main')

@section('container')
    <link href="css/artikel.css" rel="stylesheet">
    <!--hero-->
    <!-- <div id="carouselExampleCaptions" class="carousel" data-bs-ride="false"> -->
    {{-- <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/img/artike-ilustator.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Mari Hidup Sehat Bersama Kami </h5>
          <p>"Jangan menunggu sakit, Budayakan hidup sehat untuk mencegah segala penyakit."</p>
        </div>
      </div>
    </div> --}}

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/img/artike-ilustator.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Mari Hidup Sehat Bersama Kami </h5>
          <p>"Jangan menunggu sakit, Budayakan hidup sehat untuk mencegah segala penyakit."</p>
        </div>
      </div>
    </div>

    <div class="container artikel">
      <h1>artikel kesehatan</h1>
      <div class="row">
        @foreach ($artikel as $item) 
        <div class="card p-2" style="width: 18rem;">
          <img src="{{ $item ['urlToImage'] }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item ['title'] }}</h5>
            <p class="card-text">{{ $item ['description'] }}</p>
            <a href="{{ $item ['url'] }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        @endforeach
      </div>


</body>

@endsection