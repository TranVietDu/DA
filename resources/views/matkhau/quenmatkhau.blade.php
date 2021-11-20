<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quên mật khẩu</title>
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
                        <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="form-title">Quên mật khẩu</h2>
                        <p class="form-title">Nhập email mà bạn đã sử dụng
                        để đăng kí tài khoản, hệ thống sẽ gửi lại thông tin để đặt lại mật khẩu.</p>
                        @if (session('ms1'))
                            <div class="alert">
                                <p style="color: red;">{{session('ms1')}}</p>
                            </div>
                            @endif
                            @if (session('ms2'))
                            <div class="alert">
                                <p style="color: rgb(9, 201, 41);">{{session('ms2')}}</p>
                            </div>
                            @endif
                        <form method="POST" action="/khoi-phuc-mat-khau" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <i class="fas fa-at" aria-hidden="true"></i>
                                <input type="email" name="email" value="{{old('email')}}" placeholder="Email"
                                 required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Gửi" />
                            </div>
                            <div class="form-group form-button">
                                <a href="/dangnhap" style="text-decoration: none;"><< Trở lại</a>
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
