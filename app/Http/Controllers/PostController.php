<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use File;
use Session;
use App\Http\Requests;
use App\Models\Gallery;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\CatePost;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $cate_post = CatePost::orderby('cate_post_id','DESC')->get();


        return view('backend.admin.post.add_post')->with(compact('cate_post'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $data = $request->all();

        $post = new Post();

        $post->post_title = $data['post_title'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_meta_desc = $data['post_meta_desc'];
        $post->post_meta_keywords = $data['post_meta_keywords'];
        $post->post_status = $data['post_status'];
        $post->post_author = $data['post_author'];
        $post->post_slug = $data['post_slug'];
        $post->cate_post_id = $data['cate_post_id'];

        

        $get_image = $request->file('post_image');

        $path = 'public/upload/post/';
        $part_gallery = 'public/upload/gallery/';

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName(); // Lấy tên hình ảnh 
            $name_image = current(explode('.',$get_name_image)); //lay tên đầu tiên của hình ảnh 
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); // Lấy cái đuôi mở rộng của file ảnh
            $get_image->move($path, $new_image); // đường dẫn chứa cảu ảnh 

            

            $post->post_image = $new_image;

            $post->save();

            Toastr::success('Thêm bài viết thành công','Thành Công');

            return Redirect::to('all-post');
            
        }else{
            Toastr::danger('Bạn cần thêm ảnh bài viết','Thất Bại');

            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $all_post = Post::with('cate_post')->orderby('cate_post_id')->get();

        return view('backend.admin.post.all_post')->with(compact('all_post',$all_post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($post_id)
    {
        $post = Post::find($post_id);
        $post_image = $post->post_image;

        if($post_image){
            $path = 'public/upload/post/' .$post_image;

            unlink($path);
        }

        $post->delete();

        Toastr::success('Xóa bài viết thành công','Thành Công');

        return redirect()->back();
    }
}
