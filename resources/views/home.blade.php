@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')

<section class="section bg-gray">
      <div class="col-md-12 my-auto">
        <div data-provide="slider" data-arrows="true">
          <div class="bg-secondary"><img src="{{ asset('images/slider.jpg')}}"></div>
          <div><img src="{{ asset('images/slider.jpg')}}"></div>
          <div><img src="{{ asset('images/slider.jpg')}}"></div>
          <div><img src="{{ asset('images/slider.jpg')}}"></div>
        </div>
      </div>
</section>

<section class="section container">
  <div class="row">
    <div class="col-md">
      <img src="{{ asset('images/1-1.jpg') }}" alt="">
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-md"><img src="{{ asset('images/1-2.jpg') }}" alt=""></div>
        <div class="col-md"><img src="{{ asset('images/1-3.jpg') }}" alt=""></div>
      </div>
      <div class="row mt-5">
        <div class="col-md">
          <img src="{{ asset('images/1-4.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">

    <header class="section-header">
      <h2>Featured Products</h2>
      <p class="lead">Produce and supply various Handicraft items all over the world which were very attractive</p>
    </header>
    <div class="row gap-y">

      <?php for($i=1; $i<=3; $i++): ?>
      <div class="col-md-6 col-xl-4">
        <div class="product-3 mb-3">
          <a class="product-media" href="#">
            <img src="{{ asset('images/14.jpg') }}" alt="product">
          </a>
          <div class="product-detail text-left">
            <h6><a href="#">Apple EarPods</a></h6>
            <div class="product-price"><del>$200</del> $160</div>
            <div>
              <i class="fa fa-star" aria-hidden="true"></i> 
              <i class="fa fa-star" aria-hidden="true"></i> 
              <i class="fa fa-star" aria-hidden="true"></i> 
              <i class="fa fa-star" aria-hidden="true"></i> 
              <i class="fa fa-star-o" aria-hidden="true"></i>
              <span class="pull-right">Music</span>
            </div>
          </div>
        </div>
      </div>
      <?php endfor; ?>

    </div>
  </div>
</section>

<section class="section">
  <div class="container-fluid row">
  <div class="col-md bg-secondary pl-7 py-7 bg-home-left">
      <h6 style="text-transform: uppercase">Discounted Up to <strong>50%</strong></h6>
      <h1>Zongely Basket</h1>
      <h6 style="text-transform: uppercase">Limited Time Offer</h6>
      <span class="text-lg">167Days</span>
    </div>
    <div class="col-md bg-primary">
      <h1>Hai</h1>
    </div>
  </div>
  
</section>

      
@endsection