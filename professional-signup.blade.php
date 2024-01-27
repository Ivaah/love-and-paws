@extends('Frontend.layout.app')
@section('content')

    <main class="main-root">
        <div id="dsn-scrollbar">


            <div class="wrapper">
                <header class="back-top-cont" style="background-image:url({{asset('fradent/assetss/img/home/sign-up-1-banner.png')}}">
                    <div class="container header-hero">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contenet-hero">
                                    <h5>Love and Pawz</h5>
                                    <h1>Sign Up</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


                <div class="root-contact">
                    <div class="container section-margin">


                        <div class="row mar-bottom-25">
                            <!--<div class="col-md-6 col-6">-->
                            <!--    <h3 class="text-right text-none-active-2"><a href="{{ route('pet_parent_signup') }}">For Pet-->
                            <!--            Parents</a></h3>-->
                            <!--</div>-->
                            <div class="col-md-6 col-6">
                                <h3 class="text-active-2"><a href="{{ route('professional_signup') }}">For Professionals</a>
                                </h3>
                            </div>
                        </div>




                        <div class="row dis-flex-center">
                            <div class="col-lg-6">
                                <div class="box-info-contact-2">
                                    <img src="{{asset('fradent/assetss/img/home/sign-up-2.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-box drop-sh-sign">
                                    <form id="contact-form" class="form" method="post" action="#"
                                        data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">
                                            <div class="form-group">

                                                <div class="entry">
                                                    <label>First Name</label>
                                                    <input id="form_name" type="text" name="name"
                                                        placeholder="Type Your First Name" required="required"
                                                        data-error="name is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">

                                                <div class="entry">
                                                    <label>Last Name</label>
                                                    <input id="form_name" type="text" name="name"
                                                        placeholder="Type Your Last Name" required="required"
                                                        data-error="name is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">

                                                <div class="entry">
                                                    <label>Mobile Number</label>
                                                    <input id="form_name" type="number" name="name"
                                                        placeholder="Type Your Mobile Number" required="required"
                                                        data-error="name is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="entry">
                                                    <label>Your Email Address?</label>
                                                    <input id="form_email" type="email" name="email"
                                                        placeholder="Type Your Email Address" required="required"
                                                        data-error="Valid email is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                             <div class="form-group">

                                                <div class="entry">
                                                    <label>Specialist In</label>
                                                    <input id="form_name" type="text" name="name"
                                                        placeholder="Specialist In" required="required"
                                                        data-error="field is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <!--<div class="form-group">-->
                                            <!--    <div class="entry">-->
                                            <!--        <label>Enter Your Password</label>-->
                                            <!--        <input id="form_email" type="password" name="email"-->
                                            <!--            placeholder="Enter Your Password" required="required"-->
                                            <!--            data-error="Valid email is required.">-->
                                            <!--    </div>-->
                                            <!--    <div class="help-block with-errors"></div>-->
                                            <!--</div>-->
                                            
                                             <div class="form-group">

                                                <div class="entry">
                                                    <label>Gender</label>
                                                   <select name="Gender" id="form_name">
                                                		<option selected="selected" value="0">Please Select a Gender </option>
                                                		<option value="1">Male</option>
                                                		<option value="2">Female</option>
                                                
                                                	</select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                             <div class="form-group">

                                                <div class="entry">
                                                    <label>Code</label>
                                                    <input id="form_name" type="text" name="code"
                                                        placeholder="Type Your Last Name" required="required"
                                                        data-error="Code is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="image-zoom" data-dsn="parallax">
                                                <button>Register</button>
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