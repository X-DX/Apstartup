@extends('user/app')

@section('main-content')


<!-- Carousel -->
<header class="ms-hero ms-hero-material">
    <div id="carousel-header" class="carousel carousel-header slide" data-ride="carousel" data-interval="50000" style="z-index:9999;padding:0rem 0 1rem;">
        <div class="carousel-inner" role="listbox">

            <!-- part 1 -->
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md8">
                            <div class="carousel-caption">
                                <div class="ms-hero-material-text-container">
                                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Welcome To<strong> Startup Arunachal Pradesh</strong></h1>
                                        <h2 class="animated fadeInLeft animation-delay-18">Chief Minister's <span class="color-warning">Message</span></h2>
                                    </header>
                                    <blockquote class="blockquote-color withripple animated fadeInRight animation-delay-19" style="padding: 1rem 1rem;">
                                        <p style="font-size:21px;">Arunachal Pradesh present's host of opportunities, incentives and support to Startups. The Government is continuously endeavouring to build a conducive environment for entrepreneurship in the state.</p><br />
                                        <footer style="color:#fff;">&nbsp;&nbsp;Shri Pema Khandu<br /><cite title="Source Title">Hon'ble Chief Minister of Arunachal Pradesh</cite></footer>
                                    </blockquote><br /><br /><br /><br />
                                </div>
                                @auth
                                @else
                                <div class="ms-hero-material-buttons text-right">
                                    <div class="ms-hero-material-buttons text-right">
                                        <a href="{{route('login')}}" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                                            <i class="zmdi zmdi-account"></i> Login Here
                                            <div class="ripple-container"></div>
                                        </a>
                                        <a href="{{route('State-Start-Up-Registration')}}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                                            <i class="zmdi zmdi zmdi-account-add"></i> Register
                                            <div class="ripple-container"></div>
                                        </a>
                                    </div>
                                </div>
                            @endauth
                            </div>
                        </div>
                        <div class="col-lg-5 col-md4"><img src="user/img/navbar/cm2.png" class="img-responsive center-block text-center animated zoomInDown animation-delay-5" alt="" style="height: 442px;"/> </div>
                    </div>
                </div>
            </div>
            <!-- end part 1 -->

            <!-- part 2 -->
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md8">
                            <div class="carousel-caption">
                                <div class="ms-hero-material-text-container">
                                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Welcome To<strong> Startup Arunachal Pradesh</strong></h1>
                                        <h2 class="animated fadeInLeft animation-delay-18">Definition of <span class="color-warning">Start-Up</span></h2>
                                    </header>
                                    <ul class="ms-hero-material-list">
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-18"><span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="zmdi zmdi-airplane"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-19"> Up to ten years from the date of its incorporation/registration*,</div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-20"><span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="zmdi zmdi-bike"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-21"> If its turnover for any of the financial years has not exceeded Rupees 25 Crore or </div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-22"><span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="zmdi zmdi-album"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-23"> It is working towards innovation, development, deployment or commercialization of <a href="#" class="color-success">Read More..</a></div>
                                        </li>
                                    </ul>
                                    <!-- <div class="ms-hero-material-buttons text-right">
                                                <div class="ms-hero-material-buttons text-right"><a href="#" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="zmdi zmdi-account"></i> Login Here <div class="ripple-container"></div></a>
                                                    <a href="#" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="zmdi zmdi zmdi-account-add"></i> Register
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </div>
                                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md4"><img src="user/img/navbar/startup_banner1.png" class="img-responsive center-block text-center animated zoomInDown animation-delay-5" alt="" style="height: 442px;"/> </div>
                    </div>
                </div>
            </div>
            <!-- end part 2 -->

            <!-- part 3 apstartup-->
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md8">
                            <div class="carousel-caption">
                                <div class="ms-hero-material-text-container">
                                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Dream Big<strong> Aim High</strong></h1>
                                        <h2 class="animated fadeInLeft animation-delay-18">Defination of <span class="color-warning">Start-Up</span></h2>
                                    </header>
                                    <ul class="ms-hero-material-list">
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-18"><span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="zmdi zmdi-flag"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-19"> Government of Arunachal Pradesh is committed to supporting its young minds,</div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-20"><span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="zmdi zmdi-tv-play"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-21"> and have been providing support in various forums and formats. </div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-22"><span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="zmdi zmdi-toys"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-23">It is working towards innovation, development, deployment or commercialization of <a href="#" class="color-success">Read More..</a></div>
                                        </li>
                                    </ul>
                                    <!-- <div class="ms-hero-material-buttons text-right">
                                                <div class="ms-hero-material-buttons text-right"><a href="#" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="zmdi zmdi-account"></i> Login Here <div class="ripple-container"></div></a>
                                                    <a href="http://apstartup.in/arpstartup/" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="zmdi zmdi zmdi-account-add"></i> Register
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </div>
                                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md4"><img src="user/img/navbar/slider3.png" class="img-responsive center-block text-center animated zoomInDown animation-delay-5" alt="" style="height: 442px;"/> </div>
                    </div>
                </div>
            </div>
            <!-- end part 3 -->




            <!-- part 4 -->

            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md8">
                            <div class="carousel-caption">
                                <div class="ms-hero-material-text-container">
                                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Art is there, <strong> Artist needs to realise.</strong></h1>
                                        <h2 class="animated fadeInLeft animation-delay-18">Defination of <span class="color-warning">Start-Up</span></h2>
                                    </header>
                                    <ul class="ms-hero-material-list">
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-18"><span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="zmdi zmdi-flag"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-19"> All the tribes of Arunachal Pradesh have their own unique Arts and Artifacts,</div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-20"><span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="zmdi zmdi-tv-play"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-21"> which needs to be tapped and help them monetize it. </div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-22"><span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="zmdi zmdi-toys"></i></span></div>
                                            <div class="ms-list-text animated fadeInRight animation-delay-23">Organisation that helps startup to grow by providing services such as management training or office space. <a href="#" class="color-success">Read More..</a></div>
                                        </li>
                                    </ul>
                                    <!-- <div class="ms-hero-material-buttons text-right">
                                                <div class="ms-hero-material-buttons text-right"><a href="#" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="zmdi zmdi-account"></i> Login Here <div class="ripple-container"></div></a>
                                                    <a href="http://apstartup.in/arpstartup/" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="zmdi zmdi zmdi-account-add"></i> Register
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </div>
                                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md4"><img src="user/img/navbar/slider2.png" class="img-responsive center-block text-center animated zoomInDown animation-delay-5" alt=""  style="height: 442px;"/> </div>
                    </div>
                </div>
            </div>

            <!-- end part 4 -->

        </div>
        <a href="#carousel-header" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button" data-slide="prev">
            <i class="zmdi zmdi-chevron-left"></i>
        </a>
        <a href="#carousel-header" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button" data-slide="next">
            <i class="zmdi zmdi-chevron-right"></i>
        </a>
    </div>
