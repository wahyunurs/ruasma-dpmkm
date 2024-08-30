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
            <form action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <h2 class="title">Register Admin</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input name="username" type="text" class="input @error('username')is-invalid @enderror">
                        @error('username')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input name="email" type="text" class="input @error('email')is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input name="password" type="password" class="input @error('password')is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password Confirmation</h5>
                        <input name="password_confirmation" type="password" class="input @error('password_confirmation')is-invalid @enderror">
                        @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <input type="submit" class="btn" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('admin_assets/js/main.js') }}"></script>
</body>

</html>