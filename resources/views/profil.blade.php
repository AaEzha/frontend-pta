@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')
<header class="header pb-9 pt-10" style="background-image: url({{ asset('images/slider.jpg')}})">
    <div class="container">
    <div class="row">
        <div class="offset-md-6 col-md-6">
        <h1 class="fw-200 mb-6">Thank You</h1>
        <p class="lead-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia exercitationem adipisci quos, sint deserunt fugiat! Aspernatur corporis tempora, laborum minus numquam similique a dignissimos? Libero animi soluta fugit corporis voluptatem.</p>
        </div>
    </div>
    </div>
</header>

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