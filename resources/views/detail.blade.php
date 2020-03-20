@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')

<section class="section">
    <div class="container">

        <div class="row">
        <div class="col-md-7 mr-auto mb-7 mb-md-0">
            <div class="slider-dots-line text-center" data-provide="slider" data-dots="true">
            <div><img src="{{ asset('images/product.jpg') }}" alt="product"></div>
            <div><img src="{{ asset('images/product.jpg') }}" alt="product"></div>
            <div><img src="{{ asset('images/product.jpg') }}" alt="product"></div>
            <div><img src="{{ asset('images/product.jpg') }}" alt="product"></div>
            </div>
        </div>


        <div class="col-md-4">
            <h4>Apple Watch Series 2</h4>
            <p>
            <del>$399</del>
            <span class="lead ml-5">$349</span>
            </p>

            <p>Built-in GPS. Water resistance to 50 meters.1 A lightning-fast dual‑core processor. And a display that’s two times brighter than before. Full of features that help you stay active.</p>

            <ul>
            <li>Built in GPS</li>
            <li>Heart Rate Sensor</li>
            <li>Water Resistant 50 Meters</li>
            <li>Comprehensive Workout App</li>
            </ul>

            <hr>

            <form>
            <div class="form-group">
                <select class="form-control">
                <option>Select a color</option>
                <option>Black</option>
                <option>White</option>
                <option>Pink</option>
                <option>Gold</option>
                </select>
            </div>

            <div class="row">
                <div class="col form-group">
                <input class="form-control" type="text" placeholder="Quantity">
                </div>

                <div class="col form-group">
                <a class="btn btn-block btn-primary h-100" href="/cart">Add to cart</a>
                </div>
            </div>
            </form>

        </div>
        </div>

    </div>
</section>

<section class="section py-7 bg-warning">
  <div class="container">
    <div class="row gap-y align-items-center">
      <div class="col-md-9">
        <h4 class="mb-0 text-center text-white text-md-left">Want a promo code? You're in the right place!</h4>
      </div>

      <div class="col-md-3 text-center text-md-right">
        <a class="btn btn-lg btn-round btn-danger" href="/detail">Take one for you</a>
      </div>
    </div>
  </div>
</section>

<section class="section bt-1 bg-primary">
    <div class="container">

        <h4 class="mb-7">Similar products</h4>

        <div class="row gap-y">
        
        <?php for($i=1; $i<=3; $i++){ ?>
        <div class="col-12 col-lg-4">
        <div class="card d-block">
            <div class="card-img-top">
            <a class="product-media" href="/detail">
                <img src="{{ asset('images/product.jpg') }}" alt="Card image cap">
            </a>
            <div class="badges badges-right">
                <a class="badge badge-warning" href="/detail">-15%</a>
            </div>
            </div>

            <div class="card-body">
            <h5 class="card-title"><a href="/detail">Apple EarPods</a></h5>
            <p><del>$200</del> $160</p>
            <div class="rating">
                <label class="fa fa-star"></label>
                <label class="fa fa-star"></label>
                <label class="fa fa-star"></label>
                <label class="fa fa-star empty"></label>
                <label class="fa fa-star empty"></label>
              </div>
            </div>
        </div>
        </div>
        <?php } ?>

        </div>

    </div>
</section>

<section class="section">
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