</header>
<!--End Carousel -->
<!-- ENTREPRENEURSHIP Section  -->
<section class="about-sec parallax-section" id="" style="background-color: #579c87!important; background-image: url('user/img/pattern-light.png');">
    <div class="container-fluid">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3 class=" wow fadeInUp animation-delay-2"><span style="text-transform: none;"></span>Entrepreneurship Development Program</h3>
            </div>
            <div class="col-md-6" style="color: #fff;">
                <h2 class=" wow fadeInUp animation-delay-2">आज हमारा उद्देश्य एक कुशल भारत बनाना हैं - नरेंद्र मोदी </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!--div class="col-md-3">
              <img src="img/arunachal.png" height="100" alt="Arunachal Pradesh">
            <h2><b style="color: #ff6a00;font-size: 80%;">Startup Challenges</b><br><small style="font-size: 40%;">in Arunachal Pradesh</small></h2>
          </div-->
            <div class="col-md-6">
                <p class=" wow animated fadeInLeft animation-delay-2"><b style="color: #ff9800; font-size: 120%;">
                        The Program:
                    </b>
                    <br>
                <p class=" wow animated fadeInLeft animation-delay-2" style="color: #fff;">Arunachal Pradesh Entrepreneurship Development Program is an initiative by the Department of Finance, Planning and Investment, Govt. of Arunachal Pradesh, in association
                    with IIM Calcutta Innovation Park, aimed at developing a vibrant entrepreneurial ecosystem in the state and facilitating the aspiring entrepreneurs with comprehensive support and nurturing towards reinforcing a self-reliant society
                    and a sustainable economy.</p>
                </p>
                <a href="#" class="btn btn-success btn-raised wow animated fadeInLeft animation-delay-2 mr-2" data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi zmdi-book"></i> Know More
                    <div class="ripple-container"></div>
                </a>
            </div>
            <div class="col-md-6">
                <p class=" wow animated fadeInRight animation-delay-2"><b style="color: #ff9800;font-size: 120%;">Major Initiatives:</b></p>
                <p class=" wow animated fadeInRight animation-delay-2" style="color: #fff;">The Program is rolled out in four stages:
                <ul class=" wow animated fadeInRight animation-delay-2" style="color: #fff;">
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Arunachal Pradesh Entrepreneurship Challenge</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Pre-Incubation</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Incubation</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Livelihood Accelerator</li>
                </ul>
                </>
                <a href="http://apstartup.in/arpstartup/" target="_blank" class="btn btn-warning btn-raised wow animated fadeInRight animation-delay-2 mr-2" style="margin-top: 25px;"><i class="zmdi zmdi zmdi-account-add"></i> REGISTER
                    <div class="ripple-container"></div>
                </a>

            </div>
        </div>
    </div>
