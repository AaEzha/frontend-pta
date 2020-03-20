@extends('layout.master')

@section('content_head')
    
@endsection

@section('content')
<header class="header pb-9 pt-10 bg-primary">
    <div class="container">
        <div class="row">
            <div class=col-md">
            <h1 class="fw-200 mb-6">Welcome</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <form action="#">
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Email Address*</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="forgotton-password_info">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="/my-account" class="btn btn-secondary">Login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md">
                <form action="#">
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb--20">
                                <label>First Name</label>
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <label>Last Name</label>
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label>Email Address*</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                                <input type="password" placeholder="Confirm Password" class="form-control">
                            </div>
                            <div class="col-12 mt-4">
                                <a href="/my-account" class="btn btn-secondary">Register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>


@endsection