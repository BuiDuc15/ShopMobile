@extends('shop.layouts.app')
@section('title','Liên hệ')
@section('content')
<!-- breadcrumb area start -->
<div class="breadcrumb-area breadcrumb-area-style_2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1>Liên hệ chúng tôi</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liên hệ chúng tôi</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- contact area start -->
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-message">
                    <h2>Vấn đề của bạn là gì</h2>
                    <form id="contact-form" action="https://template.hasthemes.com/oregon/oregon/assets/php/mail.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="first_name" placeholder="Tên của bạn *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="phone" placeholder="Số điện thoại của bạn *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="email_address" placeholder="Email của bạn *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="contact_subject" placeholder="Chủ đề bạn muốn nói *" type="text">
                            </div>
                            <div class="col-12">
                                <div class="contact2-textarea text-center">
                                    <textarea placeholder="Nội dung tin nhắn *" name="message" class="form-control2" required=""></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button class="btn btn__bg" type="submit">Gửi tới chúng tôi</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info">
                    <h2>Liên hệ chúng tôi</h2>
                    <p>Chúng tôi sẽ đọc sớm nhất vấn đề, thắc mắc bạn gặp phải. Đừng lo lắng quá, chúng tôi sẽ giúp bạn giải quyết đơn giản, nhanh chóng và đảm bảo lợi ích của bạn.</p>
                    <ul>
                        <li><i class="fa fa-fax"></i> Địa chỉ : Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</li>
                        <li><i class="fa fa-phone"></i> hust@sis.hust.edu.vn</li>
                        <li><i class="fa fa-envelope-o"></i> 0123456789</li>
                    </ul>
                    <div class="working-time">
                        <h3>Ngày làm việc</h3>
                        <p><span>Thứ 2- Thứ 6 /</span> 8:00 - 18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->
@endsection
