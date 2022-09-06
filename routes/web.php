<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Fontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::post('/search', 'App\Http\Controllers\HomeController@search');

//Route::get('/rooms-home','App\Http\Controllers\HomeController@index2');

Route::get('/rooms','App\Http\Controllers\HomeController@index2');
Route::get('{room_id}','App\Http\Controllers\RoomController@details_room');
//Route::get('{room_id}', [App\Http\Controllers\RoomController::class, 'details_room']);


//Category
Route::get('/room-categories/{category_id}', 'App\Http\Controllers\CategoryRoom@show_category_home');

//booking
//Route::get('booking-room/booking/{room_id}',[App\Http\Controllers\BookingController::class, 'front_booking']);
//Route::get('/booking-room/booking/{room_id}', 'App\Http\Controllers\BookingController@front_booking');
Route::get('rooms/booking/{room_id}', 'App\Http\Controllers\BookingController@front_booking');

//cart
Route::post('/save-booking', 'App\Http\Controllers\CartController@save_booking');
//Route::get('/cart/show-cart', 'App\Http\Controllers\CartController@show');

//checkout
//Route::post('/admin/add-customer', 'App\Http\Controllers\CustomerController@add_customer');
Route::post('/admin/booking_place', 'App\Http\Controllers\BookingController@booking_place');

//booking
Route::get('/admin/manage-booking', 'App\Http\Controllers\BookingController@manage_booking');
Route::get('/admin/unactive-booking/{booking_id}', 'App\Http\Controllers\BookingController@unactive_booking');
Route::get('/admin/active-booking/{booking_id}', 'App\Http\Controllers\BookingController@active_booking');

//Backend
Route::get('/admin/login','App\Http\Controllers\AdminController@index');
Route::get('/admin/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');

//Category Room
Route::get('/admin/add-category', 'App\Http\Controllers\CategoryRoom@add_category');

Route::get('/admin/edit-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@edit_category_room');
//Route::get('{category_room_id}', [App\Http\Controllers\CategoryRoom::class, 'edit_category_room']);
Route::get('/admin/delete-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@delete_category_room');

Route::get('/admin/all-category-room', 'App\Http\Controllers\CategoryRoom@all_category_room');

Route::get('/admin/unactive-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@unactive_category_room');
Route::get('/admin/active-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@active_category_room');

Route::post('/admin/save-category-room', 'App\Http\Controllers\CategoryRoom@save_category_room');
Route::post('/admin/update-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@update_category_room');

//District 
Route::get('/admin/add-district', 'App\Http\Controllers\District@add_district');

Route::get('/admin/edit-district/{district_id}', 'App\Http\Controllers\District@edit_district');
Route::get('/admin/delete-district/{district_id}', 'App\Http\Controllers\District@delete_district');

Route::get('/admin/all-district', 'App\Http\Controllers\District@all_district');

Route::get('/admin/unactive-district/{district_id}', 'App\Http\Controllers\District@unactive_district');
Route::get('/admin/active-district/{district_id}', 'App\Http\Controllers\District@active_district');

Route::post('/admin/save-district', 'App\Http\Controllers\District@save_district');
Route::post('/admin/update-district/{district_id}', 'App\Http\Controllers\District@update_district');

//Room
Route::get('/admin/add-room', 'App\Http\Controllers\RoomController@add_room');

Route::get('/admin/edit-room/{room_id}', 'App\Http\Controllers\RoomController@edit_room');
Route::get('/admin/delete-room/{room_id}', 'App\Http\Controllers\RoomController@delete_room');

Route::get('/admin/all-room', 'App\Http\Controllers\RoomController@all_room');

Route::get('/admin/unactive-room/{room_id}', 'App\Http\Controllers\RoomController@unactive_room');
Route::get('/admin/active-room/{room_id}', 'App\Http\Controllers\RoomController@active_room');

Route::post('/admin/save-room', 'App\Http\Controllers\RoomController@save_room');
Route::post('/admin/update-room/{room_id}', 'App\Http\Controllers\RoomController@update_room');


