@extends('shop.layouts.app')
@section('title','Lịch Sử Đơn Hàng')
@section('content')

<main class="body-bg">
        <div class="shop-main-wrapper pt-50 pb-50">


        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Lịch Sử Đơn Hàng</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Lịch sử đơn hàng</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="table-agile-info">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div class="panel panel-default">
                                <div class="table-responsive">
                                                    <?php
                                                        $message = Session::get('message');
                                                        if ($message) {
                                                            echo '<span class="text-alert">'.$message.'</span>';
                                                            Session::put('message',null) ;
                                                        }
                                                    ?>
                               
                               <div class="myaccount-content">
                                                    
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th >
                                                                    Thứ Tự
                                                                    </th>
                                                                    <th>Mã Đơn Hàng</th>
                                                                    <th>Tên Sản Phẩm</th>
                                                                    <th>Hình Ảnh</th>
                                                                    <th>Giá</th>
                                                                    <th>Tình Trạng Đơn Hàng</th>
                                                                    <th>Ngày Đặt Hàng</th>
                                                                    <th style="width:30px;"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $i= 0;
                                                                ?>
                                                                
                                                                @foreach($getorder as $key => $ord)
                                                                <?php
                                                                    $i++;
                                                                ?>
                                                            <tr>
                                                                <td><i>{{$i}}</i></td>
                                                                <td>
                                                                    {{$ord->order_code}}
                                                                </td>
                                                                <td>IPHONE 13 Pro Max</td>
                                                                <td><img width="50px" height="50px" src="{{ asset('public/frontend/assets/img/product/iphone_13-_pro-1_2_1.jpg') }}" alt=""></td>
                                                                <td>30.000.000 VND</td>
                                                                <td>
                                                                    @if($ord->order_status==1)
                                                                    Đang Xử Lý Đơn Hàng
                                                                    @else
                                                                    Đã Xử Lý
                                                                    @endif
                                                                </td>
                                                                <td>{{$ord->created_at}}</td>
                                                                <td>
                                                                @if($ord->order_status==1)
                                                                <a href="{{URL::to('/history')}}" class="btn btn__bg" style="font-size: 15px;" >
                                                                  Xem  </a>
                                                                @else
                                                                <a href="{{URL::to('/history2')}}" class="btn btn__bg" style="font-size: 15px;" ui-toggle-class="">
                                                                    Xem</i></a>
                                                                @endif
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                
                                
                                </div>
                                
                                </div>
                            </div>
                </div>
        </div>
</div>

</div>

</div>

</main>

</main>


@endsection
