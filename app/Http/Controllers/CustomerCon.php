<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerCon extends Controller
{
    public function view_customer()
    {

        $customer = Customer::orderby('customer_id','DESC')->get();

        return view('backend.admin.customer.view_customer')->with(compact('customer'));
    }
}
