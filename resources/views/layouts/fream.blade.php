<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
  <title>Uji coba</title>
</head>
<body>
  <div class="aside show" id="aside">
    <a href="#" class="aside-banner">Carpool</a>
      <ul class="nav-aside">
        <li><a href="{{url('/dashboard/request')}}">Request</a></li>
        <li><a href="{{url('/dashboard/order')}}">Order</a></li>
        <!--<li><a href="{{url('/dashboard/')}}">List Aprove</a></li>-->
        <li><a href="{{url('/dashboard/mobil')}}">List Mobil</a></li>
        <li><a href="{{url('/dashboard/log')}}">Log Permintaan</a></li>
      </ul>
  </div>
  <div class="navbar" id="navbar">
    <a onclick="toggleNav()" class="togle-menu f-l">&#9776;</a>
    <div class="mg-r-10 user-menu">
      <div class="notif"><a onclick="toggleNotif()" id="notif"><i class="far fa-bell"></i></a></div>
      <div class="notif-list" id="notif-list"></div>
      <div class="user"><a onclick="toggleUser()" id="user"><spam class="name">{{Auth::user()->name}}</spam><i class="fa fa-angle-down"></i></a></div>
      <div class="user-list" id="user-list">
        <a href="{{url('/logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>
      </div>
    </div>
  </div>
  <div class="container" id="container">
    @yield('content')
  </div>
  <script type="text/javascript" src="{{asset('js/datepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDG-S-KJnHo18bDDZh1TExNLbFz4GEaKU&libraries=places&callback=initMap"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
