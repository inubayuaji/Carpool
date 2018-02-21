<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
  <title>Member</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div class="navbar">
    <a href="{{url('member')}}" class="navbar-banner f-l mg-l-130 mg-r-20">Carpool</a>
    <ul class="nav">
      <li><a href="{{url('member/order')}}">Booking Mobil</a></li>
      <li><a href="{{url('member/mobil')}}">List Mobil</a></li>
    </ul>
    <div class="mg-r-130 user-menu">
      <div class="notif"><a onclick="toggleNotif()"><i class="far fa-bell"></i></a></div>
      <div class="notif-list" id="notif-list"></div>
      <div class="user"><a onclick="toggleUser()"><spam class="name">Neme</spam><i class="fa fa-angle-down"></i></a></div>
      <div class="user-list" id="user-list"></div>
    </div>
  </div>
  <div class="container-page-x">
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
  <script type="text/javascript" src="{{asset('js/datepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDG-S-KJnHo18bDDZh1TExNLbFz4GEaKU&libraries=places&callback=initMap"></script>
</body>
</html>
