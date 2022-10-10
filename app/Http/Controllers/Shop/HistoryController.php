<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Customer;
use App\Models\Coupon;
use App\Models\Product;
use Session;
use PDF;
use DB;


class HistoryController extends Controller
{
    public function history_order()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $getorder = Order::where('customer_id',Session::get('customer_id'))->orderby('order_id','DESC')->get();

        return view('shop.history.history_order')->with(compact('getorder'))->with('category',$cate_product);
    }
}
