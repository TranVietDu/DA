<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đặt lại mật khẩu</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">

</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                        <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="form-title">Nhập mật khẩu mới</h3>
                            @php
                                $token = $_GET['token'];
                                $email = $_GET['email'];
                            @endphp
                            @if (session('ms4'))
                            <div class="alert">
                                <p style="color: red;">{{session('ms4')}}</p>
                            </div>
                            @endif
                        <form method="POST" action="/dat-lai-mat-khau" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="token" value="{{$token}}">
                                <input type="hidden" name="email" value="{{$email}}">
                                <input type="password" name="password" placeholder="Nhập mật khẩu mới..."
                                 required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Xác nhận" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
