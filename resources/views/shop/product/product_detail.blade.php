@extends('shop.layouts.app')
@section('title','Sản phẩm')
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
                        <h1>Chi Tiết Sản Phẩm</h1>    
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div class="shop-main-wrapper pt-50">
    <div class="container">
        <div class="row">
            <!-- product details wrapper start -->
            @foreach($product_detail as $key => $value)
            <div class="col-lg-12 order-1 order-lg-2">
                <!-- product details inner end -->
                
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <ul id="imageGallery">
                            @foreach($gallery as $key => $gal)
                                <li data-thumb="{{asset('public/upload/gallery/' .$gal->gallery_image)}}" 
                                data-src="{{asset('public/upload/gallery/' .$gal->gallery_image)}}">
                                    <img  width="100%" alt="{{$gal->gallery_name}}" src="{{asset('public/upload/gallery/' .$gal->gallery_image)}}" />
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-details-des">
                                <h5 class="product-name">{{$value->product_name}}</h5>
                                <div class="ratings">
                                    <span><i class="ion-android-star"></i></span>
                                    <span><i class="ion-android-star"></i></span>
                                    <span><i class="ion-android-star"></i></span>
                                    <span><i class="ion-android-star"></i></span>
                                    <span><i class="ion-android-star"></i></span>
                                    <div class="pro-review">
                                        <span>200 review(s)</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <span class="price-regular">{{number_format($value->product_price).' '.'VND'}}</span>
                                    <span class="price-old"><del></del></span>
                                </div>
                                <p>{!!$value->product_content!!}</p>
                                <div class="availability mt-10 mb-20">
                                    <i class="ion-checkmark-circled"></i>
                                    <span>Còn Hàng</span>
                                </div>

                                <form >
                                    {{ csrf_field() }}

                                    <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                                    <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                                    <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                                    <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$value->product_id}}">

                                <div class="quantity-cart-box d-flex align-items-center">
                                    <div class="quantity" name="qty" > 
                                        <div class="pro-qty"><input  type="number" value="1" class="cart_product_qty_{{$value->product_id}}" ></div>
                                    </div>
                                    <input type="hidden" name="productid_hidden" value="{{$value->product_id}}" />

                                    <a class="btn btn-cart" type="submit"><i class="ion-bag"></i>
                                    <button class="add-to-cart2" name="add-to-cart2" type="button" data-id_product="{{$value->product_id}}">Thêm Sản Phẩm</button></a>
      
                                </div>

                                </form>

                                <div class="pro-size mb-26 mt-26">
                                    <h5>Danh Mục: {{$value->category_name}}</h5> 
                                </div>
                                <div class="pro-size mb-26 mt-26">
                                    <h5>Thương Hiệu: {{$value->brand_name}} </h5>
                                </div>
                                <div class="color-option mb-26">
                                    <h5>Màu Sắc : {{$value->product_color}}</h5>
                                    
                                   
                                </div>
                                <div class="useful-links mt-28">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare"><i
                                            class="ion-ios-shuffle"></i>So Sánh</a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"><i
                                            class="ion-android-favorite-outline"></i>Yêu Thích</a>
                                </div>
                                <div class="like-icon mt-20">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                    <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                </div>
                                <div class="share-icon mt-18">
                                    <h5>Chia Sẻ :</h5>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- product details inner end -->

                <!-- product details reviews start -->
                <div class="product-details-reviews mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-review-info">
                                <ul class="nav review-tab">
                                    <li>
                                        <a class="active" data-bs-toggle="tab" href="#tab_one">Mô Tả Sản Phẩm</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#tab_two">Thông số kỹ thuật</a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#tab_three">Đánh Giá (1)</a>
                                    </li>
                                </ul>
                                <div class="tab-content reviews-tab">
                                    <div class="tab-pane fade show active" id="tab_one">
                                        <div class="tab-one">
                                        <p>{!!$value->product_desc!!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_two">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Màu Sắc</td>
                                                    <td>Trắng</td>
                                                </tr>
                                                <tr>
                                                    <td>Bộ Nhớ </td>
                                                    <td>256G</td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước màn hình </td>
                                                    <td>6.7 inches</td>
                                                </tr>
                                                <tr>
                                                    <td>Công nghệ màn hình</td>
                                                    <td>OLED</td>
                                                </tr>
                                                <tr>
                                                    <td>Camera sau</td>
                                                    <td>Camera góc rộng: 12MP, ƒ/1.5
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chipset</td>
                                                    <td>Apple A15</td>
                                                </tr>
                                                <tr>
                                                    <td>Dung lượng RAM</td>
                                                    <td>6 GB</td>
                                                </tr>
                                                <tr>
                                                    <td>Pin </td>
                                                    <td>4,325mAh</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab_three">
                                        <form action="#" class="review-form">
                                            <h5>1 đánh giá <span> N.trung</span></h5>
                                            <div class="total-reviews">
                                                <div class="rev-avatar">
                                                    <img src="assets/img/about/avatar.jpg" alt="">
                                                </div>
                                                <div class="review-box">
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </div>
                                                    <div class="post-author">
                                                        <p><span>ntrung -</span> 1 jan, 2022</p>
                                                    </div>
                                                    <p>máy mượt nhanh pin dùng 2 ngày mới hết. nhân viên hỗ trợ nhiệt tình </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span>
                                                        Tên Của Bạn</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span>
                                                        Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span>
                                                        Đáng Giá</label>
                                                    <textarea class="form-control" required></textarea>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span>
                                                        Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating" checked>
                                                    &nbsp;Good
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-success" type="submit">Gửi Đánh Giá</button>
                                            </div>
                                        </form> <!-- end of review-form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details reviews end -->
            </div>
            @endforeach
            <!-- product details wrapper end -->
        </div>
    </div>
</div>
<!-- page main wrapper end -->

<!-- Related product area start -->
<section class="related-products-area pt-50 pb-50">
    <div class="container">
        <div class="deals-wrapper bg-white">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-deals">
                        <div class="section-title-deals">
                            <h4>Sản Phẩm Liên Quan</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="most-viewed-carousel-2 slick-arrow-style">
                        <!-- product item start -->
                        @foreach($relate as $key => $related)
                        <div class="product-slide-item">
                            
                            <div class="product-item mb-0">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::to('public/upload/product/'.$related->product_image)}}" alt="">
                                    </a>
                                    <div class="add-to-links">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-eye"></i></span></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">{{$related->product_name}}</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">{{number_format($related->product_price).' '.'VND'}}</span>
                                    </div>
                                    <div class="product-item-action">
                                        <a class="btn btn-cart" href="cart.html"><i class="ion-bag"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- product item start -->@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related product area end -->

</main>
<!-- main wrapper end -->

@endsection