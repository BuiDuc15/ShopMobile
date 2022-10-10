@extends('backend.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Mục Bài Viết
    </div>
    <div class="row w3-res-tb">
      
      <div class="col-sm-4">
          <a href="{{URL::to('/add-post')}}"><button class="btn btn-success">Thêm Bài Viết</button></a>
      </div>
      
    </div>
    <div class="table-responsive">
                        <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null) ;
                            }
                        ?>
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
            <th style="width:20px;">
              STT
            </th>
            <th>Tên Bài Viết</th>
            <th>Author</th>
            <th>Hình Ảnh</th>
            <th>Mô Tả Bài Viết</th>
            <th>Danh Mục Bài Viết</th>
            <th>Quản Lý</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_post as $key => $post)
          <tr>
            <td>{{ $post->post_id}}</td>
            <td>{{ $post->post_title}}</td>
            <td>{{ $post->post_author}}</td>
            <td><img src="public/upload/post/{{ $post->post_image}}" height="100" width="100"></td>
            <td>{!! $post->post_desc !!}</td>
            <td>{{ $post->cate_post->cate_post_name }}</td>
               
           

            <td>
              <a href="{{URL::to('/edit-cate-post/'.$post->cate_post_id)}}" class="active" style="font-size: 20px;" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa bài viết này không ?')" href="{{URL::to('/delete-post/'.$post->post_id)}}">
                  <i class="fa fa-times text-danger text" style="font-size: 20px;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">

        
        
      </div>
    </footer>
  </div>
</div>



@endsection
