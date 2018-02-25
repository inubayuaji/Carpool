@extends('layouts.fream')
@section('content')
    <h1>List Permintaan</h1>
    <table>
      <tr>
        <th>Nama</th>
        <th>Keperluan</th>
        <th>Dari</th>
        <th>Tujuan</th>
        <th>Berankat</th>
        <th>Pulang</th>
        <th>Detail</th>
        <th>Opsi</th>
      </tr>
      @foreach($orders as $order)
      @if($order->status == 'P')
        <tr>
          <td>{{$order->nama}}</td>
          <td>{{$order->keperluan}}</td>
          <td>{{$order->dari}}</td>
          <td>{{$order->ke}}</td>
          <td>{{$order->tgl_berangkat}}</td>
          <td>{{$order->tgl_pulang}}</td>
          <td><a href="{{url('/dashboard/request', [$order->id])}}">Detail</a></td>
          <td>
            <a href="{{route('aprove', ['nama'=> Auth::user()->name, 'id'=> $order->id])}}">Aprove</a>
            <a href="{{route('decline', ['nama'=> Auth::user()->name, 'id'=> $order->id])}}">Decline</a>
          </td>
        </tr>
      @endif
      @endforeach
    </table>
@endsection
