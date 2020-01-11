<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SOK - đăng nhập</title>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body class="sign-in">
<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="images/cm-logo.png" alt="">
                            </div><!--cm-logo end-->
                            <img src="images/cm-main-img.png" alt="">
                        </div><!--cmp-info end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Đăng nhập</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Đăng ký</a></li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">

                                <h3>Đăng nhập</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="email" type="email" placeholder="Email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email" autofocus>
                                                <i class="la la-user"></i>
                                            </div><!--sn-field end-->
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="password" type="password" placeholder="Mật khẩu"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="current-password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <ul class="sign-control p-0 float-none d-flex"
                                                style="justify-content: space-between;">
                                                <button class="m-0" type="submit" value="submit">Đăng nhập</button>
                                                <li data-tab="tab-5"><a href="#" title="">Quên mật khẩu?</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div><!--sign_in_sec end-->
                            <div class="sign_in_sec" id="tab-5">

                                <h3>Quên mật khẩu</h3>
                                <form method="POST" action="reset-password">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="email" type="email" placeholder="Email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email" autofocus>
                                                <i class="la la-user"></i>
                                            </div><!--sn-field end-->
                                        </div>

                                        <div class="col-lg-12 no-pdd">
                                            <button class="m-0" type="submit" value="submit">Lấy mật khẩu?</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--sign_in_sec end-->
                            <div class="sign_in_sec" id="tab-2">
                                <div class="signup-tab">
                                    <ul>
                                        <li data-tab="tab-3" class="current"><a href="#" title="">Sinh viên</a></li>
                                        <li data-tab="tab-4"><a href="#" title="">Công ty</a></li>
                                    </ul>
                                </div><!--signup-tab end-->
                                <div class="dff-tab current" id="tab-3">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="text" name="role" value="3" class="d-none">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{ old('name') }}" required
                                                           autocomplete="name"
                                                           autofocus placeholder="Họ & tên">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email"
                                                           value="{{ old('email') }}" required autocomplete="email"
                                                           placeholder="Email">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password"
                                                           required autocomplete="new-password" placeholder="Mật khẩu">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation" required
                                                           autocomplete="new-password" placeholder="Nhập lại mật khẩu">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small>Tôi đồng ý với điều khoản và quy định website.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Đăng ký</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
                                <div class="dff-tab" id="tab-4">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="text" name="role" value="2" class="d-none">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{ old('name') }}" required
                                                           autocomplete="name"
                                                           autofocus placeholder="Tên công ty">
                                                    <i class="la la-building"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email"
                                                           value="{{ old('email') }}" required autocomplete="email"
                                                           placeholder="Email">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password"
                                                           required autocomplete="new-password" placeholder="Mật khẩu">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation" required
                                                           autocomplete="new-password" placeholder="Nhập lại mật khẩu">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c3">
                                                        <label for="c3">
                                                            <span></span>
                                                        </label>
                                                        <small>Tôi đồng ý với điều khoản và quy định website.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Đăng ký</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
                            </div>
                        </div><!--login-sec end-->
                    </div>
                </div>
            </div><!--signin-pop end-->
        </div><!--signin-popup end-->
    </div><!--sign-in-page end-->
</div><!--theme-layout end-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

