@extends('layouts.fream')
@section('content')
<div>
  <h1>Detail Log</h1>
    <table>
      <tr>
        <td>Nama peminjam:</td>
        <td>{{$log->nama_peminjam}}</td>
      </tr>
      <tr>
        <td>Nama pengijin:</td>
        <td>{{$log->nama_pengijin}}</td>
      </tr>
      <tr>
        <td>Keperluan:</td>
        <td>{{$log->keperluan}}</td>
      </tr>
      <tr>
        <td>Dari:</td>
        <td>{{$log->dari}}</td>
      </tr>
      <tr>
        <td>Tujuan:</td>
        <td>{{$log->ke}}</td>
      </tr>
      <tr>
        <td>Tanggal pergi:</td>
        <td>{{$log->tgl_perg}}</td>
      </tr>
      <tr>
        <td>Tanggal pulang:</td>
        <td>{{$log->tgl_pulang}}</td>
      </tr>
      <tr>
        <td>Status:</td>
        @if($log->status == 'A')
        <td>Aprove</td>
        @else
        <td>Decline</td>
        @endif
      </tr>
    </table>
</div>
@endsection
