<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\CatePost;
use File;
use Session;
use App\Http\Requests;
use App\Models\Gallery;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use Brian2694\Toastr\Facades\Toastr;

class CatePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function add_post()
    {
       
        // $category = $this->getCategoriesProduct();
        return view('backend.admin.post.add_cate_post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function save_post(Request $request)
    {
        $data = $request->all();
        $cate_post = new CatePost();

        $cate_post->cate_post_name = $data['cate_post_name'];
        $cate_post->cate_post_status = $data['cate_post_status'];
        $cate_post->cate_post_slug = $data['cate_post_slug'];
        $cate_post->cate_post_desc = $data['cate_post_desc'];
        
        $cate_post->save();

        

        Toastr::success('Thêm danh mục bài viết thành công','Thành Công');

        return Redirect::to('all-cate-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function all_post()
    {
        $post = CatePost::orderby('cate_post_id','DESC')->get();
        
        return view('backend.admin.post.all_cate_post')->with(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_post($cate_post_id)
    {
        $cate_post =  CatePost::find($cate_post_id);
   
        return view('backend.admin.post.edit_cate_post')->with(compact('cate_post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_post(Request $request, $id)
    {
       

        $data = $request->all();
        
        $cate_post = CatePost::find($id); // tim du lieu can sua
        
        $cate_post->cate_post_name = $data['cate_post_name'];
        $cate_post->cate_post_status = $data['cate_post_status'];
        $cate_post->cate_post_slug = $data['cate_post_slug'];
        $cate_post->cate_post_desc = $data['cate_post_desc'];
        
        $cate_post->save();

        

        Toastr::success('Update danh mục bài viết thành công','Thành Công');

        return Redirect::to('all-cate-post') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_post($id)
    {
        $cate_post = CatePost::find($id);

        $cate_post->delete();
        Toastr::success('Xoa danh mục bài viết thành công','Thành Công');

        return Redirect::to('all-cate-post') ;

    }
}
