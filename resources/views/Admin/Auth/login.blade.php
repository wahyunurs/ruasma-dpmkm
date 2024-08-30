<!DOCTYPE html>
<html>

<head>
  <title>Admin-Login</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/login_style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <img class="wave" src="{{ asset('admin_assets/img/blue.png') }}">
  <div class="container">
    <div class="img">
      <img src="{{ asset('admin_assets/img/bg.svg') }}">
    </div>
    <div class="login-content">
      <form action="{{ route('login.action') }}" method="POST" class="user">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <img src="{{ asset('admin_assets/img/avatar.svg') }}">
        <h2 class="title">Welcome Admin!</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Email</h5>
            <input name="email" type="email" type="text" class="input">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input name="password" type="password" type="password" class="input">
          </div>
        </div>
        <a href="{{ route('register') }}">Create an Account</a>
        <button type="submit" class="btn">Login</button>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('admin_assets/js/main.js') }}"></script>
</body>

</html>