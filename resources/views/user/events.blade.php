<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- bootstrap css -->
    <link href="{{asset('user/css/events/bootstrap.min.css')}}" type="text/css" rel="stylesheet" />

    <!-- main css -->
    <link href="{{asset('user/css/events/eventstyle.css')}}" type="text/css" rel="stylesheet" />


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- .page-loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- .page-loader -->

    <!-- Back to Home -->
    <div class="col-lg-2 col-xs-12">
        <div class="global_btn">
            <a class="btn_two" href="{{route('index')}}"  style="    margin-left: 564px;">Home</a>
        </div>
    </div>

    <!-- Schedule Section -->
    <div id="schedule-section" class="padding-50 gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-lg-2"></div>
                <div class="col-xs-12 col-sm-10 col-lg-8 text-center">
                    <h2 class="text-uppercase title-style01">Event <span class="color_red">Schedule</span></h2>
                    <div class="line_1-1"></div>
                    <div class="line_2-2"></div>
                    <div class="line_3-3"></div>
                    <p class="heading_space">List of all Events and Upcoming Events. </p>
                </div>
                <div class="col-sm-1 col-lg-2"></div>
            </div>
            <div class="row pt-40">

                <!-- end col -->
                <div class="col-lg-12 schedule-tab">
                    <ul id="tabsJustified" class="nav nav-tabs justify-content-center text-center">
                        <li class="nav-item">
                            <a href="" data-target="#one" data-toggle="tab" class="nav-link">
                                <!-- page 1 -->
                                <p>April 16, 2021</p>
                                <span>Friday</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#two" data-toggle="tab" class="nav-link active">
                                <!-- page 2 -->
                                <p>April 19, 2021</p>
                                <span>Monday</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#three" data-toggle="tab" class="nav-link">
                                <!-- page 3 -->
                                <p>April 20, 2021</p>
                                <span>Tuesday</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#four" data-toggle="tab" class="nav-link">
                                <!-- page 4 -->
                                <p>April 21, 2021</p>
                                <span>Wes</span>
                            </a>
                        </li>
                    </ul>

                    <div id="tabsJustifiedContent" class="tab-content">
                        <!-- page 1 -->
                        <div id="one" class="tab-pane fade">
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">

                                    <div class="speker_img"> <img src="user/img/events/sp-2.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn">
                                        <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">

                                    <div class="speker_img"> <img src="user/img/events/sp-1.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">

                                    <div class="speker_img"> <img src="user/img/events/sp-3.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                        </div>
                        <!-- page 2 -->
                        <div id="two" class="tab-pane active show fade">
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-1.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-2.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-3.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                        </div>
                        <!-- page 3 -->
                        <div id="three" class="tab-pane fade">
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-2.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-1.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-3.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                        </div>
                        <!-- page 4 -->
                        <div id="four" class="tab-pane fade">
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-3.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-2.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                            <div class="row speker_mainbox">
                                <div class="col-lg-2 col-xs-12">
                                    <div class="speker_img"> <img src="user/img/events/sp-1.jpg"> </div>
                                </div>
                                <div class="col-lg-8 col-xs-12">
                                    <div class="speker_box">
                                        <div class="sedules_events"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            09:00 <span>am</span> - 09:30 <span>am</span></div>
                                        <h2>Lorem ipsum dolor sit amet, conse ctetur adipi </h2>
                                        <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                                            elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque,
                                            lacinia dui sed, ultricies sapien. </p>
                                        <h4>John Smith <span></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xs-12">
                                    <div class="global_btn"> <a class="btn_two" href="#" data-toggle="modal" data-target="#ourteam_lightbox">Details</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Schedule Section -->







    <!--Modal Tricket section-->
    <div class="modal fade" id="ourteam_lightbox">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="our_team_details">
                        <h4>John Smith</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="" class="email">info@JohnSmith.com</a> <a href="" class="email">+548 215 5745</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        img {
            max-width: 100%;
            height: auto;
        }

        b,
        strong {
            font-weight: 900;
        }


        /*padding css*/

        .pt-50 {
            padding: 50px 0 0 0;
        }

        .pb-50 {
            padding: 0 0 50px 0;
        }

        .pt-40 {
            padding: 40px 0 0 0;
        }

        .pb-40 {
            padding: 0 0 40px 0;
        }

        .pt-30 {
            padding: 30px 0 0 0;
        }

        .pb-30 {
            padding: 0 0 30px 0;
        }

        .pt-20 {
            padding: 20px 0 0 0;
        }

        .pb-20 {
            padding: 0 0 20px 0;
        }

        .padding-50 {
            padding: 80px 0;
        }

        .padding-40 {
            padding: 40px 0;
        }

        .padding-30 {
            padding: 30px 0;
        }
    </style>


    <!-- Optional JavaScript -->
    <script src="{{asset('user/js/events/jquery-3.3.1.min.js')}}" type="text/javascript"></script>

    <!-- bootstrap JavaScript -->
    <script src="{{asset('user/js/events/bootstrap.min.js')}}" type="text/javascript"></script>

    <!-- Main JavaScript -->
    <script src="{{asset('user/js/events/eventon.js')}}" type="text/javascript"></script>
</body>

</html>