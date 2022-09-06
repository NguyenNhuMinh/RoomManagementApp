<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    
    
    public function index(){
        
        return view('admin_login');
    }

    public function show_dashboard(){
        
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        
        $admin_username = $request->admin_username;
        $admin_password = md5($request->admin_password);

        $result= DB::table('tbl_admin')->where('admin_username', $admin_username)
                                         ->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/admin/dashboard');
        }else{
            Session::put('message', 'Tài khoản hoặc mật khẩu sai. Vui lòng nhập lại!');
            return Redirect::to('/admin/login');
        }
    }

    public function logout(){
        
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin/login');
    }  
}
