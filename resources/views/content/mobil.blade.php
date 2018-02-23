@extends('layouts.fream')
@section('content')
    <h1>List Mobil</h1>
    <table>
      <tr>
        <th>Plat no</th>
        <th>Manufactur</th>
        <th>Type</th>
        <th>Keluarana</th>
        <th>Dipinjam</th>
        <th>Kondisi</th>
      </tr>
      @foreach ($cars as $car)
        <tr>
          <td>{{$car->plat_no}}</td>
          <td>{{$car->rakitan}}</td>
          <td>{{$car->type}}</td>
          <td>{{$car->tgl_beli}}</td>
          <td>{{$car->dipinjam}}</td>
          <td>{{$car->kon_mesin}}</td>
        </tr>
      @endforeach
    </table>
@endsection
