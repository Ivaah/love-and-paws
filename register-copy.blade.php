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

<body class="account-page account-page-2">

    <div class="main-wrapper">

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-12 col-lg-5 login-right">
                                    <div class="login-header">
                                        <h2>Sign up</h2>
                                        
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Mobile</label>
                                            <input name="contact_no" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Your Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="text-right dont-have">I am already member <a href="{{url('/')}}">login</a></div>
                                        
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Register</button>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-7 col-lg-7 login-left">
                                    <img src="{{asset('fradent/assets/img/rejister.png')}}" class="img-fluid" alt="Doccure Login">
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
                                    <p class="mb-0">For your support and queries contact us here. <a href="#">Customer
                                            support</a></p>
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