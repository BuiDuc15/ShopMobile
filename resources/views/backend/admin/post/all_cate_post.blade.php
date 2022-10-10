@extends('backend.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Mục Bài Viết
    </div>
    <div class="row w3-res-tb">
      
      <div class="col-sm-4">
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
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              STT
            </th>
            <th>Tên Danh Mục</th>
            <th>Hiển Thị </th>
            <th>Slug</th>
            <th>Quản Lý</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($post as $key => $post)
          <tr>
            <td>{{ $post->cate_post_id}}</td>
            <td>{{ $post->cate_post_name}}</td>
                <td>    <span class="text-ellipsis">
                                <?php
                                    if ($post->cate_post_status == 0) {
                                ?>
                                <a href="{{URL::to('/unactive-post/' .$post->cate_post_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up" style="font-size: 28px;
                        color: green;"></span></a>
                                <?php
                                    }else{

                                        ?>
                                <a href="{{URL::to('/active-post/' .$post->cate_post_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down" style="font-size: 28px;
                        color: red;"></span></a>
                                <?php
                                    }
                                ?>
                        </span>
            </td>
            <td>{{ $post->cate_post_slug }}</td>

            <td>
              <a href="{{URL::to('/edit-cate-post/'.$post->cate_post_id)}}" class="active" style="font-size: 20px;" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa danh muc bài viết này không ?')" href="{{URL::to('/delete-cate-post/'.$post->cate_post_id)}}">
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
