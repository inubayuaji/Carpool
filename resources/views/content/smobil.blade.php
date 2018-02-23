@extends('layouts.fream')
@section('content')
  <div>
    <table>
      <tr>
        <td>Plat No:</td>
        <td>{{$car->plat_no}}</td>
      </tr>
      <tr>
        <td>Pabrik:</td>
        <td>{{$car->rakitan}}</td>
      </tr>
      <tr>
        <td>Type:</td>
        <td>{{$car->type}}</td>
      </tr>
      <tr>
        <td>Keluaran:</td>
        <td>{{$car->tgl_beli}}</td>
      </tr>
      <tr>
        <td>Kondisi Mesin:</td>
        <td>{{$car->kon_mesin}}</td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td><img src="" alt="mobil"></td>
      </tr>
    </table>
  </div>
@endsection
