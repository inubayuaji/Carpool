@extends('layouts.fream')
@section('content')
  <div>
    <h1>Detail Mobil</h1>
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
        <td>{{$car->tipe}}</td>
      </tr>
      <tr>
        <td>Keluaran:</td>
        <td>{{$car->tgl_beli}}</td>
      </tr>
      <tr>
        <td>Kondisi Mesin:</td>
        <td>{{$car->kon_mesin}}</td>
      </tr>
    </table>
  </div>
@endsection
