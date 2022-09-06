<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function save_booking(Request $request){
        /*$roomId = $request->roomid_hidden;
        $quantity = $request->qty;
        $room_info =  DB::table('tbl_room')->where('room_id', $roomId)->first();
       
 
        //\Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        $data['id'] = $room_info->room_id;
        $data['name'] = $room_info->room_name;
        $data['price'] = $room_info->room_price;
        $data['qty'] = $quantity;
        $data['weight'] = '123';
        $data['options']['image'] = $room_info->room_image; 
        \Cart::add($data);
        //\Cart::destroy();
        //\Cart::add($room_info->room_id, $room_info->room_name, $room_info->room_price, 123, 100, ['img' => $room_info->room_image]);
        
        return Redirect::to('/cart/show-cart');*/

        
     }
     public function show(){

        $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();
        return view('pages.cart.show_cart')->with('category',$cate_room)->with('district', $dist_room);
     }
}
