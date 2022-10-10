@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Danh Mục Sản Phẩm
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
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="category_product_name"  id="slug" placeholder="danh mục" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="slug_category_product" class="form-control" id="convert_slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea class="form-control" name="category_product_desc" id="" cols="30" rows="10" placeholder="Mô Tả Danh Mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc danh mục</label>
                                      <select name="category_parent" class="form-control input-sm m-bot15">
                                        <option value="0">---Danh mục cha---</option>
                                        @foreach($category as $key => $val)
                                           <option value="{{$val->category_id}}">{{$val->category_name}}</option>
                                        @endforeach
                                            
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Hiển Thị</label>
                                    <select name="category_product_status" id="">
                                        <option value="1">Ẩn</option>
                                        <option value="0">Hiển Thị</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
