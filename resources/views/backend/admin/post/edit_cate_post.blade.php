@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Danh Mục Bài Viết
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
                                <form role="form" action="{{URL::to('/update-cate-post/'.$cate_post->cate_post_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" value="{{$cate_post->cate_post_name}}" name="cate_post_name" class="form-control"   onkeyup="ChangeToSlug();"  id="slug" placeholder="Tên Bài Viết">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" value="{{$cate_post->cate_post_slug}}" name="cate_post_slug" class="form-control" id="convert_slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea class="form-control"  name="cate_post_desc" id="" cols="30" rows="10" placeholder="Mô Tả Thương Hiệu">{{$cate_post->cate_post_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Hiển Thị</label>
                                    <select name="cate_post_status" id="">
                                        @if($cate_post->cate_post_status==0)
                                        <option selected value="0">Hiển Thị</option>
                                        <option value="1">Ẩn</option>  
                                        @else($cate_post->cate_post_status==1) 
                                        <option value="0">Hiển Thị</option>
                                        <option selected value="1">Ẩn</option>  
                                        @endif
                                    </select>
                                </div>
                                <button type="submit" name="update_post_cate" class="btn btn-info">Update</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
