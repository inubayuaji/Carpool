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
        <tr>
          <td>{{$order->name}}</td>
          <td>{{$order->keperluan}}</td>
          <td>{{$order->dari}}</td>
          <td>{{$order->ke}}</td>
          <td>{{$order->tgl_berangkat}}</td>
          <td>{{$order->tgl_pulang}}</td>
        </tr>
      @endforeach
    </table>
@endsection
