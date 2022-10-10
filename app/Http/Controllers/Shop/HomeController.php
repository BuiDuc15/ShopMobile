<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\CategoryProductModel;

use App\Models\Product;

use Auth;
use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class HomeController extends Controller
{
    public function index(){

        //Hiển Thị Sản Phẩm ra trang chủ
        //hien thi danh muc ra trang san pham
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        // Hiển Thị Sản Phẩm ra trang san pham
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(10)->get();

        
        return view('shop.home')->with('category', $cate_product)->with('all_product',$all_product);
    }

    public function history_ship()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        return view('shop.progress.progress')->with('category', $cate_product);
    }
    
    public function history_ship2()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        return view('shop.progress.progress2')->with('category', $cate_product);
    }
}
