<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>Uji coba</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div class="aside">
    <a href="#" class="aside-banner">Carpool</a>
      <ul class="nav-aside">
        <li><a href="#">List Pemintaan</a></li>
        <li><a href="#">List Mobil</a></li>
        <li><a href="#">Log Permintaan</a></li>
      </ul>
  </div>
  <div class="navbar mg-l-230 w-100p-m230">
    <a href="#" class="togle-menu f-l">&#9776;</a>
    <div class="mg-r-10 user-menu">
      <div class="notif"><a onclick="toggleNotif()"><i class="far fa-bell"></i></a></div>
      <div class="notif-list" id="notif-list"></div>
      <div class="user"><a onclick="toggleUser()"><spam class="name">Neme</spam><i class="fa fa-angle-down"></i></a></div>
      <div class="user-list" id="user-list"></div>
    </div>
  </div>
  <div class="container mg-l-230">
    <h1>List Permintaan</h1>
    <table>
      <tr>
        <th>Nama</th>
        <th>Keperluan</th>
        <th>Dari</th>
        <th>Tujuan</th>
        <th>Berankat</th>
        <th>Pulang</th>
        <th>Detail</th>
        <th>Opsi</th>
      </tr>
      @foreach($orders as $order)
        <tr>
          <td>{{$order->name}}</td>
          <td>{{$order->keperluan}}</td>
          <td>{{$order->dari}}</td>
          <td>{{$order->ke}}</td>
          <td>{{$order->tgl_berangkat}}</td>
          <td>{{$order->tgl_pulang}}</td>
        </tr>
      @endforeach
    </table>
  </div>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
