<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BookingController extends Controller
{
    public function index(){}
    public function create(){}
    public function store(Request $request){
        
    }
    public function available_rooms(Request $request){
        
    }
    public function front_booking($room_id){
        
        $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

        $details_room = DB::table('tbl_room')
        ->join('tbl_category_room','tbl_category_room.category_id','=', 'tbl_room.category_id')
        ->join('tbl_district','tbl_district.district_id', '=', 'tbl_room.district_id')
        ->where('tbl_room.room_id', $room_id)->get();
        
        return view('pages.room.front-booking')->with('category',$cate_room)->with('district', $dist_room)->with('room_details', $details_room);
    }    
    public function save_booking(Request $request){
       $roomId = $request->roomid_hidden;
       

       $room_info =  DB::table('tbl_room')->where('room_id', $roomId)->first();

       $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
       $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

       Cart::add('293ad', 'Product 1', 1, 9.99, 550);
       $cart= Cart::content();
       return view('pages.cart.show_cart')->with('category',$cate_room)->with('district', $dist_room);
    }
    public function booking_place(Request $request){
        
        /*$booking_data = array();
        $booking_data['customer_id'] = Session::get('customer_id');
        $booking_data['room_id'] = Session::get('room_id');
        $booking_data['booking_status'] = 'Đang xử lý';
        $booking_id = DB::table('tbl_booking')->insertGetId($booking_data);

        return Redirect('/rooms');*/

        $customer_data = array();
        $customer_data['customer_name'] = $request->fullName;
        $customer_data['customer_phone'] = $request->phone;
        $customer_data['customer_email'] = $request->email;
        $customer_data['customer_note'] = $request->message;
        $customer_id = DB::table('tbl_customer')->insertGetId($customer_data);

        $booking_data = array();
        $booking_data['customer_id'] = $customer_id;
        $booking_data['room_id'] = $request->booking_room_id;
        $booking_data['booking_status'] = 'Đang xử lý';
        $booking_id = DB::table('tbl_booking')->insertGetId($booking_data);
        return Redirect('/rooms');
    }
    public function manage_booking(){
        $all_booking_order = DB::table('tbl_booking')
        ->join('tbl_customer','tbl_booking.customer_id', '=', 'tbl_customer.customer_id')
        ->join('tbl_room', 'tbl_booking.room_id', '=', 'tbl_room.room_id')
        ->select('tbl_booking.*', 'tbl_customer.customer_name', 'tbl_customer.customer_phone','tbl_room.room_name','tbl_room.room_desc','tbl_room.room_image')
        ->orderby('tbl_booking.booking_id','desc')->get();
        $manager_booking = view('admin.manage_booking')->with('all_booking_order', $all_booking_order);
        return view('admin_layout')->with('admin.manage_booking', $manager_booking);
        //$all_order= DB::table('tbl_customer')->get();
        //$manager_order = view('admin.manage_booking')->with('all_order', $all_order);
        //return view('admin_layout')->with('admin.manage_booking', $manager_order);
    }
    public function unactive_booking($booking_id){
        
        DB::table('tbl_booking')->where('booking_id', $booking_id)->update(['booking_status' => 'Đã xử lý']);
        Session::put('message','Đang trong quá trình xử lý');
        return Redirect::to('/admin/manage-booking');
    }
    public function active_booking($booking_id){
        
        DB::table('tbl_booking')->where('booking_id', $booking_id)->update(['booking_status' => 'Đang xử lý']);
        Session::put('message','Đã xử lý xog');
        return Redirect::to('/admin/manage-booking');
    }
}
