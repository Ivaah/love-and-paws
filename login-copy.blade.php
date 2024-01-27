<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>LoveAndPawzAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link href="{{asset('fradent/assets/img/favicon.png')}}" rel="icon">

    <link rel="stylesheet" href="{{asset('fradent/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('fradent/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fradent/assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('fradent/assets/css/feather.css')}}">

    <link rel="stylesheet" href="{{asset('fradent/assets/css/style.css')}}">
</head>

<body class="account-page">

    <div class="main-wrapper">

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-7 login-left">
                                    <img src="{{asset('fradent/assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">
                                </div>
                                <div class="col-md-12 col-lg-5 login-right">
                                    <div class="login-header">
                                        <h3>Login </h3>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group form-focus">
                                            <input name="email" type="email" class="form-control floating">
                                            <label class="focus-label">Email</label>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group form-focus">
                                            <input name="password" type="password" class="form-control floating">
                                            <label class="focus-label">Password</label>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-end">
                                            <a class="forgot-link" href="forgot-pasword.php">Forgot Password ?</a>
                                        </div>
                                        <button class="btn btn-primary w-100 btn-lg login-btn" type="submit" onclick="window.location.href = 'doctor-dashboard.php';">Login</button>

                                        <div class="text-center dont-have">Don’t have an account? <a href="{{url('register')}}">Register</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="footer-bottom">
                <div class="container-fluid">

                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="copyright-text text-center">
                                    <p class="mb-0">For your support and queries contact us here. <a href="#">Customer support</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('fradent/assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('fradent/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('fradent/assets/js/feather.min.js')}}"></script>

    <script src="{{asset('fradent/assets/js/script.js')}}"></script>
</body>


</html>