</section>
<!-- End ENTREPRENEURSHIP Section  -->

<!-- Model -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">ARUNACHAL PRADESH ENTREPRENEURSHIP DEVELOPMENT PROGRAM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-danger">About the program:</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Land of Rising Sun in India, Arunachal Pradesh is home to motley tribes and a jaw dropping number of
                    flora and fauna. The state is known for its picturesque landscapes, unique handloom and handicraft, historical hotspots, distinctive agro-products, music and dance, and industrious people. Despite having the requisite resources,
                    only a handful of entrepreneurs in the state have been able to thrive in business. Many brilliant business ideas have remained constricted by local challenges, whereas a good number of the local population is struggling to earn
                    livelihood due to limited employment opportunities. </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arunachal Pradesh Entrepreneurship Development Program strives to catalyse an inclusive solution to these
                    challenges by developing a vibrant entrepreneurial ecosystem in the state and facilitating the aspiring entrepreneurs with comprehensive support and nurturing. Aimed at consolidating the existing resources and youths of the state
                    for a self-reliant society and a sustainable economy, this state initiative is committed to creating a strong entrepreneurial culture in Arunachal Pradesh.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IIM Calcutta Innovation Park has been onboarded as the Knowledge Partner for the initiative to kick start
                    the entrepreneurship development in the state.</p>
                <p><button class="btn btn-warning"><a href="http://apstartup.in/arpstartup/" style="color: #fff;text-decoration: none;">Register Now <i class="fa fa-angle-double-right"></i></a></button></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Secondary</button>
            </div>
        </div>
    </div>
