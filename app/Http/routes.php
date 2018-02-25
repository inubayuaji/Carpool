<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', 'LoginController@index');
Route::get('admin', 'AdminController@index')->Middleware('auth');
Route::get('admin/permintaan', 'AdminController@permintaan')->Middleware('auth');
Route::get('admin/mobil', 'AdminController@mobil')->Middleware('auth');
Route::get('admin/log', 'AdminController@log')->Middleware('auth');
Route::get('member', 'MemberController@index')->Middleware('auth');
Route::post('member', 'MemberController@store')->Middleware('auth');
Route::get('member/order', 'MemberController@order')->Middleware('auth');
Route::get('member/mobil', 'MemberController@mobil')->Middleware('auth');
*/

Route::get('/', function(){
  return redirect('/login');
});
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/order', 'DashboardController@order');
Route::post('/dashboard/order', 'DashboardController@storeOrder');
Route::get('/dashboard/mobil', 'DashboardController@mobil');
Route::post('/dashboard/mobil', 'DashboardController@storeMobil');
Route::get('/dashboard/mobil/{plat_no}', 'DashboardController@showMobil');
Route::get('/dashboard/mobil/edit/{plat_no}', 'DashboardController@editMobil');
Route::get('/dashboard/request', 'DashboardController@req');
Route::get('/dashboard/request/{nama}/a/{id}', ['as'=>'aprove', 'uses'=>'DashboardController@aprove']);
Route::get('/dashboard/request/{nama}/d/{id}', ['as'=>'decline', 'uses'=>'DashboardController@decline']);
//Route::post('/dashboard/request', 'DashboardController@storeReq');
Route::get('/dashboard/request/{id}', 'DashboardController@showReq');
Route::get('/dashboard/log', 'DashboardController@log');
Route::get('/dashboard/log/{id}', 'DashboardController@showLog');
Route::get('/dashboard/aproved/', 'DashboardController@aproved');
//helper untuk input saja
Route::get('/dev/user', 'DevController@user');
Route::get('/dev/mobil', 'DevController@mobil');
Route::post('/dev/user', 'DevController@storeUser');
Route::post('/dev/mobil', 'DevController@storeMobil');

Route::auth();

Route::get('/home', 'HomeController@index');
