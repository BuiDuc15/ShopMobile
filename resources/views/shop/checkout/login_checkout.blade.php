@extends('shop.layouts.app')
@section('title','Login-checkout')
@section('content')


<!-- main wrapper start -->
<main class="body-bg">

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1>Đăng Nhập - Đăng Ký</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng Nhập - Đăng Ký</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- login register wrapper start -->
<div class="login-register-wrapper pt-50 pb-50">
    <div class="container">
        <div class="member-area-from-wrap">
            <div class="row">
                <!-- Login Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap">
                        <h2>Đăng Nhập</h2>
                        <form action="{{URL::to('/login-customer')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="single-input-item">
                                <input type="email" name="email_account" placeholder="Emal" required />
                            </div>
                            <div class="single-input-item">
                                <input type="password" name="password_account" placeholder="Enter your Password" required />
                            </div>
                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="forget-pwd">Forget Password?</a>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button type="submit" class="btn btn__bg">Đăng Nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login Content End -->

                <!-- Register Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap sign-up-form">
                        <h2>Đăng Ký</h2>
                        <form action="{{URL::to('/add-customer')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="single-input-item">
                                <input type="text" name="customer_name" placeholder="Full Name" required />
                            </div>
                            <div class="single-input-item">
                                <input type="email" name="customer_email" placeholder="Enter your Email" required />
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="customer_phone" placeholder="Enter phone number" required />
                            </div>
                            <div class="row">
                                <div class="single-input-item">
                                        <input type="password" name="customer_password" placeholder="Enter your Password" required />   
                                </div>
                            </div>                      
                            <div class="single-input-item">
                                <button type="submit" class="btn btn__bg">Đăng Ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register Content End -->
            </div>
        </div>
    </div>
</div>
<!-- login register wrapper end -->

</main>
<!-- main wrapper end -->
@endsection