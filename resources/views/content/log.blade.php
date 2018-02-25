@extends('layouts.fream')
@section('content')
    <h1>Log</h1>
    <table>
      <tr>
        <th>Peminjam</th>
        <th>Pemberi Ijin</th>
        <th>Dari</th>
        <th>Tujuan</th>
        <th>Satatus</th>
        <th>Detail</th>
      </tr>
      @foreach ($logs as $log)
        <tr>
          <td>{{$log->nama_peminjam}}</td>
          <td>{{$log->nama_pengijin}}</td>
          <td>{{$log->dari}}</td>
          <td>{{$log->ke}}</td>
          @if($log->status == 'A')
          <td>Aprove</td>
          @else
          <td>Decline</td>
          @endif
          <td><a href="{{url('/dashboard/log', [$log->id])}}">Detail</a></td>
        </tr>
      @endforeach
    </table>
@endsection
