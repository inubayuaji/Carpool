<html>
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>Log In</title>
</head>
<body>
    <img src="img/logo.png" alt="Telkom Logo" class="img-logo-lar mg-center mg-t-40"></img>
    <h1 class="text-center mg-t-40">KBM Online</h1>
    <h1 class="sub-title text-center">Untuk log in,masukkan NIP dan password dibawah:</h1>
    <form class="login mg-center mg-t-30" role="form" method="POST" action="{{url('/login')}}">
      {{csrf_field()}}
      <input type="text" placeholder="NIP" class="mg-t-10 w-350p" name="email" value="{{old('email')}}"></input>
      <input type="password" placeholder="Password" class="mg-t-10 w-350p" name="password"></input>
      <button class="btn-red mg-t-10">Log In</button>
    </form>
</body>
</html>
