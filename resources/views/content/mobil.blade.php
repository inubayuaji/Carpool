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
        <th>Edit</th>
        <th>Detail</th>
      </tr>
      @foreach ($cars as $car)
        <tr>
          <td>{{$car->plat_no}}</td>
          <td>{{$car->rakitan}}</td>
          <td>{{$car->tipe}}</td>
          <td>{{$car->tgl_beli}}</td>
          <td>{{$car->status}}</td>
          <td>{{$car->kon_mesin}}</td>
          <td><a href="{{url('/dashboard/mobil/edit', [$car->plat_no])}}">Edit</a></td>
          <td><a href="{{url('/dashboard/mobil', [$car->plat_no])}}">Detail</a></td>
        </tr>
      @endforeach
    </table>
@endsection
