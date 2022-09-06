<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class RoomController extends Controller
{
   
    public function add_room(){
       
        $cate_room = DB::table('tbl_category_room')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->orderby('district_id','desc')->get();
        
        return view('admin.add_room')->with('cate_room', $cate_room)->with('district_room', $dist_room);
        
    }
    public function all_room(){
        
        $all_room = DB::table('tbl_room')
            ->join('tbl_category_room','tbl_category_room.category_id','=', 'tbl_room.category_id')
            ->join('tbl_district','tbl_district.district_id', '=', 'tbl_room.district_id')
            ->orderby('tbl_room.room_id', 'desc')->get();
        $manager_room = view('admin.all_room')->with('all_room', $all_room);
        return view('admin_layout')->with('admin.all_room', $manager_room);
    }
    public function save_room(Request $request){
        
        $data = array();
        $data['room_name'] = $request->room_name;
        $data['room_price'] = $request->room_price;
        $data['room_desc'] = $request->room_desc;
        $data['room_content'] = $request->room_content;
        $data['category_id'] = $request->room_category;
        $data['district_id'] = $request->room_district;
        $data['room_status'] = $request->room_status;

        $get_image = $request->file('room_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image ->move('public/upload/room', $new_image);
            $data['room_image'] = $new_image;
            DB::table('tbl_room')->insert($data);
            Session::put('message','Thêm phòng thành công');
            return Redirect::to('/admin/all-room');
        }
        $data['room_image'] = '';

        DB::table('tbl_room')->insert($data);
        Session::put('message','Thêm phòng thành công');
        return Redirect::to('/admin/add-room');
    }

    public function unactive_room($room_id){
        
        DB::table('tbl_room')->where('room_id', $room_id)->update(['room_status' => 1]);
        Session::put('message','Không kích hoạt  phòng thành công');
        return Redirect::to('/admin/all-room');
    }
    public function active_room($room_id){
        
        DB::table('tbl_room')->where('room_id', $room_id)->update(['room_status' => 0]);
        Session::put('message','Kích hoạt  phòng thành công');
        return Redirect::to('/admin/all-room');
    }

    public function edit_room($room_id){
        
        $cate_room = DB::table('tbl_category_room')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->orderby('district_id','desc')->get();

        $edit_room = DB::table('tbl_room')->where('room_id', $room_id)->get();
        $manager_room = view('admin.edit_room')->with('edit_room', $edit_room)->with('cate_room', $cate_room)
        ->with('district_room', $dist_room);
        return view('admin_layout')->with('admin.edit_room', $manager_room);
  
    }
    public function update_room(Request $request, $room_id){
        
        $data = array();
        $data['room_name'] = $request->room_name;
        $data['room_price'] = $request->room_price;
        $data['room_desc'] = $request->room_desc;
        $data['room_content'] = $request->room_content;
        $data['category_id'] = $request->room_category;
        $data['district_id'] = $request->room_district;
        $data['room_status'] = $request->room_status;

        $get_image = $request->file('room_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image ->move('public/upload/room', $new_image);
            $data['room_image'] = $new_image;
            DB::table('tbl_room')->where('room_id', $room_id)->update($data);
            Session::put('message','Cập nhật phòng thành công');
            return Redirect::to('all-room');
        }
        DB::table('tbl_room')->where('room_id', $room_id)->update($data);
        Session::put('message','Thêm phòng thành công');
        return Redirect::to('/admin/all-room');
    }
    public function delete_room($room_id){
        
        DB::table('tbl_room')->where('room_id', $room_id)->delete();
        Session::put('message','Xóa danh mục phòng thành công');
        return Redirect::to('/admin/all-room');
    }
    //end admin page
    public function details_room($room_id){
        
        $cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
        $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

        $details_room = DB::table('tbl_room')
        ->join('tbl_category_room','tbl_category_room.category_id','=', 'tbl_room.category_id')
        ->join('tbl_district','tbl_district.district_id', '=', 'tbl_room.district_id')
        ->where('tbl_room.room_id', $room_id)->get();
        return view('pages.room.room_details')->with('category',$cate_room)->with('district', $dist_room)->with('room_details', $details_room);
        
        
    }
    

    public function booked($room_id){
        //$cate_room = DB::table('tbl_category_room')->where('category_status', '0')->orderby('category_id','desc')->get();
       // $dist_room = DB::table('tbl_district')->where('district_status', '0')->orderby('district_id','desc')->get();

        //$all_room = DB::table('tbl_room')->where('room_status', '0')->orderby('room_id','desc')->limit(5)->get();

        //return view('pages.room.booked_home')->with('category',$cate_room)->with('district', $dist_room)->with('all_room', $all_room);
        //return route('pages.room.booked_home');
    }
    
}
