<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Car;
use App\Log;

class AdminController extends Controller
{
    //
    function index(){
      return view('admin.index');
    }
    function permintaan(){
      $orders = Order::orderBy('id', 'asc')->get();
      return view('admin.permintaan', compact('orders'));
    }
    function mobil(){
      $cars = Car::orderBy('plat_no', 'asc')->get();
      return view('admin.listmobil', compact('cars'));
    }
    function log(){
      $logs = Log::orderBy('id', 'asc')->get();
      return view('admin.log', compact('logs'));
    }
}
