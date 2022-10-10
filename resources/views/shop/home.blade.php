@extends('shop.layouts.app')
@section('title','Trang chủ')
@section('content')
<!-- main wrapper start -->
    <main class="body-bg">
        <!-- slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-slider-item">
                    <div class="d-flex align-items-center bg-img h-100" data-bg="{{ asset('public/frontend/assets/img/slider/home1-slide1.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="hero-slider-content">
                                        <h2>IPHONE 13 Pro Max </h2>
                                        <h1>@lang('lang.coupon')</h1>
                                        <h3>@lang('lang.at')</h3>
                                        <a href="shop.html" class="btn-hero">@lang('lang.buy')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item start -->
                <div class="hero-slider-item">
                    <div class="d-flex align-items-center bg-img h-100" data-bg="{{ asset('public/frontend/assets/img/slider/home1-slide2.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="hero-slider-content">
                                        <h2>IPHONE 12 Pro Max</h2>
                                        <h1>giảm tới 10%</h1>
                                        <h3>chỉ 22 triệu trong hôm nay</h3>
                                        <a href="shop.html" class="btn-hero">NUA NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- slider area end -->

        <!-- service features start -->
        <section class="service-features pt-50">
            <div class="container">
                <div class="service-features-inner bg-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-paper-airplane"></i>
                                </div>
                                <div class="features-content">
                                    <h5>@lang('lang.return')</h5>
                                    <p>@lang('lang.day')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-social-usd"></i>
                                </div>
                                <div class="features-content">
                                    <h5>@lang('lang.ship')</h5>
                                    <p>@lang('lang.shipping')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-features-item">
                                <div class="features-icon">
                                    <i class="ion-help-buoy"></i>
                                </div>
                                <div class="features-content">
                                    <h5>@lang('lang.support')</h5>
                                    <p>@lang('lang.sup')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service features end -->

        <!-- deals area start -->
        <section class="deals-area pt-50">
            <div class="container">
                <div class="deals-wrapper bg-white">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header-deals">
                                <div class="section-title-deals">
                                    <h4>Giảm giá trong tuần</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-12">
                            <div class="deals-item-wrapper">
                                <div class="deals-carousel-active slick-arrow-style slick-row-15">
                                    <!-- deals single item start -->
                                    <div class="deals-slider-item">
                                        <div class="deals-item">
                                            <div class="deals-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" style="width: 250px;" src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-1_2_1.jpg') }}"
                                                        alt="">
                                                    <img class="sec-img" style="width: 250px;" src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-2_2_1.jpg') }}"
                                                        alt="">
                                                </a>
                                                
                                            </div>
                                            <div class="deals-content">
                                                <div class="ratings">
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="product-details.html">iPhone 13 Pro Max | Chính hãng VN/A</a></h4>
                                                <p class="product-desc">Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple Việt Nam. 1 ĐỔI 1 
                                                    trong 30 ngày nếu có lỗi phần cứng nhà sản xuất.</p>
                                                <div class="price-box">
                                                    <span class="price-regular">30.000.000 VND</span><br>
                                                    <span class="price-old"><del>33.000.000 VND</del></span>
                                                </div>
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i>
                                                    Thêm vào giỏ hàng</a>
                                                <div class="product-countdown" data-countdown="2022/1/8"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- deals single item start -->

                                    <!-- deals single item start -->
                                    <div class="deals-slider-item">
                                        <div class="deals-item">
                                            <div class="deals-thumb">
                                                <a href="product-details.html" >
                                                    <img class="pri-img" style="width: 250px;" src="{{ asset('public/frontend/assets/img/product/reno6-1_1 (1).jpg') }}"
                                                        alt="">
                                                    <img class="sec-img" style="width: 250px;" src="{{ asset('public/frontend/assets/img/product/reno-6-5g-nonlogo-776.jpg') }}"
                                                        alt="">
                                                </a>
                                                
                                            </div>
                                            <div class="deals-content">
                                                <div class="ratings">
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="product-details.html">OPPO Reno6 5G  | Chính hãng VN/A</a></h4>
                                                <p class="product-desc">Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple Việt Nam. 1 ĐỔI 1 
                                                    trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. </p>
                                                <div class="price-box">
                                                    <span class="price-regular">12.990.000 VND</span><br>
                                                    <span class="price-old"><del>13.990.000 VND</del></span>
                                                </div>
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i>
                                                    Thêm vào giỏ hàng</a>
                                                <div class="product-countdown" data-countdown="2022/1/10"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- deals single item start -->

                                    <!-- deals single item start -->
                                    <div class="deals-slider-item">
                                        <div class="deals-item">
                                            <div class="deals-thumb">
                                                <a href="product-details.html">
                                                    <img class="pri-img" src="{{ asset('public/frontend/assets/img/product/product-4.jpg') }}"
                                                        alt="">
                                                    <img class="sec-img" src="{{ asset('public/frontend/assets/img/product/product-2.jpg') }}"
                                                        alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                            data-bs-toggle="tooltip" title="Quick View"><i
                                                                class="ion-eye"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="deals-content">
                                                <div class="ratings">
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="product-details.html">Brown Summit
                                                        Backpack</a></h4>
                                                <p class="product-desc">Convenience is next to nothing when your day is
                                                    crammed with action.</p>
                                                <div class="price-box">
                                                    <span class="price-regular">$70.00</span>
                                                    <span class="price-old"><del>$75.00</del></span>
                                                </div>
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i>
                                                    Thêm vào giỏ hàng</a>
                                                <div class="product-countdown" data-countdown="2022/1/7"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- deals single item start -->
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <!-- deals area end -->

                <!-- banner statistics start -->
                <div class="banner-statistics-area pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="img-container">
                            <a href="#"><img src="{{ asset('public/frontend/assets/img/banner/img1_home.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistics end -->

        <!-- features categories area end -->

        <!-- features categories area start -->
        


                <!-- page main wrapper start -->
                <div class="shop-main-wrapper pt-50 pb-50">
                    <div class="container">
                        <div class="row">
                    <!-- shop main wrapper start -->
                    <div class="col-lg-12">
                        <div class="shop-product-wrapper">
                            <div class="shop-top-bar">
                            <div class="section-header">
                                <!-- section title start -->
                                <div class="section-title">
                                    <h4>Sản Phẩm</h4>
                                </div>
                                <!-- section title start -->

                                <!-- product tab menu start -->
                                <div class="feature-menu">
                                    <ul class="nav justify-content-start justify-content-lg-end">
                                        <li><a data-bs-toggle="tab" class="active" href="#four">Mua Nhiều</a>
                                        </li>
                                        <li><a data-bs-toggle="tab" href="#five">Đánh Giá Cao</a></li>
                                        <li><a data-bs-toggle="tab" href="#six">Được Yêu Thích</a></li>
                                    </ul>
                                </div>
                                <!-- product tab menu start -->
                            </div>
                                </div>
                                <!-- product item list start -->
                            <div class="shop-product-wrap grid-view row">
                                <!-- product single item start -->
                                 <!-- product item start -->@foreach($all_product as $key => $pro)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                   
                                    <!-- product grid start -->
                                        <div class="product-item">

                                        <form action="">
                                            @csrf
                                                            <input type="hidden" value="{{$pro->product_id}}" class="cart_product_id_{{$pro->product_id}}">
                                                            <input type="hidden" value="{{$pro->product_name}}" class="cart_product_name_{{$pro->product_id}}">
                                                            <input type="hidden" value="{{$pro->product_image}}" class="cart_product_image_{{$pro->product_id}}">
                                                            <input type="hidden" value="{{$pro->product_price}}" class="cart_product_price_{{$pro->product_id}}">
                                                            <input type="hidden" value="1" class="cart_product_qty_{{$pro->product_id}}">
                                                            <div class="product-thumb">
                                                                    <a href="{{URL::to('/shop/product-detail/'.$pro->product_id)}}">
                                                                    <img  src="{{URL::to('public/upload/product/'.$pro->product_image)}}" alt="">
                                                                    </a>
                                                                    
                                                                </div>
                                                                <div class="product-content">
                                                                    <h5 class="product-name">{{$pro->product_name}}</h5>
                                                                    <div class="price-box">
                                                                    <span class="price-regular">{{number_format($pro->product_price).' '.'VND'}}</span>
                                                                        <span class="price-old"><del>{{number_format($pro->product_price).' '.'VND'}}</del></span>
                                                                    </div>
                                                                    <button class="add-to-cart4" name="add-to-cart4" type="button" data-id_product="{{$pro->product_id}}">
                                                                        <div class="product-item-action">
                                                                            <a class="btn btn-cart" ><i class="ion-bag"></i> Thêm giỏ hàng</a>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                        </form>
                                        </div>

                                   
                                    <!-- product grid end -->

                                    <!-- product list item end -->
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-1.jpg" alt="">
                                            </a>
                                            <div class="add-to-links">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-eye"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="product-content-list">
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <h5 class="product-name"><a href="product-details.html">Private Selection Wild Caught</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                                quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam
                                                rem, accusantium adipisci officia eaque.</p>
                                            <div class="product-item-action">
                                                <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
                                </div>
                                @endforeach
                                <!-- product single item start -->

                                

                                

                                

                                

                                

                                
                                
                            </div>
                            <!-- product item list end -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- group list product area start -->
        <div class="group-list-products pt-50">
            <div class="container">
                <div class="row">
                    <!-- best sellers group start -->
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">Sản phẩm mới</h4>
                                <div class="slick-append"></div>
                            </div>
                            <div class="group-list-item-wrapper">
                                <div class="group-list-carousel">
                                    <!-- group list item start -->
                                      <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-1_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13 Pro Max | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">30.000.000 VND</span> <br>
                                                    <span class="price-old"><del>33.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                      <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-3_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">20.000.000 VND</span> <br>
                                                    <span class="price-old"><del>22.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-4_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13 Pro  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">25.000.000 VND</span> <br>
                                                    <span class="price-old"><del>27.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    {{--  <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    {{--  <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}
                                    <!-- group list item end -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- best sellers group end -->

                    <!-- new product group start -->
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">Sản phẩm được yêu thích</h4>
                                <div class="slick-append"></div>
                            </div>
                            <div class="group-list-item-wrapper">
                                <div class="group-list-carousel">
                                    <!-- group list item start -->
                                      <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-1_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13 Pro Max | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">30.000.000 VND</span> <br>
                                                    <span class="price-old"><del>33.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                      <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-3_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">20.000.000 VND</span> <br>
                                                    <span class="price-old"><del>22.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-4_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13 Pro  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">25.000.000 VND</span> <br>
                                                    <span class="price-old"><del>27.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    {{--  <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    {{--  <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                        Strive Shoulder Pack
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$50.00</span>
                                                    <span class="price-old"><del>$29.99</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}
                                    <!-- group list item end -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- new product group end -->

                    <!-- most view group start -->
                    <div class="col-lg-4">
                        <div class="group-list-wrapper">
                            <div class="group-list-header">
                                <h4 class="group-list-title">Được xem nhiều nhất</h4>
                                <div class="slick-append"></div>
                            </div>
                            <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-3_2_1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 13  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">20.000.000 VND</span> <br>
                                                    <span class="price-old"><del>22.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone-12-pro-max_1_.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 12 Pro Max  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">20.000.000 VND</span> <br>
                                                    <span class="price-old"><del>22.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{ asset('public/frontend/assets/img/product/iphone-12-pro-max_2_.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a href="product-details.html">
                                                iPhone 12  | Chính hãng VN/A
                                                    </a></h5>
                                                <div class="price-box">
                                                    <span class="price-regular">20.000.000 VND</span> <br>
                                                    <span class="price-old"><del>22.000.000 VND</del></span>
                                                </div>
                                                <div class="add-to-links group-action-link">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                    <a href="compare.html" data-bs-toggle="tooltip"
                                                        title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                            class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->

                                    <!-- group list item start -->

                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- most view group end -->

                    
                </div>
            </div>
        </div>
        <!-- group list product area end -->

        <!-- feature product area start -->
        <div class="feature-product-area pt-50 pb-50">
            <div class="container">
                <div class="feature-product-wrapper bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5 col-sm-7">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- feature product area end -->

        <!-- brand logo area start -->
        <div class="brand-logo-area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-slider">
                            <div class="brand-logo-carousel">
                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/apple1.jpg') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/samsung.webp') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/oppo.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/sony.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/google.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->

                                <!-- brand single item start -->
                                <div class="brand-item">
                                    <img src="{{ asset('public/frontend/assets/img/brand/nokia.png') }}" alt="">
                                </div>
                                <!-- brand single item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo area end -->

    </main>
    <!-- main wrapper end -->

    <!-- Quick view modal start -->

    <!-- Quick view modal end -->

@endsection
