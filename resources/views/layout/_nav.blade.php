
{{--  Navbar  --}}
<nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark py-3" data-navbar="sticky">
  <div class="container-fluid px-lg-10">

    <div class="navbar-left">
      <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
      <a class="navbar-brand" href="{{url('/')}}">
        <img class="logo-dark" src="{{asset('assets/brand/logo.png')}}" alt="logo" style="max-height:100%;">
        <img class="logo-light" src="{{asset('assets/brand/logo-light.png')}}" alt="logo" style="max-height:100%;">
      </a>
    </div>


    <section class="navbar-mobile">
      <ul class="nav nav-navbar w-100">

        <li class="nav-item nav-mega">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item nav-mega">
          <a class="nav-link" href="/products">Shop</a>
        </li>
        <li class="nav-item nav-mega">
          <a class="nav-link" href="#">Pages</a>
        </li>
        <li class="nav-item nav-mega">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item nav-mega">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
    </section>
    
    <a href="#" class="mr-7 text-dark" data-toggle="offcanvas" data-target="#offcanvas-search"><i class="fa fa-search" aria-hidden="true"></i></a>
    <a href="#" class="mr-7 text-dark" data-toggle="offcanvas" data-target="#offcanvas-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
    <a href="/login" class="mr-7 text-dark"><i class="fa fa-user" aria-hidden="true"></i></a>

  </div>
</nav>
{{-- /.navbar  --}}

