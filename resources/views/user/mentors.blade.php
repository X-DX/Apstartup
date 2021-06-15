@extends('user/app')

@section('main-content')
<!-- <section class="divider5 parallax-section"></section> -->
<!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/other/mentor.jpg">
    <h2 class="info color-primary animated slideInUp animation-delay-8 "> MENTORS</h2>
</section> -->
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">
                <h2 class="color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                        <strong>MENTORS<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div>
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/mentor.jpg) !important;
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
<!-- resgisted mentors  -->
<div class="container">
    <div class="card card-hero animated slideInUp animation-delay-8">
        <div class="card-block">
            <!-- <div class="form-group" style="margin-top:-20px;">
                <label for="inputGen" class="col-md-2 control-label">
                    <strong>Select Categories</strong>
                </label>
                <div class="col-md-4">
                    <select name="STARTUP_TYPEID" id="STARTUP_TYPEID" class="form-control selectpicker" onChange="getMentorsList();">
                        <option value="">---Select from list---</option>
                        <option value="1">Ecommerce</option>
                        <option value="9">Education</option>
                        <option value="5">Entertainment</option>
                        <option value="17">Food Processing</option>
                        <option value="29">Goods and Services Tax</option>
                        <option value="20">Handicraft Sector</option>
                        <option value="19">Handloom Sector</option>
                        <option value="2">HealthCare</option>
                        <option value="15">Human Resource</option>
                        <option value="30">Income Tax</option>
                        <option value="18">Information Technology</option>
                        <option value="16">Legal</option>
                        <option value="38">Travel & Tourism</option>
                    </select>
                </div>
                <label for="inputGen" class="col-md-2 control-label"></label><label for="inputGen" class="col-md-2 control-label"><strong>No. of Mentors</strong></label>
                <div class="col-md-2" id="mentorsdiv" style="padding-top:10px;">0</div>
            </div> -->
            <div style="height:10px;"></div>
            <div class="form-group">
                <div class="row masonry-container" id="divcontent">
                    <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                        <div class="card card-info wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-info ms-hero-img-city">
                                <img src="user/img/user.png" class="img-avatar-circle" alt="" />
                                <input type="hidden" name="" id="" value="" />
                                <input type="hidden" name="" id="" value="" />
                            </div>
                            <div class="card-block pt-4 text-center">
                                <h3 class="color-warning">Shri Dr. Subhrangshu Sanyal</h3>
                                <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;@gmail.com</p>
                                <p>CEO-IIMCIP <br /> Steering Committee, Strategic Direction</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-raised animated fadeInRight animation-delay-24" data-toggle="" data-target="" onclick="">Connect</a>
                                    <a href="" target="_blank" style="float:right;" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                        <div class="card card-info wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-info ms-hero-img-city">
                                <img src="user/img/user.png" class="img-avatar-circle" alt="" />
                                <input type="hidden" name="" id="" value="" />
                                <input type="hidden" name="" id="" value="" />
                            </div>
                            <div class="card-block pt-4 text-center">
                                <h3 class="color-warning">Shri Pranjal Konwar</h3>
                                <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;@rediffmail.com</p>
                                <p>COO-North East <br /> Operational Guidance , Interface with Government of Arunachal Pradesh</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-raised animated fadeInRight animation-delay-24" data-toggle="" data-target="" onclick="">Connect</a>
                                    <a href="" target="_blank" style="float:right;" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                        <div class="card card-info wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-info ms-hero-img-city">
                                <img src="user/img/user.png" class="img-avatar-circle" alt="" />
                                <input type="hidden" name="" id="" value="" />
                                <input type="hidden" name="" id="" value="" />
                            </div>
                            <div class="card-block pt-4 text-center">
                                <h3 class="color-warning">Shri Gaurav Kapoor</h3>
                                <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;@gmail.com</p>
                                <p>Head-New Initiatives <br />Supporting investor connect, Market connect, Expect connect</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-raised animated fadeInRight animation-delay-24" data-toggle="" data-target="#" onclick="">Connect</a>
                                    <a href="" target="_blank" style="float:right;" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                        <div class="card card-info wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-info ms-hero-img-city">
                                <img src="user/img/user.png" class="img-avatar-circle" alt="" />
                                <input type="hidden" name="" id="" value="" />
                                <input type="hidden" name="" id="" value="" />
                            </div>
                            <div class="card-block pt-4 text-center">
                                <h3 class="color-warning">Shri Debapratim Das</h3>
                                <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;@rediffmail.com</p>
                                <p style="margin-bottom: 37px;">Head-Capacity Building<br />Formulating Boot Camps, Capacity Building and Mentoring Programs</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-raised animated fadeInRight animation-delay-24" data-toggle="" data-target="#" onclick="">Connect</a>
                                    <a href="" target="_blank" style="float:right;" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                        <div class="card card-info wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-info ms-hero-img-city">
                                <img src="user/img/user.png" class="img-avatar-circle" alt="" />
                                <input type="hidden" name="" id="" value="" />
                                <input type="hidden" name="" id="" value="" />
                            </div>
                            <div class="card-block pt-4 text-center">
                                <h3 class="color-warning">Shri Namami Ghosh</h3>
                                <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;@rediffmail.com</p>
                                <p>Head-Portfolio Management<br />Supporting Portfolio build up, Startup assessment, Mentoring Capacity building</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-raised animated fadeInRight animation-delay-24" data-toggle="" data-target="#" onclick="">Connect</a>
                                    <a href="#" target="_blank" style="float:right;" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                        <div class="card card-info wow zoomInUp animation-delay-7">
                            <div class="ms-hero-bg-info ms-hero-img-city">
                                <img src="user/img/user.png" class="img-avatar-circle" alt="" />
                                <input type="hidden" name="" id="" value="" />
                                <input type="hidden" name="" id="" value="" />
                            </div>
                            <div class="card-block pt-4 text-center">
                                <h3 class="color-warning">Shri Hemant Borah</h3>
                                <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;@rediffmail.com</p>
                                <p>Head-Ecosystem Development<br />Supporting academia connect, local ecosystem build up, Webinars, Idea clinics</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-raised animated fadeInRight animation-delay-24" data-toggle="" data-target="#" onclick="">Connect</a>
                                    <a href="#" target="_blank" style="float:right;" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <hr class="dotted">
            </div>
        </div>
    </div>
</div>


<!-- end registed mentors -->
@endsection