<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CustomerController extends Controller
{
    public function add_customer(Request $request){
        $data = array();
        $data['customer_name'] = $request->fullName;
        $data['customer_phone'] = $request->phone;
        $data['customer_email'] = $request->email;
        $data['customer_note'] = $request->message;
        //$data['room_name'] = $request->room_number;
        //$data['room_address'] = $request->room_address;
        $customer_id = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id' , $customer_id);
        Session::put('customer_name' , $request->customer_name);
        return Redirect('/rooms');
    }
}
