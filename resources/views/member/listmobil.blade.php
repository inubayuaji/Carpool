<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
  <div class="container-page">
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
  </div>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
