@extends('layouts.fream')
@section('content')
<div>
    <table>
      <tr>
        <td>Nama peminjam:</td>
        <td>{{$log->request_name}}</td>
      </tr>
      <tr>
        <td>Nama pengijin:</td>
        <td>{{$log->supervisior_name}}</td>
      </tr>
      <tr>
        <td>Tanggal pergi:</td>
        <td>{{$log->tgl_pergi}}</td>
      </tr>
      <tr>
        <td>Tanggal pulang</td>
        <td>{{$log->tgl_pulang}}</td>
      </tr>
      <tr>
        <td></td>
        <td>{{$log->}}</td>
      </tr>
    </table>
</div>
@endsection
