@extends('layouts.fream')
@section('content')
<div>
  <h1>Edit kondisi {{$plat_no}}</h1>
  <form action="/dashboard/mobil" method="post">
    {{csrf_field()}}
    <textarea name="kon_mesin" class="edit"></textarea>
    <input type="hidden" name="plat_no" value="{{$plat_no}}">
    <input type="submit" value="Simpan" class="mg-l-10">
  </form>
</div>
@endsection
