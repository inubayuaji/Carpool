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

Route::get('/', 'LoginController@index');
Route::get('admin', 'AdminController@index');
Route::get('admin/permintaan', 'AdminController@permintaan');
Route::get('admin/mobil', 'AdminController@mobil');
Route::get('admin/log', 'AdminController@log');
Route::get('member', 'MemberController@index');
Route::post('member', 'MemberController@store');
Route::get('member/order', 'MemberController@order');
Route::get('member/mobil', 'MemberController@mobil');

Route::auth();

Route::get('/home', 'HomeController@index');
