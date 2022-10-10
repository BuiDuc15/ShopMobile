@extends('backend.admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Bài Viết
                        </header>
                        <div class="row w3-res-tb">
      
                        <div class="col-sm-4">
                            <a href="{{URL::to('/all-post')}}"><button class="btn btn-success">Tất Cả Bài Viết</button></a>
                        </div>
                        
                        </div>
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null) ;
                            }
                        ?>
                        
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-post')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Bài Viết</label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="post_title"  id="slug" placeholder="tên bài viết" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Tác Giả</label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="post_author"  id="slug" placeholder="tên bài viết" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Bài Viết</label>
                                    <textarea class="form-control" name="post_desc" id="ckeditor1" cols="30" rows="10" placeholder="Mô Tả Bài Viết"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Bài Viết</label>
                                    <textarea class="form-control" name="post_content" id="ckeditor2" cols="30" rows="10" placeholder="Mô Tả Danh Mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="post_slug" class="form-control" id="convert_slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Meta Từ Khóa</label>
                                    <textarea class="form-control" name="post_meta_keywords" id="" cols="30" rows="5" placeholder="Mô Tả Danh Mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta Nội Dung</label>
                                    <textarea class="form-control" name="post_meta_desc" id="" cols="30" rows="5" placeholder="Mô Tả Danh Mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Bài Viết</label>
                                    <input type="file" name="post_image" class="form-control" rows="8" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc danh mục</label>
                                      <select name="cate_post_id" class="form-control input-sm m-bot15">
                                        
                                        @foreach($cate_post as $key => $post)
                                           <option value="{{$post->cate_post_id}}">{{$post->cate_post_name}}</option>
                                        @endforeach
                                            
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Hiển Thị</label>
                                    <select name="post_status" id="">
                                        <option value="0">Hiển Thị</option>
                                        <option value="1">Ẩn</option>   
                                    </select>
                                </div>
                                <button type="submit" name="add_post" class="btn btn-info">Thêm Bài Viết</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
