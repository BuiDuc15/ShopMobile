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
                        <h1>Sản phẩm</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div class="shop-main-wrapper pt-50 pb-50">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="sidebar-wrapper">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Danh Mục Sản Phẩm</h3>
                        </div>
                        <div class="sidebar-body">
                            <!-- mobile menu navigation start -->
                            <div class="shop-categories">
                                @foreach($category as $key => $cate)
                                <nav>
                                    @if($cate->category_parent == 0)
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="#">{{$cate->category_name}}</a>
                                            <ul class="dropdown" id="{{$cate->slug_category_product}}">
                                                @foreach($category as $key => $cate_sub)
                                                @if($cate_sub->category_parent==$cate->category_id)
                                                     <li><a href="{{URL::to('/danh-muc/'.$cate_sub->category_id)}}">{{$cate_sub->category_name}}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                    @endif
                                </nav>
                                @endforeach
                            </div>
                            <!-- mobile menu navigation end -->
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Khoảng giá</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="radio-container">
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck11">
                                        <label class="custom-control-label" for="customCheck11">2.000.000 - 4.000.000 VNĐ</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck21">
                                        <label class="custom-control-label" for="customCheck21">4.000.000 - 6.000.000 VNĐ</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck31">
                                        <label class="custom-control-label" for="customCheck31">6.000.000 - 8.000.000 VNĐ</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck41">
                                        <label class="custom-control-label" for="customCheck41"> 8.000.000 - 10.000.000 VNĐ</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="price" id="customCheck51">
                                        <label class="custom-control-label" for="customCheck51">10.000.000 - 30.000.000 VNĐ</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Thương Hiệu</h3>
                        </div>
                        <div class="sidebar-body">
                        @foreach($brand as $key => $brand)
                            <ul class="checkbox-container">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">{{$brand->brand_name}}</label>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Dung lượng RAM</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="checkbox-container">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck111">
                                        <label class="custom-control-label" for="customCheck111">Dưới 4GB</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck222">
                                        <label class="custom-control-label" for="customCheck222">4GB - 6GB</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck333">
                                        <label class="custom-control-label" for="customCheck333">8GB - 12GB</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck444">
                                        <label class="custom-control-label" for="customCheck444">12GB trở lên</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Bộ nhớ trong</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="checkbox-container">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck111">
                                        <label class="custom-control-label" for="customCheck111">Dưới 32GB</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck222">
                                        <label class="custom-control-label" for="customCheck222">32GB - 64GB</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck333">
                                        <label class="custom-control-label" for="customCheck333">128GB - 256GB</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck444">
                                        <label class="custom-control-label" for="customCheck444">512GB trở lên</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    {{--  <div class="sidebar-banner">
                        <div class="img-container">
                            <a href="#">
                                <img src="{{ asset('public/frontend/assets/img/banner/sidebar-banner.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>  --}}
                    <!-- single sidebar end -->
                </aside>
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>Có 1–16 sản phẩm</p>
                                    </div>
                                </div>
                            </div>
                            {{--  <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list start -->
                    <div class="shop-product-wrap grid-view row">
                        <!-- product single item start -->
                        @foreach($all_product as $key => $pro)
                        <div class="col-md-4 col-sm-6">

                            <!-- product grid start -->
                            <div class="product-item">

                                <form>
                                    @csrf
                                    <input type="hidden" value="{{$pro->product_id}}" class="cart_product_id_{{$pro->product_id}}">
                                    <input type="hidden" value="{{$pro->product_name}}" class="cart_product_name_{{$pro->product_id}}">
                                    <input type="hidden" value="{{$pro->product_image}}" class="cart_product_image_{{$pro->product_id}}">
                                    <input type="hidden" value="{{$pro->product_price}}" class="cart_product_price_{{$pro->product_id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$pro->product_id}}">

                                <div class="product-thumb">
                                    <a href="{{URL::to('/shop/product-detail/'.$pro->product_id)}}">
                                        <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" alt="">
                                    {{--  <div class="add-to-links">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="compare.html" data-bs-toggle="tooltip" title="Add to Compare"><i class="ion-stats-bars"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-eye"></i></span></a>
                                    </div>  --}}
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a>{{$pro->product_name}}</a></h5>
                                    <div class="price-box">
                                        <span class="price-regular">{{number_format($pro->product_price).' '.'VND'}}</span>
                                    </div>
                                    </a>
                                    <button class="add-to-cart" name="add-to-cart" type="button" data-id_product="{{$pro->product_id}}">
                                    <div class="product-item-action">
                                        <a class="btn btn-cart" ><i class="ion-bag"></i> Thêm giỏ hàng</a>
                                    </div>
                                    </button>
                                </div>

                                </form>
                            </div>

                            <!-- product grid end -->
                        </div>
                        @endforeach
                        <!-- product single item start -->
                    </div>
                    <!-- product item list end -->

                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center">
                        <ul class="pagination-box">
                            <li><a class="previous" href="#">Trước</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#">Sau</a></li>
                        </ul>
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
</div>
<!-- page main wrapper end -->

</main>
<!-- main wrapper end -->
@endsection
