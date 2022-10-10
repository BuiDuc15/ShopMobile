<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\CatePost;
use App\Models\Post;


class ShowPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $cate_post = CatePost::orderby('cate_post_id','DESC')->get();

        

        return view('shop.post.index')->with('category', $cate_product)->with('cate_post', $cate_post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
    public function show(Request $request,$cate_post_slug)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $cate_post = CatePost::orderby('cate_post_id','DESC')->get();

        $catepost = CatePost::where('cate_post_slug',$cate_post_slug)->take(1)->get();

        foreach($catepost as $key => $cate){
            $cate_id = $cate->cate_post_id;
        }

        $post_cate = Post::with('cate_post')->where('post_status',0)->where('cate_post_id',$cate_id);

        return view('shop.post.show_title')->with('category', $cate_product)->with('cate_post', $cate_post)->with('post_cate', $post_cate);
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
    public function destroy($id)
    {
        //
    }
}
