<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;
use App\Car;
use App\Log;

class DashboardController extends Controller
{
    //
    function index(){
      return view('content.index');
    }
    function order(){
      return view('content.order');
    }
    function mobil(){
      $cars = Car::orderBy('plat_no', 'asc')->get();
      return view('content.mobil', compact('cars'));
    }
    function req(){
      $orders = Order::orderBy('id', 'asc')->get();
      return view('content.request', compact('orders'));
    }
    function log(){
      $logs = Log::orderBy('id', 'asc')->get();
      return view('content.log', compact('logs'));
    }
    function showMobil($plat_no){
      $car = Car::where('plat_no', $plat_no)->firstOrFail();
      return view('content.smobil', compact('car'));
    }
    function showReq($id){
      $order = Order::findOrFail($id);
      return view('content.srequest', compact('order'));
    }
    function showLog($id){
      $log = Log::findOrFail($id);
      return view('content.slog', compact('log'));
    }
    function storeMobil(Request $request){
      $car = new Cars();
      $car->kon_mesin = $request->kon_mesin;
      $car->save();
    }
    function storeReq(Request $request){

    }
    function storeOrder(Request $request){
      $order = new Order();
      //$order->name = $request->input('name');
      $order->keperluan = $request->input('keperluan');
      $order->jns_pinjaman = $request->input('jns_pinjaman');
      $order->dari = $request->input('dari');
      $order->ke = $request->input('ke');
      $order->tgl_berangkat = $request->input('tgl_berangkat');
      $order->tgl_pulang = $request->input('tgl_pulang');
      $order->alasan = $request->input('alasan');
      $order->save();
    }
}
