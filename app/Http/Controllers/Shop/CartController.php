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

session_start();
class CartController extends Controller

{

    public function cart_menu(){
        $cart = count(Session::get('cart'));
 
       echo $cart;
    }
    // Thêm sản phẩm vào giỏ hàng
    public function add_cart_ajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,36),10);

        $cart = Session::get('cart');

        if ($cart == true) {

            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if ($val['product_id']==$data['cart_product_id']) {
                    $is_avaiable++;
                }
            }

            if ($is_avaiable == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_price' => $data['cart_product_price'],
                    'product_qty' => $data['cart_product_qty'],
                );
                Session::put('cart',$cart);
            }
        }else{

            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_price' => $data['cart_product_price'],
                'product_qty' => $data['cart_product_qty'],
            );
            Session::put('cart',$cart);
        }
        
        Session::save();
    }


    public function hover_cart(){
        $cart = count(Session::get('cart'));
        $output = '';

        if ($cart > 0) {
            $output.='
                            <div class="cart-list-wrapper">';
                                    foreach(Session::get('cart') as $key => $value){
                                        $output.='<ul class="cart-list">
                                                <li>
                                                    <div class="cart-img">
                                                        <a href="product-details.html"><img src="'.asset('public/upload/product/'.$value['product_image']).'" ></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="product-details.html">iPhone 13 Pro Max | Chính hãng VN/A</a></h4>
                                                        <span class="cart-qty">Số lượng: '.$value['product_qty'].'</span>
                                                        <span>'.number_format($value['product_price'],0,',','.').' VND</span>
                                                    </div>
                                                    <div class="del-icon">
                                                        
                                                    
                                                         <i class="fa fa-times"></i>
                                                    
                                                        
                                                    </div>
                                                </li>
                                            </ul>';
                                    }
                                              
                        $output.='</div>';
                
                 
        }echo $output;
    }


    public function gio_hang(Request $request){
        //seo
        $meta_desc = "Giỏ hàng của bạn";
        $meta_keywords = "Giỏ hàng Ajax";
        $meta_title = "Giỏ Hàng Ajax";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        return view('shop.cart.cart')->with('category', $cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('meta_canonical',$url_canonical);

    }

    //xóa sản phẩm trong giỏ hàng
    public function del_product($session_id){
        $cart = Session::get('cart');
        if ($cart==true) {
            foreach($cart as $key => $val){
                if ($val['session_id']==$session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Xoa san pham thanh cong');
        }else{
            return redirect()->back()->with('message','Xoa san pham that bai');
        }
    }
    // Xóa giỏ hàng

    public function del_all_product()
    {
        $cart = Session::get('cart');
        if ($cart==true) {
            Session::forget('cart');
            return redirect()->back()->with('message' ,'Xóa Giỏ Hàng Thành Công');
        }
    }

    public function cart_session(){
   
        $output ='';
        
        if(Session::get('cart')==true){
            foreach(Session::get('cart') as $key => $value){
               
                $output.= '<input type="hidden" class="cart_id" value="'.$value['product_id'].'">';
            }
        }
        echo $output;
    }


    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart==true) {
            foreach($data['cart_qty'] as $key => $qty){
                
                foreach($cart as $session => $val){
                    if ($val['session_id']==$key) {

                     $cart[$session]['product_qty'] = $qty;
                    }
                   
                }
            }
                Session::put('cart',$cart);
                return redirect()->back()->with('message','Cap nhap san pham thanh cong');
        }else{
            return redirect()->back()->with('message','Cap nhap san pham that bai');
        }
    }


    public function save_cart(Request $request){
        $productId = $request->productid_hidden;
        $quanlity = $request->qty;

        $data = DB::table('tbl_product')->where('product_id',$productId)->get();

        return view('shop.cart.cart');
    }
}
