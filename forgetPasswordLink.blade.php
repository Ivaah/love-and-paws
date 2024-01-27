<!DOCTYPE html>
<html lang="en" class="h-100">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Barren - Simple Online Event Ticketing System</title>

    <link rel="icon" type="image/png" href="images/fav.png">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('fradent/vendor/unicons-2.0.1/css/unicons.css')}}" rel='stylesheet'>
    <link href="{{asset('fradent/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('fradent/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('fradent/css/night-mode.css')}}" rel="stylesheet">

    <link href="{{asset('fradent/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('fradent/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('fradent/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('fradent/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fradent/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
</head>


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">

                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required
                                        autofocus>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                                    Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password-confirm" class="form-control"
                                        name="password_confirmation" required autofocus>
                                    @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('fradent/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('fradent/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('fradent/vendor/OwlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('fradent/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('fradent/js/custom.js')}}"></script>
<script src="{{asset('fradent/js/night-mode.js')}}"></script>