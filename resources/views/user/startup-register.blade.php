@extends('user/app')
@section('main-content')
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">

                <h2 class="color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;">
                        <span class="wsite-text wsite-headline">
                            <strong>STARTUP REGISTRATION<font color="#59a3fc">.</font></strong>
                        </span>
                </h2>
            </div>
            <!-- <div class="banner-content">
                <h2 class="info color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 1.90em;"><span class="wsite-text wsite-headline">
                        <strong>STARTUP REGISTRATION<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div> -->
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/backAirplane.jpg) !important;
        background-repeat: no-repeat !important;
        background-position: 50% 50% !important;
        background-size: 100% !important;
        background-color: transparent !important;
        background: inherit;
    }

    @media screen and (min-width: 767px) .wsite-headline,
    .wsite-header-section .wsite-content-title {}

    .wsite-headline,
    .wsite-header-section .wsite-content-title {}

    d #header .row1,
    #banner {
        color: #fff;
    }

    .wsite-background {}

    #banner {
        width: 100%;
    }

    #banner .container {
        width: 100%;
        display: table;
    }

    .banner-content {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }

    .banner-content h2,
    .banner-content>div {
        margin: 0;
        padding: 0;
    }

    .banner-content h2 {
        font-weight: 200 !important;
    }

    .banner-content div.paragraph {
        margin-bottom: 20px;
        max-width: 800px;
    }

    .banner-content p {
        margin-bottom: 20px;
        max-width: 800px;
    }

    #banner .wsite-headline,
    .splash-page h2 {
        font-family: 'Open Sans';
        font-weight: 300 !important;
        font-size: 45px;
    }

    #banner .wsite-headline-paragraph,
    .splash-page #banner {
        font-size: 1.5em;
        color: rgba(255, 255, 255, 0.5);
    }
</style>

<!-- {{var_dump($errors)}} -->
<section  style="background-color: #579c87!important; background-image: url('user/img/pattern-light.png');">
<div class="container" >
    <div class="row" >
        <div class="col-md-6 col-md-offset-3" >
            <div class="card card-hero card-primary animated fadeInUp animation-delay-7">
                <div class="card-block">
                    <h5 class="color-primary text-center">Get everything you need to start up.</h5>
                    <form action="{{ url("/startup-register")}}" name="" id="" class="form-horizontal" method="post" accept-charset="utf-8">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="txtUser" class="col-md-2 control-label">FULLNAME</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" value="" id="" class="form-control" placeholder="Fullname" autocomplete="off" />
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtGmail" class="col-md-2 control-label">EMAIL</label>
                                <div class="col-md-10">
                                    <input type="email" name="email" value="" id="" class="form-control" placeholder="Email" />
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="txtPhone" class="col-md-2 control-label">PHONE</label>
                                <div class="col-md-10">
                                    <input type="tel" name="phone" value="" id="" class="form-control" placeholder="Phone" autocomplete="off" />
                                </div>
                                @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="txtPhone" class="col-md-2 control-label">PASSWORD</label>
                                <div class="col-md-10">
                                    <input type="password" name="password" value="" id="" class="form-control" placeholder="Password" autocomplete="off" />
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPhone" class="col-md-2 control-label">CONFIRM PASSWORD</label>
                                <div class="col-md-10">
                                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Password" autocomplete="off" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-2">
                                {{-- {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!} --}}
                                <input type="hidden" name="recaptcha_response" id="g-recaptcha-response" />
                            </div>
                        </div>
                        <input type="hidden" name="" id="" />
                        <button type="submit" class="btn btn-raised btn-primary btn-block">Continue
                            <i class="zmdi zmdi-lock no-mr ml-1"></i></button>

                    </form>

                    <div class="text-center mt-41">
                        <p class="text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">
                            Already have an
                            <span class="color-warning">account?</span>

                        </p>
                        <a href="{{route('login')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                            <i class="zmdi zmdi-account-add"></i>
                            Login
                            <div class="ripple-container"></div>
                        </a>
                        <!-- <a href="https://startuputtarakhand.com/startup-uttarakhand/forgotpassword" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                            <i class="zmdi zmdi-key"></i> Forgot Details ?
                            <div class="ripple-container"></div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<style>
    h1.color-primary.text-center {
        -webkit-tap-highlight-color: transparent;
        box-sizing: border-box;
        color: #ff9800;
        font-family: Roboto, "Noto Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 36px;
        font-weight: 300;
        line-height: 1.1;
        margin: 2rem 0px 1.5rem;
        margin-bottom: 10px;
        margin-top: 20px;
        outline: none;
        text-align: center;
        height: 39px;
        width: 475px;
    }

    @media print {
        h1.color-primary.text-center {
            background: 0px 0px !important;
            box-shadow: none !important;
            color: #000000 !important;
            text-shadow: none !important;
        }
    }
</style>
@endsection