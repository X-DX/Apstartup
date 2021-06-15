@extends('user/app')

@section('main-content')
<!-- <section class="divider4 parallax-section"></section> -->
<!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/other/registration status.jpg">
        <h2 class="info color-primary animated slideInUp animation-delay-8 "> Registration Status</h2>
    </section> -->
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">
                <h2 class="color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                        <strong>Registration Status<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div>
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/registration-status.jpg) !important;
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
<!-- Registration section -->
<div class="container">
    <div class="card card-hero animated fadeInUp animation-delay-7">
        <div class="card-block">
            <form action="#" name="frm1" id="frm1" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <!-- <div class="form-group"><label class="col-md-2 control-label">Application Type</label>
                        <div class="col-md-2">
                            <div class="radio radio-primary"><label><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked=""> Startup Recognition </label></div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio radio-primary"><label><input type="radio" name="optionsRadios" id="optionsRadios2" value="2"> Startup Incentive </label></div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio radio-primary"><label><input type="radio" name="optionsRadios" id="optionsRadios3" value="3"> Nodal Agency Recognition </label></div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio radio-primary"><label><input type="radio" name="optionsRadios" id="optionsRadios4" value="4"> Incubator Recognition </label></div>
                        </div>
                        <div class="col-md-2">
                            <div class="radio radio-primary"><label><input type="radio" name="optionsRadios" id="optionsRadios5" value="5"> Incubator Incentive </label></div>
                        </div>
                    </div> -->
                <div class="form-group wow fadeInUp animation-delay-16"><label for="inputName" class="col-md-2 control-label">Application No.</label>
                    <div class="col-md-8"><input type="text" name="m_APPLICATION_NO" value="" id="m_APPLICATION_NO" class="form-control" placeholder="Application No." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Application No.'" autocomplete="off" /></div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4 wow fadeInUp animation-delay-18"><button type="button" id="checkssbtoon" class="btn btn-raised btn-primary btn-block mt-4" onclick="checkTicketstatus();"> Check Status</button></div>
                    <div class="col-md-4 col-md-offset-2">&nbsp;</div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">&nbsp;</div>
                    <div class="col-md-6" id="divcontent"></div>
                    <div class="col-md-3">&nbsp;</div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-2">&nbsp;</div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Registration section -->
@endsection