</div> -->
<!-- end model -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title text-info">ARUNACHAL PRADESH ENTREPRENEURSHIP DEVELOPMENT PROGRAM</h5>
            </div>
            <hr>
            <div class="modal-body">
                <h5 class="text-danger">About the program:</h5>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Land of Rising Sun in India, Arunachal Pradesh is home to motley tribes and a jaw dropping number of
                    flora and fauna. The state is known for its picturesque landscapes, unique handloom and handicraft, historical hotspots, distinctive agro-products, music and dance, and industrious people. Despite having the requisite resources,
                    only a handful of entrepreneurs in the state have been able to thrive in business. Many brilliant business ideas have remained constricted by local challenges, whereas a good number of the local population is struggling to earn
                    livelihood due to limited employment opportunities. </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arunachal Pradesh Entrepreneurship Development Program strives to catalyse an inclusive solution to these
                    challenges by developing a vibrant entrepreneurial ecosystem in the state and facilitating the aspiring entrepreneurs with comprehensive support and nurturing. Aimed at consolidating the existing resources and youths of the state
                    for a self-reliant society and a sustainable economy, this state initiative is committed to creating a strong entrepreneurial culture in Arunachal Pradesh.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IIM Calcutta Innovation Park has been onboarded as the Knowledge Partner for the initiative to kick start
                    the entrepreneurship development in the state.</p>
            </div>
            <hr>
            <div class="modal-header">
                <h5 class="modal-title text-info">ARUNACHAL PRADESH ENTREPRENEURSHIP DEVELOPMENT PROGRAM</h5>
            </div>
            <div class="modal-body">
                <h5 class="text-danger">Major Initiatives:</h5>
                <ul>
                    <li>
                        <h5 class="text-success"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Arunachal Pradesh Entrepreneurship Challenge</h5>Arunachal Pradesh Entrepreneurship Challenge is the first step to identifying, promoting, supporting, and nurturing sustainable and locally relevant business ideas and entrepreneurs.
                    </li>
                    <li>
                        <h5 class="text-success"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Pre-Incubation</h5>The 9-month Pre-Incubation Program provides solid, ground level support to these budding entrepreneurs to convert their idea or prototypes into products/services with substantial potential for commercialization.
                    </li>
                    <li>
                        <h5 class="text-success"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Incubation</h5>The 9-month Incubation Program is designed for entrepreneurs with a Proof of Concept or those in the early revenue stage to help them commercialize or scale-up their ventures.
                    </li>
                    <li>
                        <h5 class="text-success"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Livelihood Accelerator</h5>The Livelihood Accelerator Program is a focused program of a longer duration, aimed at developing micro-entrepreneurs.
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<style>
    .model-header {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        letter-spacing: normal;
        color: #212529;
        background-color: #fff;
        box-shadow: none;
        border-radius: 4.8px 4.8px 0px 0px;
    }

    .model-title,
    .text-info {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;
        line-height: 30px;
        text-align: center;
        letter-spacing: normal;
        color: #17a2b8;
        background-color: #ffffff;
    }

    .text-danger {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 25px;
        line-height: 24px;
        text-align: center;
        letter-spacing: normal;
        color: #dc3545;
        background-color: #ffffff;

    }

    .p {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        letter-spacing: normal;
        color: #212529;
        background-color: #ffffff;
    }
    .ul{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        letter-spacing: normal;
        color: #212529;
        background-color: #ffffff;
    }
    .li{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        letter-spacing: normal;
        color: #212529;
        background-color: #ffffff;
    }
    .text-success{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;
        line-height: 24px;
        text-align: left;
        letter-spacing: normal;
        color: #28a745;
        background-color: #ffffff;
    }
    .btn, .btn-default{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 16px;
        line-height: 24px;
        text-align: center;
        letter-spacing: normal;
        color: #ffffff;
        background-color: #6c757d;
    }
</style>




<!-- paraxel photo -->

<!-- <section class="divider1 parallax-section"></section> -->
<!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/mechuka-bg.jpg"></section> -->

<!-- End paraxel photo -->

<!-- ELIGIBILITY================================================== -->
<section class="eligibility parallax-section" id="eligibility" style=" background-image: url('user/img/pattern-light.png');">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3 class=" wow animated fadeInLeft animation-delay-2"><span></span> Arunachal Pradesh Entrepreneurship Challenge</h3>
            </div>
            <div class="col-md-6" style="color: #fff;">
                <h2 class=" wow animated fadeInRight animation-delay-2">An endeavour to make Arunachal Pradesh<br>self-reliant.</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <p class=" wow fadeInUp animation-delay-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arunachal Pradesh Entrepreneurship Challenge is the first step to identifying, promoting, supporting, and nurturing
            sustainable and locally relevant business ideas and entrepreneurs. Aimed at giving aspiring entrepreneurs a chance to show what their ideas and innovations are capable of, the Challenge invites applications from the budding entrepreneurs
            and innovators from the state.</p>
        <p class=" wow fadeInUp animation-delay-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following a thorough evaluation and screening of the applications, 50 top entrepreneurs are selected for the Incubation
            and Pre-Incubation programs based on their business stage. Top 10 entrepreneurs will be awarded upto <i class="fa fa-inr"></i> 5 Lakhs and the next 40 entrepreneurs will be awarded upto <i class="fa fa-inr"></i> 4 Lakhs.</p>
    </div>
