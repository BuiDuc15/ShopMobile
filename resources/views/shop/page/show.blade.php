@extends('shop.layouts.app')
@section('title','Về chúng tôi')
@section('content')
<!-- breadcrumb area start -->
<div class="breadcrumb-area breadcrumb-area-style_2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1>Chúng tôi là</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- about wrapper start -->
<div class="about-us-wrapper">
    <div class="container">
        <div class="row">
            <!-- About Text Start -->
            <div class="col-xl-6 col-lg-6">
                <div class="about-text-wrap">
                    <h2><span>Cung cấp tốt nhất</span>Những sản phẩm cho bạn </h2>
                    <p>Chúng tôi là nhóm sinh viên làm bài tập.</p>
                    <p>Đây là vài lời giới thiệu về các thành viên của nhóm và nhóm chúng tôi .</p>

                </div>
            </div>
            <!-- About Text End -->
            <!-- About Image Start -->
            <div class="col-xl-5 col-lg-6 ml-auto">
                <div class="about-image-wrap">
                    <img src="{{ asset('public/frontend/assets/img/about/about.png') }}" alt="About" />
                </div>
            </div>
            <!-- About Image End -->
        </div>
    </div>
</div>
<!-- about wrapper end -->

<!-- team area start -->
<div class="team-area body-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-2">
                    <h2>Các thành viên của nhóm</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member mb-30">
                    <div class="team-thumb">
                          <img height="380px" src="{{ asset('public/frontend/assets/img/team/trug.jpg') }}" alt=""> 
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>Nguyễn Ngọc Trung</h3>
                        <h6>Trưởng nhóm</h6>
                        <p>Phụ trách về giao nhiệm vụ cho các thành viên, tạo giao diện và thiết kế frontend.</p>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member mb-30">
                    <div class="team-thumb">
                        <img height="380px" src="{{ asset('public/frontend/assets/img/team/team_member_1.png') }}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>Trần Hữu Định</h3>
                        <h6>Thành viên nhóm</h6>
                        <p>Phụ trách về frontend.</p>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member mb-30">
                    <div class="team-thumb">
                         <img height="380px" src="{{ asset('public/frontend/assets/img/team/team_member_2.jpg') }}" alt=""> 
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>Bùi Minh Đức</h3>
                        <h6>Thành viên nhóm</h6>
                        <p>Phụ trách thiết kế frontend.</p>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member mb-30">
                    <div class="team-thumb img-full">
                      <img height="380px"  src="{{ asset('public/frontend/assets/img/team/team_member_4.jpg') }}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>Nguyễn Thanh Tùng</h3>
                        <h6>Thành viên nhóm</h6>
                        <p>Tìm hiểu, đóng góp ý kiến.</p>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member mb-30">
                    <div class="team-thumb img-full">
                      <img height="380px"  src="{{ asset('public/frontend/assets/img/team/team_member_4.jpg') }}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>Phan Thanh Sơn</h3>
                        <h6>Thành viên nhóm</h6>
                        <p>Tìm hiểu, đóng góp ý kiến.</p>
                    </div>
                </div>
            </div> <!-- end single team member -->
        </div>
    </div>
</div>
<!-- team area end -->

<!-- choosing area start -->
<div class="choosing-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-2">
                    <h2>Lí do bạn chọn cửa hàng chúng tôi </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-choose-item text-center mb-30">
                    <i class="fa fa-globe"></i>
                    <h4>Miễn phí vận chuyển</h4>
                    <p>Group 3 luôn luôn miễn phí vận chuyển cho mọi đơn hàng.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-choose-item text-center mb-30">
                    <i class="fa fa-plane"></i>
                    <h4>Vận chuyển nhanh</h4>
                    <p>Group 3 sẽ luôn chuyển sản phẩm đến tay khách hàng một cách nhanh chóng nhất.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-choose-item text-center mb-30">
                    <i class="fa fa-comments"></i>
                    <h4>Hỗ trợ khách hàng</h4>
                    <p>Group 3 luôn hỗ trợ khách hàng tận tình và nhanh chóng</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choosing area end -->

@endsection
