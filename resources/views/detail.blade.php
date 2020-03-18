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
                <button class="btn btn-block btn-primary h-100">Add to cart</button>
                </div>
            </div>
            </form>

        </div>
        </div>

    </div>
</section>

<section class="section bg-primary bt-1">
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
        <?php } ?>

        </div>

    </div>
    </section>


@endsection