</section>
<!-- End ELIGIBILITY================================================== -->

<!-- Objectives================================================== -->

<section class="iq-features" id="objective" style="background-color: #579c87!important; background-image: url('user/img/pattern-light.png');">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3 class=" wow animated fadeInLeft animation-delay-2"><span></span> Objective</h3>
            </div>
            <div class="col-md-6">
                <h2 class=" wow animated fadeInRight animation-delay-2">Every great idea needs a boost to set in motion. </h2>
            </div>
        </div>
        <div class="row align-items-center">
            <!--div class="col-lg-3 col-md-12"></div-->
            <div class="col-lg-6" style="float:right;">
                <div class="holderCircle">
                    <div class="round"></div>
                    <div class="dotCircle">
                        <span class="itemDot active itemDot1" data-tab="1">
                            <i class="fa fa-group" aria-hidden="true"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot2" data-tab="2">
                            <i class="fa fa-rocket"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot3" data-tab="3">
                            <i class="fa fa-money"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot4" data-tab="4">
                            <i class="fa fa-key"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot5" data-tab="5">
                            <i class="fa fa-forumbee"></i>
                            <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot6" data-tab="6">
                            <i class="fa fa-briefcase"></i>
                            <span class="forActive"></span>
                        </span>
                    </div>
                    <div class="contentCircle">
                        <div class="CirItem title-box active CirItem1">
                            <h2 class="title"><span>Enable</span></h2>

                            <p style="color: #fff;">Enable the creation of livelihood.</p>
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="CirItem title-box CirItem2">
                            <h2 class="title"><span>Create </span></h2>
                            <p style="color: #fff;">Create an inclusive entrepreneurial ecosystem spanning across the state by enabling wannabe entrepreneurs.</p>
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="CirItem title-box CirItem3">
                            <h2 class="title"><span>Build</span></h2>
                            <p style="color: #fff;">Build a nurturing ecosystem that supports entrepreneurship.</p>
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="CirItem title-box CirItem4">
                            <h2 class="title"><span>Motivate</span></h2>
                            <p style="color: #fff;">Motivate youth to become Job Givers rather than Job Seekers.</p>
                            <i class="fa fa-key"></i>
                        </div>
                        <div class="CirItem title-box CirItem5">
                            <h2 class="title"><span>Identify</span></h2>
                            <p style="color: #fff;">Identify promising entrepreneurs from the state and support them to scale from idea stage to successful businesses.</p>
                            <i class="fa fa-forumbee"></i>
                        </div>
                        <div class="CirItem title-box CirItem6">
                            <h2 class="title"><span>Stories</span></h2>
                            <p style="color: #fff;">Create success stories which can be Role Model for the youth.</p>
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <br>
                <h3 class=" wow fadeInUp animation-delay-12" style="color:orange;"><b>Objectives</b></h3>

                <p class=" wow fadeInUp animation-delay-2" style="color:white;">The key objectives of this program are as follows:
                <ul class=" wow fadeInUp animation-delay-2" style="color:white;">
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Enable Livelihood creation</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Create an inclusive entrepreneurial ecosystem spanning across the state by enabling the aspiring entrepreneurs </li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Build a nurturing ecosystem that supports entrepreneurship</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Motivate the youths of the state to become job givers than being job seekers</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Identify promising entrepreneurs from the state and support them to scale from idea stage to successful business ventures</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Create success stories that can become role models for the youth</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;To promote a spirit of entrepreneurship in Arunachal Pradesh and create a thriving and respectful environment for the entrepreneurs through Government recognitions, easy support accessibility, and creation of numerous opportunities
                        for them</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;To provide a state-wide inclusive platform for individuals and teams to think entrepreneurially towards kick starting an entrepreneurial culture in the state</li>
                    <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Highlight and showcase existing and emerging entrepreneurs from Arunachal Pradesh</li>
                </ul>
                </p>


            </div>
        </div>
    </div>
