<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

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
    function aproved(){
      $orders = Order::orderBy('id', 'asc')->get();
      return view('content.aproved', compact('orders'));
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
      $plat_no = $request->input('plat_no');
      $kon_mesin = $request->input('kon_mesin');
      DB::table('cars')->where('plat_no', $plat_no)->update(['kon_mesin' => $kon_mesin]);
      return redirect('/dashboard/mobil');
    }
    function storeOrder(Request $request){
      $order = new Order();
      $order->nama = $request->input('nama');
      $order->keperluan = $request->input('keperluan');
      $order->jns_pinjaman = $request->input('jns_pinjaman');
      $order->dari = $request->input('dari');
      $order->ke = $request->input('ke');
      $order->tgl_berangkat = $request->input('tgl_berangkat');
      $order->tgl_pulang = $request->input('tgl_pulang');
      $order->alasan = $request->input('alasan');
      $order->status = 'P';
      $order->save();
      return redirect('/dashboard/order');
    }
    function editMobil($plat_no){
      return view('content.editmobil', compact('plat_no'));
    }
    function aprove($nama, $id){
      $log = new Log();
      $order = Order::findOrFail($id);
      $order->status = 'A';
      $order->save();
      $log->nama_peminjam = $order->nama;
      $log->nama_pengijin = $nama;
      $log->keperluan = $order->keperluan;
      $log->tgl_perg = $order->tgl_berangkat;
      $log->tgl_pulang = $order->tgl_pulang;
      $log->status = $order->status;
      $log->dari = $order->dari;
      $log->ke = $order->ke;
      $log->save();
      return redirect('/dashboard/request');
    }
    function decline($nama, $id){
      $log = new Log();
      $order = Order::findOrFail($id);
      $order->status = 'D';
      $order->save();
      $log->nama_peminjam = $order->nama;
      $log->nama_pengijin = $nama;
      $log->keperluan = $order->keperluan;
      $log->tgl_perg = $order->tgl_berangkat;
      $log->tgl_pulang = $order->tgl_pulang;
      $log->status = $order->status;
      $log->dari = $order->dari;
      $log->ke = $order->ke;
      $log->save();
      return redirect('/dashboard/request');
    }
}
