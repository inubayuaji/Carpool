@extends('layouts.fream')
@section('content')
    <h1>Log</h1>
    <table>
      <tr>
        <th>Peminjam</th>
        <th>Pemberi Ijin</th>
        <th>Berangkat</th>
        <th>Pulang</th>
      </tr>
      @foreach ($logs as $log)
        <tr>
          <td>{{$log->request_name}}</td>
          <td>{{$log->supervisior_name}}</td>
          <td>{{$log->tgl_pergi}}</td>
          <td>{{$log->tgl_pulang}}</td>
        </tr>
      @endforeach
    </table>
@endsection
