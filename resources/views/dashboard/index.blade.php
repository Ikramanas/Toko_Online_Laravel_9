@extends('layouts.user.main')
@section('container')

<h1>Silahkan belanja</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="col-sm-6 product-image-wrapper">
                <img src="assets/images/improvement/girl1.jpeg" class="d-block w-100 img-responsive" alt="...">
            </div>
            <div class="col-sm-6">
                <h1><span>E</span>-SHOPPER</h1>
                <h2>Free E-Commerce Template</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. </p>
                <button type="button" class="btn btn-default get">Get it now</button>
            </div>
        </div>
      {{-- <div class="carousel-item">
        <img src="assets/images/improvement/recomended1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/improvement/produk1.jpg" class="d-block w-100" alt="...">
      </div> --}}
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection
 