<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\Gallery;

use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
class ProductController extends Controller
{
    public function index(){
        
        //hien thi danh muc ra trang san pham
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product

        //Hien Thi thuong hieu ra trang san pham
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        // Hiển Thị Sản Phẩm ra trang san pham
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(10)->get();

        return view('shop.product.product')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);


        
    }

    public function detail_product($product_id){

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product

        //Hien Thi thuong hieu ra trang san pham
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $detail_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id',$product_id)->get();


       
        foreach($detail_product as $key => $value){
            $category_id = $value->category_id;
            $product_id = $value->product_id;
        }

        // Thêm Thư Viện Ảnh

        $gallery = Gallery::where('product_id',$product_id)->get();

         // Lấy nhừng sản phẩm liên quan
        $related_product = DB::table('tbl_product') 
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->orderby(DB::raw('RAND()'))->paginate(3);
        ;

        return view('shop.product.product_detail')->with('category',$cate_product)->with('brand',$brand_product)->
        with('product_detail',$detail_product)->with('relate',$related_product)->with('gallery',$gallery);

    }
}
