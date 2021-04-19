@extends('layout\app')
@section('content')
<main class="container">   
    <div class="container">
    <div class="row align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <p class="display-5 text-dark">CHINA</p>
      </div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/china/china1.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tembok China</h5>
        <p>Tembok Besar Tiongkok atau Tembok Raksasa Tiongkok, juga dikenal di Tiongkok dengan nama Tembok Sepanjang 10.000 Li¹ adalah bangunan terpanjang yang pernah diciptakan manusia yang berlokasi di Tiongkok.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/china/china2.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Barongsai</h5>
        <p>Barongsai adalah tarian tradisional Tiongkok dengan menggunakan sarung yang menyerupai singa. Barongsai memiliki sejarah ribuan tahun.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/china/china3.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lampion</h5>
        <p>Menurut sejarah, diperkirakan tradisi memasang lampion sudah ada di daratan Cina sejak era Dinasti Xi Han, sekitar abad ke-3 masehi. Munculnya lampion hampir bersamaan dengan dikenalnya tehnik pembuatan kertas.</p>
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
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="card col p-4 d-flex flex-column position-static">
          <h3 class="mb-0 text-dark">Berburu Kuliner</h3>
          <hr>
          <p class="card-text mb-auto">Negeri Tirai Bambu ini terkenal dengan makanan nya yang sangat pedas.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{asset('images/china/china4.jpg')}}" class="bd-placeholder-img" width="300" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="card col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">-</h3>
          <hr>
          <p class="mb-auto">-</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{asset('')}}" class="bd-placeholder-img" width="300" height="250">
        </div>
      </div>
    </div>
  </div>
</p>
  </div>
@endsection