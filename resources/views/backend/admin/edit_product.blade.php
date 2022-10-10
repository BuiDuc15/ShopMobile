@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa Sản Phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">

                            @foreach($edit_product as $key => $pro)

                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên San Pham</label>
                                    <input type="text" name="product_name" onkeyup="ChangeToSlug();" id="slug" class="form-control"  value="{{$pro->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Lượng</label>
                                    <input type="text" name="product_quantity" class="form-control"  value="{{$pro->product_quantity}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="product_slug" id="convert_slug" class="form-control" id="exampleInputEmail1" value="{{$pro->product_slug}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thêm Giá</label>
                                    <input type="text" name="product_price" class="form-control" value="{{$pro->product_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thêm Color</label>
                                    <input type="text" name="product_color" class="form-control" value="{{$pro->product_color}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                                    <input type="file" name="product_image" class="form-control" rows="8">
                                    <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" height="100" width="100" style="margin-top: 10px;" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                                    <textarea class="form-control" name="product_desc" id="ckeditor2" cols="30" rows="10"  value="">{{$pro->product_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                                    <textarea class="form-control" name="product_content" id="ckeditor3" cols="30" rows="10" >{{$pro->product_content}}</textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            @if($cate->category_parent==0)
                                                <option style="font-size: 15px" value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                                @foreach($cate_product as $key => $cate_sub)
                                                    @if($cate_sub->category_parent!=0 && $cate_sub->category_parent==$cate->category_id)
                                                    <option style="color: red;font-size: 15px" value="{{$cate_sub->category_id}}">---{{$cate_sub->category_name}}</option>   
                                                    @endif
                                                @endforeach

                                            @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Thuong Hieu</label>
                                    <select name="product_brand" id="">
                                        @foreach($brand_product as $key => $brand)
                                        @if($brand->brand_id == $pro->brand_id)
                                        <option selected value="{{$brand->brand_id}}">{{ $brand->brand_name}}</option>
                                        @else
                                        <option  value="{{$brand->brand_id}}">{{ $brand->brand_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Hiển Thị</label>
                                    <select name="product_status" id="">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
                            </form>

                            @endforeach
                            </div>


                        </div>
                    </section>

            </div>
@endsection
