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
      
@endsection