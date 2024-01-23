@extends('layouts.main')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdn.sanity.io/images/tlr8oxjg/production/1706e25eac3c20ab4bf5d2062264a288af29f496-1324x742.png?w=3840&q=80&fit=clip&auto=format" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.sanity.io/images/tlr8oxjg/production/1706e25eac3c20ab4bf5d2062264a288af29f496-1324x742.png?w=3840&q=80&fit=clip&auto=format" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.sanity.io/images/tlr8oxjg/production/1706e25eac3c20ab4bf5d2062264a288af29f496-1324x742.png?w=3840&q=80&fit=clip&auto=format" class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
    <div class="col">
      <div class="card h-100">
      <a href="{{ route('detailProduct') }}" class="btn">
        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">PRODUK</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </a>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
      <a href="{{ route('detailProduct') }}" class="btn">
        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">PRODUK</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </a>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
      <a href="{{ route('detailProduct') }}" class="btn">
        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">PRODUK</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </a>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
      <a href="{{ route('detailProduct') }}" class="btn">
        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">PRODUK</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </a>
      </div>
    </div>
  </div>
@endsection