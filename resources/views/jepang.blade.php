@extends('layout\app')
@section('content')
<div class="main">
<p>
<main class="container">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <p class="display-5 text-dark">JEPANG</p>
      </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/jepang/jepang1.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Akihabara</h5>
        <p>Pusat perbelanjaan yang terkenal karena retailer barang elektroniknya dan juga merupakan tempat khusus untuk manga, anime, dan video game.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/jepang/jepang2.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kuliner Khas</h5>
        <p>Umumnya makanan negara asia dan barat memakai bumbu dari biji-bijian dan rempah-rempah sebagai bumbu. Makanan jepang tidak menggunakan bumbu tersebut.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/jepang/jepang3.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kondisi malam hari</h5>
        <p>Ada sejumlah tempat yang menawarkan kesunyian dan pemandangan indah di malam hari karena sedikitnya penduduk yang tinggal ditempat tersebut.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<p>
<div class="container">
    <div class="row align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <p class="display-6 text-dark">REKOMENDASI!</p>
      </div>
<p>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="card col p-4 d-flex flex-column position-static">
          <h3 class="mb-0 text-dark">Ski</h3>
          <hr>
          <p class="card-text mb-auto">Ada banyak pegunugan bersalju di Jepang.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{asset('images/jepang/jepang4.jpg')}}" class="bd-placeholder-img" width="300" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="card col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Berburu action figure</h3>
          <hr>
          <p class="mb-auto">Tentu saja yang satu ini tidak boleh dilewatkan, karena merupakan souvenir paling iconic di Negeri Sakura ini.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{asset('images/jepang/jepang5.jpg')}}" class="bd-placeholder-img" width="300" height="250">
        </div>
      </div>
    </div>
  </div>
</p>
</div>
@endsection