@extends('shop.layouts.app')
@section('title', 'Bài viết chi tiết')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h1>Bài viết chi tiết</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="blog-left-sidebar.html">Bài viết</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bài viết chi tiết</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog main wrapper start -->
    <div class="blog-main-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="blog-sidebar-wrapper">
                        <div class="blog-sidebar">
                            <h4 class="title">Tìm kiếm</h4>
                            <div class="sidebar-serch-form">
                                <form action="#">
                                    <input type="text" class="search-field" placeholder="Nhập từ khóa ...">
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h4 class="title">Chủ đề</h4>
                            @foreach($cate_post as $key => $post)
                            <ul class="blog-archive blog-category">
                                <li><a href="{{URL::to('/danh-muc/' .$post->cate_post_slug)}}">{{$post->cate_post_name}}</a></li><br>
                            </ul>
                            @endforeach
                        </div>
                        <!-- single sidebar end -->

                        <div class="blog-sidebar">
                            <h4 class="title">Bài viết gần đây </h4>
                            <div class="recent-post">
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/iphone-13mini-1020x570 (1).jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-6.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-7.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- single sidebar end -->

                        <div class="blog-sidebar">
                            <h4 class="title">Bài viết liên quan </h4>
                            <div class="recent-post">
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-6.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="product-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('public/frontend/assets/img/blog/blog-large-7.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-description">
                                        <div class="product-name">
                                            <h4><a href="blog-details.html">Tên bài viết</a></h4>
                                            <p>Ngày tháng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- single sidebar end -->

                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- blog single item start -->
                    <div class="blog-post-item blog-grid section-bg-color">
                        <div class="blog-post-thumb">
                            <div class="blog-carousel-active slick-arrow-style slick-dot-style">
                                <div class="blog-single-slide">
                                    <img src="{{ asset('public/frontend/assets/img/blog/gaming_startframe__dl65keesyd8i_large.jpg') }}" alt="">
                                </div>
                                <div class="blog-single-slide">
                                    <img src="{{ asset('public/frontend/assets/img/blog/iPhone-13-Pink-Sforum-10.webp') }}" alt="">
                                </div>
                                <div class="blog-single-slide">
                                    <img src="{{ asset('public/frontend/assets/img/blog/blog-details-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="post-info-wrapper">
                            <div class="entry-header">
                              
                                <div class="post-meta blog-details-title">
                                    <h2 class="entry-title">Tiêu đề bài viết</h2>
                                    <div class="post-meta-small">
                                        <div class="post-author">
                                            Tác giả: <a href="#">Admin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-summary mb-0">
                                <p> Nội dung bài viết !</p>


                            </div>
                        </div>
                    </div>
                    <!-- blog single item end -->


                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->
@endsection
