@extends('layouts.fream')
@section('content')
<div class="container-x">
    <div class="formulir">
      <h1>Order</h1>
      <form method="post" action="/member">
        {{csrf_field()}}
        <select name="keperluan">
          <option value="Rapat">Rapat</option>
          <option value="Jalan-jalan">Jalan-jalan</option>
          <option value="Meeting">Meeting</option>
        </select>
        <select name="jns_pinjaman">
          <option value="Mobil">Mobil</option>
          <option value="Mobil dan Supir">Mobil dan Supir</option>
        </select>
        <input type="text" placeholder="Plat no Mobil" name="plat_no">
        <input type="text" id="dari" class="mg-t-20" placeholder="Dari" name="dari">
        <input type="text" id="ke" placeholder="Ke" name="ke">
        <input type="text" id="berangkat" class="tanggal mg-t-20" placeholder="Berangkat" name="tgl_berangkat">
        <input type="text" id="pulang" class="tanggal" placeholder="Pulang" name="tgl_pulang">
        <textarea id="keterangan" class="mg-t-20" placeholder="Keterangan" name="alasan"></textarea>
        <input type="submit" class="btn-red" value="Order">
    </div>
    <div id="map" class="map"></div>
</div>
@endsection
