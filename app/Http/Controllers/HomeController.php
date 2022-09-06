<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

        $all_room = DB::table('tbl_room')->where('room_status', '0')->orderby('room_id','desc')->limit(4)->get();

        return view('pages.home')->with('category',$cate_room)->with('district', $dist_room)->with('all_room', $all_room);
    }
    public function index2(){
        $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

        $all_room = DB::table('tbl_room')->where('room_status', '0')->orderby('room_id','desc')->limit(4)->get();

        return view('pages.room.rooms')->with('category',$cate_room)->with('district', $dist_room)->with('all_room', $all_room);
    }

    public function search(Request $request){

        $keywords = $request->keywords_submit;
        $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

        $search_room= DB::table('tbl_room')->where('room_desc', 'like', '%'.$keywords.'%')->get();

        return view('pages.room.search')->with('category',$cate_room)->with('district', $dist_room)->with('search_room',$search_room);
    }
    
}
