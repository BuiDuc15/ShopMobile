@extends('shop.layouts.app')
@section('title','Shipping')
@section('content')




<style>
	:root{
		--body:#8c9eff;
		--cont:#eceff1;
		--line:#651fff;
		--txt:#007bfd;
		--light:#c5cae9;
	}
	.details{
		display: flex;
		gap: 1em;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.order h1{
		text-transform: uppercase;

	}
	.order span{
		color: var(--txt);
	}
	.date p{
		font-size: 1.1rem;
	}
	.track{
		margin: 4em 0 8em;
	}
	#progress{
		list-style: none;
		display: flex;
		flex-wrap: wrap;
		justify-content:  space-between;
		align-items: center;
		gap: 1em;
		position: relative;
		text-align: center;
	}
	#progress li{
		width: 20%;
		position: relative;
	}
	#progress li::before{
		content: '\2713';
		position: absolute;
		display: flex;
		justify-content: center;
		width: 50px;
		align-items: center;
		font-size: 2rem;
		height: 50px;
		background: var(--line);
		color: #fff;
		border-radius: 50%;
		z-index: 11111;
	}
	
	#progress::before{
		content: '';
		position: absolute;
		top: 20px;
		width: 80%;
		margin-left: 35px;
		height: 10px;
		background: var(--line);
		z-index: 111;
	}
	#progress::after{
		content: '';
		position: absolute;
		top: 20px;
		width: 80%;
		height: 10px;
		background: #c5cae9;

	}
	.lists{
		display: flex;
		gap: 5em;
		flex-wrap: wrap;
		align-items: center;
	}
	.list{
		display: flex;
		gap: 1em;
		flex: 1 1 50px;
	}
	.list{
		font-size: 1rem;
	}
	.list img{
		margin-top: 10px;
		width: 60px;
		height: 60px;
	}

</style>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h1>Đơn Vận Chuyển</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vận Chuyển Đơn Hàng</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="body-bg">
<section class="related-products-area pt-50 pb-50">
<div class="deals-wrapper bg-white">
	<div class="container">
		<div class="details">
			<div class="order">
				<h1>Khách Hàng: <span>Trung</span></h1>
			</div>
			<div class="date">
				<p>Ngày Giao Hàng 20/11/2021</p>
				<p> Mã Đơn Hàng: <b>03021999</b></p>
			</div>
		</div>	
			<div class="track">
				<ul id="progress" class="text-center">
					<li class="active"></li>
					<li class="active"></li>
					<li class=""></li>
					<li class=""></li>
				</ul>
			</div>

			<div class="lists">
				<div class="list">
					<img src="{{ asset('public/frontend/assets/img/progress/order.jpg') }}" alt="">
					<p>Order <br>Xác nhận </p>
				</div>
				<div class="list">
					<img src="{{ asset('public/frontend/assets/img/progress/wait.png') }}" alt="">
					<p>Order <br>Đợi lấy hàng</p>
				</div>
				<div class="list">
					<img src="{{ asset('public/frontend/assets/img/progress/shipping.jpg') }}" alt="">
					<p>Order <br>Đang giao hàng</p>
				</div>
				<div class="list">
					<img src="{{ asset('public/frontend/assets/img/progress/home2.png') }}" alt="">
					<p>Order <br>Đã giao hàng</p>
				</div>
			</div>
		
	</div>
</div>
</section>
</main>
@endsection