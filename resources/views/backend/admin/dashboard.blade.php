@extends('backend.admin_layout')
@section('admin_content')





<div class="container-fluid">

<style type="text/css">
				p.title_thongke {
				    text-align: center;
				    font-size: 20px;
				    font-weight: bold;
				}
			</style>
<div class="row">
		<p class="title_thongke">Thống kê đơn hàng doanh số</p>

		<form autocomplete="off">
			@csrf

			<div class="col-md-2">
				<p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>

				<input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>

			</div>

			<div class="col-md-2">
				<p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
			
			</div>

			<div class="col-md-2">
				<p>
					Lọc theo: 
					<select class="dashboard-filter form-control" >
						<option>--Chọn--</option>
						
						<option value="7ngay">7 ngày qua</option>
						<option value="thangtruoc">tháng trước</option>
						<option value="thangnay">tháng này</option>
						<option value="365ngayqua">365 ngày qua</option>
					</select>
				</p>
			</div>

		</form>

		<div class="col-md-12">
			<div id="chart" style="height: 250px;"></div>
		</div>

</div>


</div>

<div class="row">
	<style type="text/css">
		table.table.table-bordered.table-dark {
		    background: #32383e;
		}
		table.table.table-bordered.table-dark tr th {
		    color: #fff;
		}
	</style>

<p class="title_thongke">Thống kê truy cập</p>

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Đang online</th>
      <th scope="col">Tổng tháng trước</th>
      <th scope="col">Tổng tháng này</th>
      <th scope="col">Tổng một năm</th>
      <th scope="col">Tổng truy cập</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>5</td>
      <td>242</td>
      <td>521</td>
      <td>15.000</td>
      <td>53.102</td>
    </tr>
   
  </tbody>
</table>

</div>

<div class="row">

	<div class="col-md-4 col-xs-12">
		<p class="title_thongke">Thống kê tổng sản phẩm bài viết đơn hàng</p>
		<div id="donut"></div>	
	</div>

	<!--------------------------->

	<div class="col-md-4 col-xs-12">
		<h3>Bài viết xem nhiều</h3>

		<ol class="list_views">
			<li>
				<a target="_blank" href=""> Đây là 6 sản phẩm tốt nhất được Apple ra mắt trong năm 2021 <span style="color:black"></span></a>
			</li>
			<li>
				<a target="_blank" href=""> Đánh giá Xiaomi 12 Pro: Snapdragon 8 Gen 1 hiệu năng cực khủng, sạc 120W siêu nhanh và còn gì nữa? <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> Kỳ vọng gì ở Samsung trong năm 2022: Mang dòng Note trở lại, nhiều mẫu máy tính bảng, bỏ quảng cáo… <span style="color:black"></span></a>
			</li>
            
            <li>
				<a target="_blank" href=""> Mua quà tết cho gia đình thời 4.0 nên chọn những sản phẩm nào? <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> Cập nhật giá iPhone VN/A trước Tết 2022 tại CellphoneS, iPhone 12 và iPhone 11 đã có giá hấp dẫn hơn <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> Kỳ vọng gì ở Samsung trong năm 2022: Mang dòng Note trở lại, nhiều mẫu máy tính bảng, bỏ quảng cáo… <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> Galaxy S21 FE – Chiếc smartphone đáng mong chờ nhất của hội fandom <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> RAM DDR5 – Tiêu chuẩn bộ nhớ mới cho năm 2022 có gì đặc biệt mà giá đắt gấp 3, 4 lần DDR4? <span style="color:black"></span></a>
			</li>
            
			
		</ol>
		
	</div>

	<div class="col-md-4 col-xs-12">
		<style type="text/css">
			ol.list_views {
			    margin: 10px 0;
			    color: #fff;
			}
			ol.list_views a {
			    color: orange;
			    font-weight: 400;
			}
		</style>
		<h3>Sản phẩm xem nhiều</h3>

		<ol class="list_views">
			
			<li>
				<a target="_blank" href="">iPhone 13 Pro Max 256GB I Chính hãng VN/A <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> iPhone 13 Pro 128GB | Chính hãng VN/A <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href="">iPhone 13 mini 128GB | Chính hãng VN/A <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> iPhone 13 Pro Max 1TB I Chính hãng VN/A<span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href=""> iPhone 12 Pro Max 512GB I Chính hãng VN/A<span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href="">iPhone 12 Pro Max 256GB I Chính hãng VN/A <span style="color:black"></span></a>
			</li>
            <li>
				<a target="_blank" href="">iPhone 12 Pro Max 128GB I Chính hãng VN/A <span style="color:black"></span></a>
			</li>
			
		</ol>

	</div>
</div>



@endsection

