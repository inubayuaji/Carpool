<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>Member</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div class="navbar">
    <a href="#" class="navbar-banner f-l mg-l-130 mg-r-20">Carpool</a>
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
    <a href="{{url('member/order')}}"><button>Order</button></a>
    <p>Or</p>
    <a href="{{url('member/mobil')}}"><button>List Mobil</button></a>
  </div>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
