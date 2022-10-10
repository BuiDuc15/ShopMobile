<!-- Start Header Area -->
<header class="header-area">
    <!-- main header start -->
    <div class="lg-block">
        <!-- header top start -->
          <div class="header-top theme-color">
            <div class="container bdr-bottom">
                <div class="row align-items-center">
                        <div class="col-lg-6">
                                    <div class="header-top-settings">
                                        <ul class="nav align-items-center">
                                            <li class="language">
                                                <span>@lang('lang.languge')</span>
                                                <i class="fa fa-angle-down"></i>
                                                <ul class="dropdown-list">
                                                    <li><a href="{{'lang/vn'}}"><img style="height: 15px; width: 17px;" src="{{ asset('public/frontend/assets/img/icon/vietnam.png') }}" alt=""> Tiếng Việt</a></li>
                                                    <li><a href="{{'lang/en'}}"><img src="{{ asset('public/frontend/assets/img/icon/en.png') }}" alt=""> English</a></li>
                                                    <li><a href="#"><img src="{{ asset('public/frontend/assets/img/icon/fr.png') }}" alt=""> french</a></li>
                                                </ul>
                                            </li>
                                            <li class="curreny-wrap">
                                                <span>@lang('lang.Unit'): </span>
                                                VND
                                                <i class="fa fa-angle-down"></i>
                                                <ul class="dropdown-list curreny-list">
                                                    <li><a href="#">$ usd</a></li>
                                                    <li><a href="#"> € EURO</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                    <div class="col-lg-6">
                        <div class="header-links">
                            <ul class="nav justify-content-end">
                            <?php
                                $customer_id = Session::get('customer_id');
                               
                                if($customer_id!=NULL){
                                    ?>
                                       
                                    <li>
                                        <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> @lang('lang.Logout')</a><br>
                                       
                                    </li>
                                  <?php
                                }else{
                                   ?>
                                   <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> @lang('lang.Login')</a></li>
                                   <?php
                               }
                               ?>
                                <li><a href="{{URL::to('/my-account')}}"><i class="fa fa-user"></i> @lang('lang.Account')</a> 
                                

                                <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){
                                    ?>

                                    <li>
                                        <a href="{{URL::to('/history-order')}}"><i class="fa fa-history"></i> @lang('lang.Order History')</a> <br>
                                    </li>
                                  <?php
                                }else{
                                   ?>
                                   
                                   <?php
                               }
                               ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-middle-area theme-color">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start logo area -->
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('public/frontend/assets/img/logo/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- start search box area -->
                    <div class="col-lg-5">
                         <form class="search-box-inner" action="{{URL::to('/tim-kiem')}}" method="POST">
                             {{ csrf_field() }}
                             <div class="search-box-wrapper">
                                <input type="text" class="search-field" placeholder="@lang('lang.Find')" name="keywords_submit">
                                <button class="search-btn" name="search_items" value="Tìm Kiếm"><i class="ion-ios-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- start search box end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div class="header-configure-wrapper">
                            <div class="support-inner">
                                <div class="support-icon">
                                    <i class="ion-android-call"></i>
                                </div>
                                <div class="support-info">
                                    <p>@lang('lang.Call'):</p>
                                    <strong><a href="tel:+881234567899">0123456789</a></strong>
                                </div>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li>
                                        <a href="{{URL::to('/history')}}">
                                            <i class="ion-android-favorite-outline"></i>
                                            <span class="notify">0</span>
                                        </a>
                                    </li>
                                    
                                    <li class="mini-cart-wrap cart-hover">
                                        <a href= "{{route('cart')}}">
                                            <i class="ion-bag"></i>
                                            <span class="notify" id="show-cart"></span>
                                        </a>
                                        <span class="hover-cart"></span>
                                </li>
                             </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->
                </div>
            </div>
        </div>
        <!-- header middle area end -->

        <!-- main menu area start -->
        <div class="main-menu-area bg-white sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                <i class="ion-android-menu"></i>@lang('lang.category')</div>
                            <nav class="category-menu">
                                    <ul class="categories-list">
                                    @foreach($category as $key => $cate)
                                        @if($cate->category_parent == 0)
                                        <li class="menu-item-has-children"><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a>
                                        
                                        

                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown">
                                            @foreach($category as $key => $cate_sub)
                                                 @if($cate_sub->category_parent==$cate->category_id)
                                                    <li class="menu-item-has-children">
                                                        <a href="{{URL::to('/danh-muc/'.$cate_sub->slug_category_product)}}">{{$cate_sub->category_name}}</a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop.html">Samsome</a></li>
                                                            <li><a href="shop.html">Samsome</a></li>
                                                            <li><a href="shop.html">Samsome</a></li>
                                                            <li><a href="shop.html">GL Stylus</a></li>
                                                            <li><a href="shop.html">Uawei</a></li>
                                                            <li><a href="shop.html">Cherry Berry</a></li>
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                            </ul><!-- Mega Category Menu End -->
                                        
                                        </li>
                                        @endif
                                    @endforeach    
                                    </ul>


                                    
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="main-menu main-menu-style-1">
                            <!-- main menu navbar start -->
                            <nav class="desktop-menu">
                                <ul>
                                    <li class="active"><a href="{{ route('home') }}">@lang('lang.home')</a>
                                    </li>
                                    <li><a href="{{route('san-pham')}}">@lang('lang.product')</a>
                                    </li>
                                    <li><a href="{{ URL::to('/bai-viet') }}">@lang('lang.post')</a>
                                    </li>
                                    <li><a href="{{ route('page.index') }}">@lang('lang.about') </a>
                                    </li>
                                    <li><a href="{{ route('lien-he') }}">@lang('lang.contact')</a></li>
                                </ul>
                            </nav>
                            <!-- main menu navbar end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu area end -->
    </div>
    <!-- main header start -->
    </header>