</section>

<!--  Start Here -->
<div class="upcoming_events_index bg-accent" style="margin-bottom: -183px; background-color:#464646; background-image: url('user/img/pattern-light.png');"">
    <div class=" container">
    <!-- <div class="section-title">
            <h3>Upcoming events</h3>
        </div> -->
    <div class="row">
        <ul class="event-list" style="margin-top: 37px;">
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="time animated wow fadeInLeft animation-delay-2">
                    <span class="day">12</span>
                    <span class="month">February</span>
                    <span class="year">2021</span>
                </div>
                <div class="info animated wow fadeInLeft animation-delay-2">
                    <h2 class="title">
                        <a href="#" title="Seeding Kerala 2021">Arunachal Pradesh Statup 2021</a>
                    </h2>
                    <p class="desc">APStartup is all set to organise the First edition of Arunachal Pradesh 2021, Investors Summit! See...

                    </p>
                </div>
                <a href="{{route('events')}}" class="btn btn-success btn-raised animated wow fadeInLeft animation-delay-2 mr-2" style="bottom: 166px; left: 428px;"><i class="zmdi zmdi zmdi-book"></i> Know More
                    <div class="ripple-container"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<!--  End Here -->
<style>
    .upcoming_events_index {
        padding: 40px 0;
    }

    .bg-accent {
        background: #f5f5f5;
    }

    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .section-title {
        margin-bottom: 50px;
    }

    .row {
        margin-right: -15px;
        margin-left: -15px;
    }

    .event-list {
        list-style: none;
        font-family: 'Lato', sans-serif;
        margin: 0px;
        padding: 0px;
    }

    .event-list>li {
        margin-bottom: 10px;
    }

    .event-list>li>.time {
        display: inline-block;
        width: 46%;
        color: rgb(255, 255, 255);
        background-color: rgb(197, 44, 102);
        padding: 15px;
        text-align: center;
        float: left;
        height: 140px;
    }

    .event-list>li>.time>.day {
        display: block;
        font-size: 42pt;
        font-weight: 100;
        line-height: 1;
    }

    .event-list>li>.time>span {
        display: none;
    }

    .event-list>li .time>.month {
        display: block;
        font-size: 16pt;
        font-weight: 900;
        line-height: 1;
    }

    .event-list>li>.time>span {
        display: none;
    }

    .event-list>li .time>.year {
        display: block;
        font-size: 20pt;
        font-weight: 600;
        line-height: 1;
    }

    .event-list>li>.time>span {
        display: none;
    }

    .event-list>li>.info {
        padding: 15px;
        text-align: left;
        width: 100%;
        /* float: left; */
        background: #ffffff;
        height: 140px;
        overflow: hidden;
        left: 179px;
        bottom: 169px;
    }

    .event-list>li>.info>.title {
        font-size: 16pt;
        margin: 0px;
    }

    /* h2 {
    font-size: 30px;
} */
    /* h1, h2, h3, h4, h5, h6 {
    font-family: 'Roboto', sans-serif;
    color: #222222;
    margin-top: 0;
    margin-bottom: 20px;
    line-height: 1.4;
} */
    .event-list>li>.info>.desc {
        font-size: 11pt;
        font-weight: 300;
        margin: 0px;
    }


    .upcoming_events_index .ghost-btn {
        float: right;
        font-size: 0.8em;
        margin-top: 10px;
        padding: 7px 15px;
        color: #027abb;
    }

    .ghost-btn {
        background: transparent;
        border: 2px solid #027abb;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        -ms-border-radius: 0px;
        -o-border-radius: 0px;
        border-radius: 0px;
        color: #222222;
        display: inline-block;
        font-weight: 600;
        padding: 12px 20px;
        text-transform: uppercase;
        -webkit-transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    </style @endsection