<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Auth;
use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use App\Models\Statistic;

session_start();

class AdminController extends Controller
{
    

    

    public function Admin(){

        return view('backend.admin_login');
    }

    public function show_dashboard(){
        

        return view('backend.admin.dashboard');
    }

     public function logout(){
        

        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/login-auth');
     }

     

     public function filter_by_date(Request $request){

        $data = $request->all();
    
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];
    
        $get = Statistic::whereBetween('order_date',[$from_date,$to_date])->orderBy('order_date','ASC')->get();
    
    
        foreach($get as $key => $val){
    
            $chart[] = array(
    
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }

      echo $data = json_encode($chart);
    
    }
}
