
@extends('shop.layouts.app')
@section('title','Login-checkout')
@section('content')

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper">
            <div class="container">
                <div class="section-bg-color mb-50">
                    <div class="row">
                        <div class="col-12">
                        <h2>Thanh Toán </h2>
                        </div>
                    </div>
                </div>

                <div class="section-bg-color">
                    <div class="row">
                        <!-- Checkout Billing Details -->
                        <div class="col-lg-6">
                            <div class="checkout-billing-details-wrap">
                                <h2>Điền Thông Tin Gửi Hàng</h2>
                                <div class="billing-form-wrap">
                                    <form  method="POST">
                                        {{ csrf_field() }}

                                     
                                    
                                    

                                        <div class="row">
                                            <div class="single-input-item">
                                                <div class="single-input-item">
                                                    <label for="f_name" class="required">Họ Tên</label>
                                                    <input type="text" name="shipping_name" class="shipping_name" placeholder="Điền Họ Tên" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-input-item">
                                            <label for="email" class="required">Email</label>
                                            <input type="email" name="shipping_email" class="shipping_email" placeholder="Email Address" required />
                                        </div>

                                        <div class="single-input-item">
                                            <label for="com-name">Địa Chỉ</label>
                                            <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa Chỉ" />
                                        </div>

                                        

                                        <div class="single-input-item">
                                            <label for="phone">Số Điện Thoại</label>
                                            <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Phone" />
                                        </div>

                                        
                                        <div class="single-input-item">
                                            <label for="ordernote">Yêu Cầu Của Khách Hàng</label>
                                            <textarea name="shipping_note" class="shipping_note" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                        @if(Session::get('coupon'))
                                            @foreach(Session::get('coupon') as $key => $cou)
                                        <input type="hidden" value="{{$cou['coupon_code']}}" name="order_coupon" class="order_coupon">
                                            @endforeach
                                         @else   
                                         <input type="hidden" value="no" name="order_coupon" class="order_coupon">
                                         @endif
                                        
                                            
                                        <div class="single-input-item">
                                            <label  class="required">Hình Thức Thanh Toán</label>
                                            <select name="payment_select" class="payment_select">
                                                <option value="0">Tiền Mặt</option>
                                                <option value="1">Chuyển Khoản</option>
                                                
                                            </select>
                                        </div>
                                        

                                       

                                          <input type="button" name="send_order" value="Xác nhận thanh toán" class="btn btn-primary btn-sm send_order" style="margin-top: 30px;">
                                            
                                       

                                        
                                    </form>
                                         
                                </div>
                            </div>
                        </div>

                        <!-- Order Summary Details -->
                        <div class="col-lg-6">
                            <div class="order-summary-details">
                                <h2>Tổng Đơn Hàng</h2>

                                <form action="{{url('/update-cart')}}" method="POST">
                                @csrf
                                <div class="order-summary-content">
                                    <!-- Order Summary Table -->
                                    <div class="order-summary-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sản Phẩm</th>
                                                    <th>Thành Tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $total = 0;
                                        
                                            ?>
                                            @foreach(Session::get('cart') as $key => $val)
                                            <?php
                                        
                                            $subtotal = $val['product_price']*$val['product_qty'];
                                            $total+=$subtotal;
                                            ?>
                                                <tr>
                                                    <td>{{$val['product_name']}} <strong > x{{$val['product_qty']}}</strong></td>
                                                    
                                                    <td>{{number_format($subtotal,0,',','.')}} đ</td>
                                                </tr>
                                                   
                                            </tbody>
                                            
                                             @endforeach        
                                             
                                             @if(Session::get('coupon'))
                                            
                                             <tr>
                                                 <td>Mã giảm</td>
                                                <td>
                                                    
                                                        @foreach(Session::get('coupon') as $key => $cou)
                                                            @if($cou['coupon_condition']==0)
                                                                {{$cou['coupon_number']}} %
                                                                

                                                                <?php
                                                                    $total_coupon = ($total*$cou['coupon_number'])/100;
                                                                ?>
                                                </td>
                                             </tr>
                                            
                                                <tr>
                                                     <td>Total</td>  
                                                   <td class="total-amount"><span>{{number_format($total-$total_coupon,0,',','.')}} đ</span></td>
                                                </tr>
                                                 
                                                              
                                                        <td>
                                                            @elseif($cou['coupon_condition']==1)
                                                            
                                                                {{number_format($cou['coupon_number'],0,',','.')}} đ
                                                        </td>
                                                            
                                                                
                                                        <tr>
                                                            <td>Total</td>  
                                                                <td class="total-amount"><span>{{number_format($total-$cou['coupon_number'],0,',','.')}} đ</span></
                                                        </tr>
                                                                 
                                                              @endif  
                                                        @endforeach

                                                @endif
                                               
                            
                                                
                                        </table>
                                        
                                        
                                    </div>
                                    
                                </div>

                               
                            </div> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout main wrapper end -->

@endsection