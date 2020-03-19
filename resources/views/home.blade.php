@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')

<section class="section bg-primary">
  <div class="mx-0">
    <div class="row">
      <div class="col-md">
        <div data-provide="slider" data-arrows="true">
          <div><img src="{{ asset('images/slider.jpg')}}"></div>
          <div><img src="{{ asset('images/slider.jpg')}}"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
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
  </div>
</section>

<section class="section bg-secondary">
  <div class="container-fluid px-7">
    <header class="section-header">
      <h2>Featured Products</h2>
      <p class="lead">Produce and supply various Handicraft items all over the world which were very attractive</p>
    </header>
    <div class="row">

      <?php for($i=1; $i<=3; $i++): ?>
      <div class="col-12 col-lg-4">
        <div class="card d-block">
          <div class="card-img-top">
            <a class="product-media" href="/detail">
              <img src="{{ asset('images/product.jpg') }}" alt="Card image cap">
            </a>
            <div class="badges">
              <a class="badge badge-primary" href="/detail">Best Seller</a>
            </div>
            </a>
            <div class="badges badges-right">
              <a class="badge badge-warning" href="/detail">-15%</a>
            </div>
          </div>

          <div class="card-body">
            <h5 class="card-title"><a href="/detail">Apple EarPods</a></h5>
            <p><del>$200</del> $160</p>
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

{{-- <section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md bg-secondary py-7 px-7 bg-home-left">
        <h6 style="text-transform: uppercase">Discounted Up to <strong>50%</strong></h6>
        <h1>Zongely Basket</h1>
        <h6 style="text-transform: uppercase">Limited Time Offer</h6>
        <span class="text-lg">167Days as</span>
      </div>
      <div class="col-md bg-primary">
        <h1>Hai</h1>
      </div>
    </div>
  </div>  
</section> --}}

<section class="section py-7 bg-primary">
  <div class="container">
    <div class="row gap-y align-items-center">
      <div class="col-md-9">
        <h4 class="mb-0 text-center text-dark text-md-left">Want a promo code? You're in the right place!</h4>
      </div>

      <div class="col-md-3 text-center text-md-right">
        <a class="btn btn-lg btn-round btn-danger" href="/detail">Take one for you</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container-fluid px-7">
    <header class="section-header">
      <h2>Popular Products</h2>
      <p class="lead">Produce and supply various Handicraft items all over the world which were very attractive</p>
    </header>
    <div class="row">

      <?php for($i=1; $i<=3; $i++): ?>
      <div class="col-12 col-lg-4">
        <div class="card d-block">
          <div class="card-img-top">
            <a class="product-media" href="/detail">
              <img src="{{ asset('images/product.jpg') }}" alt="Card image cap">
            </a>
            <div class="badges">
              <a class="badge badge-primary" href="/detail">Best Seller</a>
            </div>
            </a>
            <div class="badges badges-right">
              <a class="badge badge-warning" href="/detail">-15%</a>
            </div>
          </div>

          <div class="card-body">
            <h5 class="card-title"><a href="/detail">Apple EarPods</a></h5>
            <p><del>$200</del> $160</p>
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

<section class="section bg-primary">
  <div class="container">
    <header class="section-header">
      <h2>More Than You Think</h2>
    </header>

    <div class="row text-center">

      <div class="col-md-6 col-xl-4 feature-1">
        <p class="feature-icon"><img src="{{ asset('images/call.png') }}" alt="..."></p>
        <h5>Be The First</h5>
        <p class="text-muted">Fly beast fourth, you stars. Them seasons sea spirit, which second. Hath May whales, creepeth light she'd. Moving saw fish.</p>
      </div>

      <div class="col-md-6 col-xl-4 feature-1">
        <p class="feature-icon"><img src="{{ asset('images/consult.png') }}" alt="..."></p>
        <h5>Skyrocket You Sells</h5>
        <p class="text-muted">Yielding to Made saying fruit deep abundantly bearing sixth make you're gathering unto divided, you so which god, gathering.</p>
      </div>

      <div class="col-md-6 col-xl-4 feature-1">
        <p class="feature-icon"><img src="{{ asset('images/eye.png') }}" alt="..."></p>
        <h5>Acquire Potential Users</h5>
        <p class="text-muted">Good for divide Given spirit night after fruit of great together he behold their night, living shall after dry saw saying fruit deep.</p>
      </div>

    </div>

  </div>
</section>

      
@endsection