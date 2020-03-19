@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')
<section class="section overflow-hidden bg-primary">
    <div class="container">
        <header class="section-header">
        <h2>Our best products</h2>
        </header>


        <div data-provide="shuffle">

        <nav class="nav nav-center nav-pills mb-7" data-shuffle="filter">
            <a class="nav-link active" href="#" data-shuffle="button">All</a>
            <a class="nav-link" href="#" data-shuffle="button" data-group="dress">Dress</a>
            <a class="nav-link" href="#" data-shuffle="button" data-group="atasan">Atasan</a>
            <a class="nav-link" href="#" data-shuffle="button" data-group="blazer">Blazer</a>
            <a class="nav-link" href="#" data-shuffle="button" data-group="celana">Celana</a>
        </nav>


        <div class="row gap-y gap-2" data-shuffle="list">

            <div class="col-6 col-lg-3" data-shuffle="item" data-groups="dress,atasan">
            <a href="/detail"><img src="{{ asset('images/product.jpg') }}" alt="screenshot"></a>
            </div>

            <div class="col-6 col-lg-3" data-shuffle="item" data-groups="blazer">
            <a href="/detail"><img src="{{ asset('images/product.jpg') }}" alt="screenshot"></a>
            </div>

            <div class="col-6 col-lg-3" data-shuffle="item" data-groups="atasan">
            <a href="/detail"><img src="{{ asset('images/product.jpg') }}" alt="screenshot"></a>
            </div>

            <div class="col-6 col-lg-3" data-shuffle="item" data-groups="celana">
            <a href="/detail"><img src="{{ asset('images/product.jpg') }}" alt="screenshot"></a>
            </div>

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
@endsection