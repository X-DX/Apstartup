@extends('user/app')

@section('main-content')
<!-- <section class="divider4 parallax-section"></section> -->
<!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/other/notification.jpg">
    <h2 class="info color-primary animated slideInUp animation-delay-8 "> State Government Notifications</h2>
</section> -->
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">
                <h2 class=" color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                        <strong>State Government Notifications<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div>
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/notification-3.jpg) !important;
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
<!-- state government notification -->
<div class="container">
    <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
        <div class="card-block">
            <!-- <h2 class="color-primary">Start-Up Guidelines</h2><br /> -->
            <!-- <h3 class="no-mt">Startup Policies </h3> -->
            <div class="row">
                <table class="table table-striped time animated wow fadeInLeft animation-delay-12">
                    <tbody>
                        <tr>
                            <td width="8%" style="padding:5px;">
                                <a href="user/doc/Promote Start-Up in the State.pdf" target="_blank">
                                    <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info" style="width: 40px;height: 40px;line-height: 45px;font-size: 20px;">
                                        <i class="zmdi zmdi-download"></i>
                                    </span>
                                </a>
                            </td>
                            <td>Nodal Department for Start-Up in Arunachal Pradesh .pdf </td>
                        </tr>

                        <tr>
                            <td width="8%" style="padding:5px;"><a href="user/doc/Investment Promotion.pdf" target="_blank"><span class="ms-icon ms-icon-circle ms-icon-xxlg color-info" style="width: 40px;height: 40px;line-height: 45px;font-size: 20px;"><i class="zmdi zmdi-download"></i></span></a></td>
                            <td>Single Point of Contact for Investment Promotion in Arunachal Pradesh .pdf </td>
                        </tr>

                        <tr>
                            <td width="8%" style="padding:5px;"><a href="user/doc/EODB.pdf" target="_blank"><span class="ms-icon ms-icon-circle ms-icon-xxlg color-info" style="width: 40px;height: 40px;line-height: 45px;font-size: 20px;"><i class="zmdi zmdi-download"></i></span></a></td>
                            <td>Implementation Ease Of Doing Business (EoDB) in Arunachal Pradesh .pdf </td>
                        </tr>

                        <tr>
                            <td width="8%" style="padding:5px;"><a href="user/doc/Guidelines of EODB.pdf" target="_blank"><span class="ms-icon ms-icon-circle ms-icon-xxlg color-info" style="width: 40px;height: 40px;line-height: 45px;font-size: 20px;"><i class="zmdi zmdi-download"></i></span></a></td>
                            <td>Guidelines for Implementation of Central Inspection System under Ease of Doing Business (EODB) .pdf </td>
                        </tr>

                    </tbody>
                </table>
            </div>


            <hr style="margin:5px 5px 5px 5px;">
        </div>
    </div>
</div>

<!-- state government notification -->
@endsection