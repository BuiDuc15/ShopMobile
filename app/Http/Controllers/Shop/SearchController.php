<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class SearchController extends Controller
{
    public function tim_kiem(Request $request){

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product

        //Hien Thi thuong hieu ra trang san pham
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $keywords = $request->keywords_submit;

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

        

        return view('shop.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);
    }
}
