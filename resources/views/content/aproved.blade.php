@extends('layouts.fream')
@section('content')
<h1>List Disetujui</h1>
  <table>
    <tr>
      <th>Nama</th>
      <th>Dari</th>
      <th>Tujuan</th>
      <th>Berangkat</th>
      <th>Pulang</th>
    </tr>
    @foreach($orders as $order)
    @if($order->status == 'A')
      <tr>
        <td>{{$order->nama}}</td>
        <td>{{$order->dari}}</td>
        <td>{{$order->ke}}</td>
        <td>{{$order->tgl_berangkat}}</td>
        <td>{{$order->tgl_pulang}}</td>
      </tr>
    @endif
    @endforeach
  </table>
@endsection
