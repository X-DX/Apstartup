@extends('user/app')

@section('main-content')
<!-- <section class="divider2 parallax-section"></section> -->
<!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/other/register.jpg">
    <h2 class="info color-primary animated slideInUp animation-delay-8 "> Register</h2>
   
</section> -->
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">
                <h2 class="color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                        <strong>Register<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div>
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/register.jpg) !important;
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

<!-- Register -->
<div class="container">
    <!-- register layout Start Here -->
    <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
        <div class="card-block">
            <!-- <div class="section-title ">
                <p class="info color-primary animated slideInUp animation-delay-8" style="font-size: 25px;">Please click the registration link. You need to be a registered user to access facilities of Arunachal Pradesh Startup.</p>
                </div> -->
            <div class="row wow fadeInUp animation-delay-18">
                <h5 class="color-warning" style="margin-left:200px;">Please click the registration link. You need to be a registered user to access facilities of Arunachal Pradesh Startup.</h5>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12 pull-left wow fadeInUp animation-delay-20">
                    <div class="register_box text-center">
                        <img src="{{asset('user/img/icons/register_1.svg')}}" alt="">
                        <h3 class="color-warning">Startups</h3>
                        <p>
                            Any startup looking for incubation and assistance under Arunachal Pradesh Start can register with us by clicking the below link. Before applying please <a href="#">click here</a> to know about the eligibility criteria.</p>
                        <!-- <a href="# class=" btn btn-default-black">Apply</a> -->
                        <a href="{{url('startup-register')}}"> <button class="btn btn-raised btn-primary btn-block mt-4">
                                <i class="zmdi zmdi-account-add"></i>
                                Apply
                            </button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register layout End Here -->
</div>

<!-- End Register -->


@endsection