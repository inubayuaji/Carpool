@extends('layouts.fream')
@section('content')
<div>
  <h1>Detail Permintaan</h1>
  <table>
    <tr>
      <td>Nama peminjam:</td>
      <td>{{$order->nama}}</td>
    </tr>
    <tr>
      <td>Keperluan:</td>
      <td>{{$order->keperluan}}</td>
    </tr>
    <tr>
      <td>Jenis pinjam:</td>
      <td>{{$order->jns_pinjaman}}</td>
    </tr>
    <tr>
      <td>Dari:</td>
      <td>{{$order->dari}}</td>
    </tr>
    <tr>
      <td>Tujuan:</td>
      <td>{{$order->ke}}</td>
    </tr>
    <tr>
      <td>Tanggal pergi:</td>
      <td>{{$order->tgl_berangkat}}</td>
    </tr>
    <tr>
      <td>Tanggal pulang</td>
      <td>{{$order->tgl_pulang}}</td>
    </tr>
    <tr>
      <td>Alasan:</td>
      <td>{{$order->alasan}}</td>
    </tr>
    <tr>
      <td>Status:</td>
      @if($order->status == 'A')
      <td>Aprove</td>
      @elseif($order->status == 'D')
      <td>Decline</td>
      @else
      <td>Pending</td>
      @endif
    </tr>
    <tr>
      <td>Opsi:</td>
      <td>
        <a href="{{route('aprove', ['nama'=> Auth::user()->name, 'id'=> $order->id])}}">Aprove</a>
        <a href="{{route('decline', ['nama'=> Auth::user()->name, 'id'=> $order->id])}}">Decline</a>
      </td>
    </tr>
</div>
@endsection
