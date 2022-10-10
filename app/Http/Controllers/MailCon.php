<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Coupon;
use Brian2694\Toastr\Facades\Toastr;


class MailCon extends Controller
{
    public function send_email()
    {
        $to_name = "ngoc trung";
        $to_email = "ngoctrung012345@gmail.com";//send to this email

        $data = array("name"=>"noi dung ten","body"=>'noi dung body'); //body of mail.blade.php
    
        Mail::send('backend.admin.email.send_email',$data,function($message) use ($to_name,$to_email){

            $message->to($to_email)->subject('test mail nhé');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });

    }

    public function send_coupon($coupon_times,$coupon_condition,$coupon_number,$coupon_code)
    {
        $customer_vip = Customer::where('customer_vip',1)->get();
        $coupon = Coupon::where('coupon_code',$coupon_code)->first();
        $start_coupon = $coupon->coupon_date_start;
        $end_coupon = $coupon->coupon_date_end;
         $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

         $title_mail = "Mã khuyến mãi ngày".' '.$now;

         $data = [];
         foreach($customer_vip as $vip){
             $data['email'][] = $vip->customer_email;
         }

         $coupon = array(
             'start_coupon'=>$start_coupon,
             'end_coupon'=>$end_coupon,
             'coupon_times' => $coupon_times,
            'coupon_code' => $coupon_code,
            'coupon_condition' => $coupon_condition,
            'coupon_number' => $coupon_number,

        );

         Mail::send('backend.admin.email.mail_example',  ['coupon' => $coupon] , function($message) use ($title_mail,$data){
            $message->to($data['email'])->subject($title_mail);//send this mail with subject
            $message->from($data['email'],$title_mail);//send from this mail
    });

    Toastr::success('Gửi Mã Khuyến Mãi Thành Công','Thành Công');

    return redirect()->back();

    }

    public function mail_example()
    {
        return view('backend.admin.email.mail_example');
    }
}
