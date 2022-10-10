<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\Gallery;
use App\Models\Order;
use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class AccountController extends Controller
{
    public function my_account()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $getorder = Order::where('customer_id',Session::get('customer_id'))->orderby('order_id','DESC')->get();

        return view('shop.myaccount.my_account')->with('category',$cate_product);
    }
}
