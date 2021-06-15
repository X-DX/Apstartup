@extends('user/app')
@section('main-content')
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">
                <h2 class="color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                        <strong>FORGOT CREDENTIALS<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div>
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/skyline.jpg) !important;
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


    #header .row1,
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
<section  style="background-color: #579c87!important; background-image: url('user/img/pattern-light.png');">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card card-hero card-primary animated fadeInUp animation-delay-7">
                <div class="card-block">
                    <h1 class="color-primary text-center">Forgot Password ?</h1>
                    <form action="" name="login-form" id="" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <fieldset>
                            <div class="form-group">
                                <label for="" class="col-md-2 control-label">Username</label>
                                <div class="col-md-10">
                                    <input type="text" name="" value="" id="" class="form-control" placeholder="Username" autocomplete="off" />
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-raised btn-primary btn-block">
                            <i class="zmdi zmdi-key"></i> Get Password
                        </button>
                    </form>
                    <p><br /><strong>OR</strong><br /></p>
                    <h1 class="color-primary text-center">Forgot Username ?</h1>
                    <form action="" name="login-form1" id="" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <fieldset>
                            <div class="form-group">
                                <label for="txtUser" class="col-md-2 control-label">Email Address</label>
                                <div class="col-md-10">
                                    <input type="text" name="txtEmail" value="" id="" class="form-control" placeholder="Email Address" autocomplete="off" />
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-raised btn-primary btn-block">
                            <i class="zmdi zmdi-key"></i> Get Username
                        </button>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">
                            Password will be sent to your registered email address.
                        </p>
                        <a href="{{route('State-Start-Up-Registration')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                            <i class="zmdi zmdi-account-add"></i>Registration
                            <div class="ripple-container"></div>
                        </a>
                        <a href="{{route('login')}}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                            <i class="zmdi zmdi-lock no-mr ml-1"></i> Login
                            <div class="ripple-container"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection