<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use DB;

use Carbon\Carbon;
use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use Brian2694\Toastr\Facades\Toastr;
session_start();

class CouponController extends Controller
{
    public function check_coupon(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y');

        $data = $request->all();

        if (Session::get('customer_id')) {
            $coupon = Coupon::where('coupon_code',$data['coupon'])->where('coupon_status',1)->where('coupon_date_end','>=',$now)->
            where('coupon_used','LIKE','%'.Session::get('customer_id').'%')->first();
                if ($coupon) {
                    return redirect()->back()->with('message','Mã Giảm Giá Đã Được Sử Dụng');
                }else{
                            $coupon_login = Coupon::where('coupon_code',$data['coupon'])->where('coupon_status',1)->where('coupon_date_end','>=',$now)->first();
                            if($coupon_login){
                                $count_coupon = $coupon_login->count();
                                if($count_coupon>0){
                                    $coupon_session = Session::get('coupon');
                                    if($coupon_session==true){
                                        $is_avaiable = 0;
                                        if($is_avaiable==0){
                                            $cou[] = array(
                                                'coupon_code' => $coupon_login->coupon_code,
                                                'coupon_condition' => $coupon_login->coupon_condition,
                                                'coupon_number' => $coupon_login->coupon_number,
                    
                                            );
                                            Session::put('coupon',$cou);
                                        }
                                    }else{
                                        $cou[] = array(
                                            'coupon_code' => $coupon_login->coupon_code,
                                            'coupon_condition' => $coupon_login->coupon_condition,
                                            'coupon_number' => $coupon_login->coupon_number,
                    
                                        );
                                        Session::put('coupon',$cou);
                                    }
                                    Session::save();
                                    
                                    return redirect()->back()->with('message','Thêm mã giảm giá thành công');
                                }
                    
                    
                            }else{
                                return redirect()->back()->with('error','Mã giảm giá không đúng - hoặc đã hết hạn');
                            }

                }
//  Chưa Đăng Nhập
        }else{
                    $coupon = Coupon::where('coupon_code',$data['coupon'])->where('coupon_status',1)->where('coupon_date_end','>=',$now)->first();
                    if($coupon){
                        $count_coupon = $coupon->count();
                        if($count_coupon>0){
                            $coupon_session = Session::get('coupon');
                            if($coupon_session==true){
                                $is_avaiable = 0;
                                if($is_avaiable==0){
                                    $cou[] = array(
                                        'coupon_code' => $coupon->coupon_code,
                                        'coupon_condition' => $coupon->coupon_condition,
                                        'coupon_number' => $coupon->coupon_number,
            
                                    );
                                    Session::put('coupon',$cou);
                                }
                            }else{
                                $cou[] = array(
                                    'coupon_code' => $coupon->coupon_code,
                                    'coupon_condition' => $coupon->coupon_condition,
                                    'coupon_number' => $coupon->coupon_number,
            
                                );
                                Session::put('coupon',$cou);
                            }
                            Session::save();
                            return redirect()->back()->with('message','Thêm mã giảm giá thành công');
                        }
            
            
                    }else{
                        return redirect()->back()->with('error','Mã giảm giá không đúng - hoặc đã hết hạn');
                    }
        }

       
    }

    public function unset_coupon(){
		$coupon = Session::get('coupon');
        if($coupon==true){
          
            Session::forget('coupon');
            return redirect()->back()->with('message','Xóa mã khuyến mãi thành công');
        }
	}
}
