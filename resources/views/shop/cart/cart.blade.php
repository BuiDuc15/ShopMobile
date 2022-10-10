@extends('shop.layouts.app')
@section('title','cart')
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
                                <h1>Giỏ Hàng</h1>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        
        <div class="cart-main-wrapper pt-50 pb-50">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                         @if(session()->has('message'))
                            <div class="alert alert-succes">
                                {{session()->get('message')}}
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        <form action="{{url('/update-cart')}}" method="POST">
                            @csrf
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Hình Ảnh</th>
                                            <th class="pro-title">Tên Sản Phẩm</th>
                                            <th class="pro-price">Giá Sản Phẩm</th>
                                            <th class="pro-quantity">Số Lượng</th>
                                            <th class="pro-subtotal">Tổng Tiền</th>
                                            <th class="pro-remove">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @if(Session::get('cart'))
                                    <?php
                                        $total = 0;
                                        
                                   
                                     ?>

                                     @foreach(Session::get('cart') as $key => $val)
                                     
                                     <?php
                                        
                                        $subtotal = $val['product_price']*$val['product_qty'];
                                        $total+=$subtotal;
                                     ?>
                                        <tr>
                                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{asset('public/upload/product/'.$val['product_image'])}}" alt="Product" /></a></td>
                                                <td class="pro-title"><a href="#">{{$val['product_name']}}</a></td>
                                                <td class="pro-price"><span>{{number_format($val['product_price'],0,',','.')}} đ</span></td>

                                                <td class="pro-quantity" >

                                                    <div class="pro-qty">
                                                        <input type="number" value="{{$val['product_qty']}}" min="1" name="cart_qty[{{$val['session_id']}}]">
                                                    </div>    
                                                    
                                                        
                                                </td> 
                                                <td class="pro-subtotal"><span>{{number_format($subtotal,0,',','.')}} đ</span></td>

                                                <td class="pro-remove"><a href="{{url('/del-product/'.$val['session_id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                   @endforeach
                                   <tr>
                                       <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Tổng Tiền:</td>
                                                <td><span>{{number_format($total,0,',','.')}} đ</span></td>
                                            </tr>
                                            @if(Session::get('coupon'))
                                            
                                            <td>Mã giảm:</td>
                                                <td>
                                                    
                                                        @foreach(Session::get('coupon') as $key => $cou)
                                                            @if($cou['coupon_condition']==0)
                                                                {{$cou['coupon_number']}} %
                                                                

                                                                <?php
                                                                    $total_coupon = ($total*$cou['coupon_number'])/100;
                                                                ?>

                                                                 <td>Tổng Thanh Toán:</td>  
                                                                <td class="total-amount"><span>{{number_format($total-$total_coupon,0,',','.')}} đ</span></td>
                                                              

                                                            @elseif($cou['coupon_condition']==1)
                                                            
                                                                {{number_format($cou['coupon_number'],0,',','.')}} đ;
                                                                

                                                                 <td>Tổng Thanh Toán:</td>  
                                                                <td class="total-amount"><span>{{number_format($total-$cou['coupon_number'],0,',','.')}} đ</span></td>
                                                              @endif  
                                                        @endforeach


                                                 </td> 
                                                
                                                            
                                                
                                                @endif
                                            </tr>
                                            
                                            <tr class="total">
                                            </tr>
                                        </table>
                                     </div>
                                   </tr>
                                    <tr>
                                         <!-- Xoa Gio Hang -->
                                         <!-- Cart Update Option -->
                                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                                <div class="cart-update">
                                                    <input type="submit" value="Cập Nhập" name="update_qty" style="width: 150px;" class="btn btn__bg">  
                                                </div>
                                                <div class="cart-update">
                                                     <a class="btn btn__bg" href="{{URL::to('/del-all-product')}}"  style="color:blanchedalmond">Xóa Giỏ Hàng</a>
                                                 </div>
                                            </div>
                                        
                                    </tr>
                                        
                                        @else
                                        <tr>
                                            <td colspan="5"><center>
                                                @php
                                                     echo 'Hãy Thêm Sản Phẩm Vào Giỏ Hàng Của Bạn';
                                                @endphp
                                            </center>
                                            </td>
                                            
                                        </tr>
                                        @endif
                                        <tr>
                                            @if(Session::get('coupon'))
                                                 <a class="btn btn btn__bg check_out" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
                                            @endif
                                        </tr>
                                            
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                            <!-- Ma Giam Gia -->
                                <div class="apply-coupon-wrapper">
                                    <form action="{{URL::to('/check-coupon')}}" method="POST" >
                                        {{ csrf_field()}}
                                        <input type="text" name="coupon" />
                                        <button class="btn btn__bg btn__sqr" >Thêm Mã Giảm Giá</button>
                                    </form>
                                </div>
                                
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                

                                <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){ 
                                    ?>                               
                                    <a href="{{URL::to('/checkout')}}" class="btn btn__bg d-block">Đi Đến Thanh Toán</a>
                                    <?php
                                }else{
                                   ?>
                                   <a href="{{URL::to('/login-checkout')}}" class="btn btn__bg d-block">Đi Đến Thanh Toán</a>
                                   <?php 
                               }
                               ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->

    </main>
    <!-- main wrapper end -->

@endsection