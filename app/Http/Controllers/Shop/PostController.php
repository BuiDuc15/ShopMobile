<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\CatePost;

class PostController extends Controller
{
    public function index(){

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $cate_post = CatePost::orderby('cate_post_id','DESC')->get();

        return view('shop.post.index')->with('category', $cate_product)->with('cate_post', $cate_post);
    }
    public function show(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $cate_post = CatePost::orderby('cate_post_id','DESC')->get();

        return view('shop.post.show')->with('category', $cate_product)->with('post', $cate_post);
    }
}