<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Car;

class MemberController extends Controller
{
    //
    function index(){
      return view('member.index');
    }
    function order(){
      return view('member.order');
    }
    function mobil(){
      $cars = Car::orderBy('plat_no', 'asc')->get();
      return view('member.listmobil', compact('cars'));
    }
    function store(Request $request){
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
