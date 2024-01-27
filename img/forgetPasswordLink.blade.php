@extends('Frontend.layout.app')
@section('content')
<main class="main-root">
    <div id="dsn-scrollbar">


        <div class="wrapper">
            <header class="back-top-cont"
                style="background-image: url('{{asset('fradent/assetss/img/home/sign-up-2-banner.png')}}');">
                <div class="container header-hero header-hero-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contenet-hero">
                                <h5>Love and Pawz</h5>
                                <h1>Reset Password</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="root-contact">
                <div class="container section-margin">
                    <div class="row dis-flex-center">
                        <div class="col-lg-6">
                            <div class="box-info-contact-2">
                                <img src="{{asset('fradent/assetss/img/home/sign-up-1.png')}}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-box drop-sh-sign">

                                <form class="form" method="POST" action="{{ route('reset.password.post') }}"
                                    data-toggle="validator">
                                    @csrf
                                    <!-- <div class="messages"></div> -->
                                    <div class="input__wrap controls">
                                        <div class="form-group">

                                            <div class="entry">
                                                <label>E-Mail
                                                    Address</label>
                                                <input id="email_address" type="text" name="email"
                                                    placeholder="Enter Your Email Address" required="required" autofocus
                                                    data-error="name is required.">
                                            </div>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">

                                            <div class="entry">
                                                <label>Password</label>
                                                <input id="password" type="password" name="password"
                                                    placeholder="Enter Your Password" required="required" autofocus
                                                    data-error="Password is required.">
                                            </div>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">

                                            <div class="entry">
                                                <label>Confirm
                                                    Password</label>
                                                <input id="password-confirm" type="password" name="password_confirmation"
                                                    placeholder="Enter Your Password" required="required" autofocus
                                                    data-error="Password is required.">
                                            </div>
                                            @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>



                                        <div class="image-zoom" data-dsn="parallax">
                                            <button type="submit">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @endsection