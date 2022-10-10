@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Mã Giảm Giá
                        </header>
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null) ;
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-coupon')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Mã Giảm Giá</label>
                                    <input type="text" name="coupon_name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mã Giảm Giá</label>
                                    <textarea class="form-control" name="coupon_code"  ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số Lượng MÃ</label>
                                    <input class="form-control" name="coupon_times" id="" cols="30" rows="10" >
                                </div>

                                <div class="form-group">
                                    <label for="">Tính Năng Mã</label>
                                    <select name="coupon_condition" id="">
                                        <option value="0">Giảm Theo %</option>
                                        <option value="1">Giảm Theo Tiền</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nhập số tiền hoặc số %</label>
                                    <input class="form-control" name="coupon_number" id="" cols="30" rows="10" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày bắt đầu </label>
                                    <input type="text" name="coupon_date_start" class="form-control" id="start_coupon">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Kết Thúc</label>
                                    <input type="text" name="coupon_date_end" class="form-control"  id="end_coupon">
                                </div>

                                <button type="submit" name="add_coupon" class="btn btn-info">Thêm Mã</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
