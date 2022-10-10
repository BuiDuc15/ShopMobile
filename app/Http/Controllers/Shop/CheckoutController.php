<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Mail;
use Session;

use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Coupon;
use App\Http\Controllers\Shop\CartController;
use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckoutController extends Controller
{

    public function login_checkout(){

        //hien thi danh muc ra trang san pham
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        return view('shop.checkout.login_checkout')->with('category',$cate_product);
    }

    public function add_customer(Request $request){
        $data = array();

        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);

        $customer_id = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);

        return Redirect('/checkout');

    }

    public function checkout(){

        //hien thi danh muc ra trang san pham
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        return view('shop.checkout.show_checkout')->with('category',$cate_product);
    }

    public function save_checkout(Request $request){
        $data = array();

        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_note'] = $request->shipping_note;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('customer_id',$shipping_id);
        

        return Redirect('/checkout');
    }

   

    public function logout_checkout(){
        Session::flush();
        Session::forget('coupon');
        Session::forget('customer_id');
        return Redirect::to('login-checkout');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = md5($request->password_account);

        $result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();
        if (Session::get('coupon')==true) {
            Session::forget('coupon');
        }

        if ($result) {
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/shop');
        }else{
            return Redirect::to('/login-checkout');
        }
    }
     
    // Xac nhận đơn hàng
    public function comfirm_order(Request $request)
    {
        $data = $request ->all();
        if($data['order_coupon']!='no'){
        $coupon = Coupon::where('coupon_code',$data['order_coupon'])->first();
        $coupon->coupon_used = $coupon->coupon_used.','.Session::get('customer_id');
        $coupon->coupon_times = $coupon->coupon_times - 1;
        $coupon_mail = $coupon->coupon_code;

        $coupon->save();
        }else{
            $coupon_mail = 'không có sử dụng';
        }

// lay ten khach hang
        $shipping = new Shipping();

        $shipping -> shipping_name = $data['shipping_name'];
        $shipping -> shipping_email = $data['shipping_email'];
        $shipping -> shipping_address = $data['shipping_address'];
        $shipping -> shipping_phone = $data['shipping_phone'];
        $shipping -> shipping_note = $data['shipping_note'];
        $shipping -> shipping_method = $data['shipping_method'];

        $shipping->save();

        $shipping_id = $shipping->shipping_id;

        $checkout_code = substr(md5(microtime()),rand(0,26),5);

        $order = new Order;
        $order->customer_id = Session::get('customer_id');
        $order->shipping_id = $shipping_id;
        $order->order_status = 1;
        $order->order_code = $checkout_code;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->created_at = now();
        $order->save();

        if(Session::get('cart')==true){
            foreach(Session::get('cart') as $key => $cart){

              $order_details = new OrderDetails;
              $order_details->order_code = $checkout_code;
              $order_details->product_id = $cart['product_id'];
              $order_details->product_name = $cart['product_name'];
              $order_details->product_price = $cart['product_price'];
              $order_details->product_sales_quantity = $cart['product_qty'];
              $order_details->product_coupon =  $data['order_coupon'];
              
              $order_details->save();
            }
          }
          
        //send mail confirm
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

        $title_mail = "Đơn hàng xác nhận ngày".' '.$now;

        $customer = Customer::find(Session::get('customer_id'));
            
        $data['email'][] = $customer->customer_email;

        //lay gio hang
        if(Session::get('cart')==true){

            foreach(Session::get('cart') as $key => $cart_mail){

            $cart_array[] = array(
                'product_name' => $cart_mail['product_name'],
                'product_price' => $cart_mail['product_price'],
                'product_qty' => $cart_mail['product_qty']
            );

            }

        }

        $shipping_array = array(
            
            'customer_name' => $customer->customer_name,
            'shipping_name' => $data['shipping_name'],
            'shipping_email' => $data['shipping_email'],
            'shipping_phone' => $data['shipping_phone'],
            'shipping_address' => $data['shipping_address'],
            'shipping_note' => $data['shipping_note'],
            'shipping_method' => $data['shipping_method']
        
          );
           //lay ma giam gia, lay coupon code
            $ordercode_mail = array(
                'coupon_code' => $coupon_mail,
                'order_code' => $checkout_code,
            );

            Mail::send('shop.mail.mail_order',  ['cart_array'=>$cart_array, 'shipping_array'=>$shipping_array ,'code'=>$ordercode_mail] , function($message) use ($title_mail,$data){
                $message->to($data['email'])->subject($title_mail);//send this mail with subject
                $message->from($data['email'],$title_mail);//send from this mail
            });

    }
}
