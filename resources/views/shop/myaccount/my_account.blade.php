@extends('shop.layouts.app')
@section('title','Tài Khoản')
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
                                <h1>my-account</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tài Khoản</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper pt-50 pb-50">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- My Account Page Start -->
                            <div class="myaccount-page-wrapper">
                                <!-- My Account Tab Menu Start -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="myaccount-tab-menu nav" role="tablist">
                                            <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                                Tài Khoản</a>
                                            <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                                Lịch Sử Mua Hàng</a>
                                       
                                            <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Thay Đổi Tài Khoản
                                                </a>
                                        </div>
                                    </div>
                                    <!-- My Account Tab Menu End -->

                                    <!-- My Account Tab Content Start -->
                                    <div class="col-lg-9 col-md-8">
                                        <div class="tab-content" id="myaccountContent">
                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Thông Tin Tài Khoản</h3>
                                                    <div class="welcome">
                                                        <img src="{{ asset('public/frontend/assets/img/team/trug.jpg') }}" style="width: 150px; height: 200px;"  alt="">
                                                        <p>Tên : <strong>Nguyễn Ngọc Trung</strong></p>

                                                    </div>
                                                    <p class="mb-0">Địa Chỉ : <strong>165 Khương Thượng Đống Đa Hà Nội</strong></p>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Orders</h3>
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Mã Đơn Hàng</th>
                                                                    <th>Ngày Mua Hàng</th>
                                                                    <th>Tình Trạng</th>
                                                                    <th>Tổng Tiền</th>
                                                                    <th>Xem Đơn Hàng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>03021999</td>
                                                                    <td>21/12/2021</td>
                                                                    <td>Đã Giao Hàng</td>
                                                                    <td>30.000.000 VNĐ</td>
                                                                    <td><a href="cart.html" class="btn btn__bg">Xem</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>24026989</td>
                                                                    <td>1/1/2022</td>
                                                                    <td>Đã Giao Hàng</td>
                                                                    <td>35.000.000 VNĐ</td>
                                                                    <td><a href="cart.html" class="btn btn__bg">Xem</a>
                                                                    </td>
                                                                </tr>
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->


                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Chỉnh Sửa Thông Tin Tài Khoản</h3>
                                                    <div class="account-details-form">
                                                        <form action="#">
                                                            
                                                            <div class="single-input-item">
                                                                <label for="display-name" class="required">Họ Và Tên</label>
                                                                <input type="text" id="display-name" placeholder="Điền Tên......" />
                                                            </div>
                                                            <div class="single-input-item">
                                                                <label for="email" class="required">Email</label>
                                                                <input type="email" id="email" placeholder="Email...." />
                                                            </div>
                                                            <div class="single-input-item">
                                                                <label for="phone" class="required">Số Điện thoại</label>
                                                                <input type="number" id="phone" placeholder="SĐT...." />
                                                            </div>
                                                            <div class="single-input-item">
                                                                <label for="text" class="required">Địa Chỉ</label>
                                                                <input type="text" id="address" placeholder="Địa Chỉ...." />
                                                            </div>
                                                            <fieldset>
                                                                <legend>Đổi Mật Khẩu</legend>
                                                                <div class="single-input-item">
                                                                    <label for="current-pwd" class="required">Mật Khẩu Cũ
                                                                        </label>
                                                                    <input type="password" id="current-pwd" placeholder="Current Password" />
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="single-input-item">
                                                                            <label for="new-pwd" class="required">Mật Khẩu Mới
                                                                                </label>
                                                                            <input type="password" id="new-pwd" placeholder="........" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="single-input-item">
                                                                            <label for="confirm-pwd" class="required">Xác Nhận Mật Khẩu 
                                                                                </label>
                                                                            <input type="password" id="confirm-pwd" placeholder="........" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="single-input-item">
                                                                <button class="btn btn__bg">Xác Nhận</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- Single Tab Content End -->
                                        </div>
                                    </div> <!-- My Account Tab Content End -->
                                </div>
                            </div> <!-- My Account Page End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->

    </main>
    <!-- main wrapper end -->



@endsection