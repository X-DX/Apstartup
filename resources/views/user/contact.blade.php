@extends('user/app')
@section('main-content')
<section class="section is-sm section-contact" style="background-color: #579c87!important; background-image: url('user/img/pattern-light.png');">
    <!-- <img class="section-particle top-0" src="user/img/icon/particle.svg" alt=""> -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class=" items-contact">
                    <div class="section-head ">
                        <h1 class="color-primary">Contact Us</h1>

                        <p class="section-desc mb-0">Arunachal Pradesh Startup is having its incubation centers and associated incubators all over Arunachal Pradesh. Our main head office is located at Block No. 1, 4th Floor, AP Civil Secretariat,Itanagar. Other than incubation facility and meet up space.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-item">
                            <div class="section-head">
                                <h3 class="color-primary">Arunachal Prades Startup - Head Office</h3>
                                <p class="contact-item-info "><i class="fa fa-map-marker" aria-hidden="true"></i> Block No. 1, 4th Floor, AP Civil Secretariat, Itanagar (A.P)</p>
                                <p class="contact-item-info" style="padding-top:10px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91 8732076888 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;APStartup@gmail.com
                                </p>
                                <p class="contact-item-info" style="padding-top:10px;">
                                    (Monday to Friday (10:00 AM – 05:00 PM)
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="contact-item">
                            <div class="section-head">
                                 <div class="animated wow fadeInUp animation-delay-2" style="width: 100%"><iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=civil%20secretariate,itanagar,%20arunachal%20pradesh%20,%20india+(civil%20secretariate)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="containercont col-lg-6 ">
                <form id="contact" action="" method="post">
                    <h3 class="color-primary">Send Us Message</h3>
                    <h4>If you have any further questions, please don’t hesitate to contact us.</h4>
                    <fieldset>
                        <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Email Address" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Subject" tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                    <!-- <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p> -->
                </form>
            </div>
        </div>

        <div class="card card-hero animated slideInUp animation-delay-8" style="margin-top: 0px;">

            <div class="card-block">

                <div class="css-jw76fk" style="outline: none;">
                    <h2 class="css-1284bk8" style="outline: none;">Our Teams</h2>
                </div>


                <style>
                    div.css-jw76fk {
                        -webkit-box-align: end;
                        -webkit-box-pack: justify;
                        align-items: end;
                        box-sizing: border-box;
                        color: #718096;
                        display: flex;
                        font-family: Karla, sans-serif;
                        justify-content: space-between;
                        line-height: 28.8px;
                        margin: 0px;
                        min-width: 0px;
                        outline: none;

                    }

                    h2.css-1284bk8 {
                        box-sizing: border-box;
                        color: #ffa117;
                        display: block;
                        font-family: Spectral, serif;
                        font-size: 3.5rem;
                        font-weight: bold;
                        line-height: 1.33;
                        margin: 0px auto;
                        min-width: 0px;
                        outline: none;
                        text-decoration: none;
                    }
                </style>





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
                                    <h3 class="color-warning">Shir Tabe Haidar</h3>
                                    <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;tabe.haidar@gov.in</p>
                                    <p class="color-info"><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp;+91 9436045851</p>
                                    <p>State Nodal Officer-cum-Joint Director<br /> Department Of Planning and Investment</p>
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
                                    <h3 class="color-warning">Smt Elizabeth Shaji</h3>
                                    <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;sraplg-arn@nic.in</p>
                                    <p class="color-info"><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp;+91 9612101598</p>
                                    <p>Senior Research Assitant<br /> Department Of Planning and Investment</p>
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
                                    <h3 class="color-warning">Shri Vikas Vijay</h3>
                                    <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;vikas.vijay@arn.gov.in</p>
                                    <p class="color-info"><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp;+91 8794305383</p>
                                    <p>Analyst<br />Department Of Planning and Investment</p>
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
                                    <h3 class="color-warning">Shri Chau Wanseng Mongmao</h3>
                                    <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;wanseng.mongmao@arn.gov.in</p>
                                    <p class="color-info"><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp; +91 8575771325 </p>
                                    <p style="margin-bottom: 37px;">Research Assistant<br />Department Of Planning and Investment</p>
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
                                    <h3 class="color-warning">Shri Ngilyang Richo</h3>
                                    <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;ngilyang.richo@arn.gov.in</p>
                                    <p class="color-info"><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp; +91 9612110702 </p>
                                    <p>Programer<br />Department Of Planning and Investment</p>
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
                                    <h3 class="color-warning">Smt Bharati Yun</h3>
                                    <p class="color-info"><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;yunbharati@gmail.com</p>
                                    <p class="color-info"><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp;+91 75098875</p>
                                    <p>Computer Operator<br />Department Of Planning and Investment</p>
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
</section>

<!-- <div class="section section-map is-sm">
    <div class="container">
        <div class="mapouter">
            <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=civil%20secretariate,itanagar,%20arunachal%20pradesh%20,%20india+(civil%20secretariate)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/"> map</a></div>
        </div>
    </div>
</div> -->
<style>
    .section-particle,
    .top-0 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #000;
        background-color: #fff;
    }

    .section,
    .is-sm,
    .section-contact {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #000;
        background-color: #fff;
    }

    .section-head {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #000;
        background-color: #fff;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        padding: 25px;
        width: 538px;
        margin-top: 7px;
    }

    .section-title {
        font-family: sans-serif;
        font-size: 48px;
        line-height: 57.6px;
        text-align: left;
        letter-spacing: normal;
        color: #000000;
        background-color: #ffffff;
    }

    .section-desc,
    .mb-0 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #747474;
        background-color: #ffffff;
    }

    .items-contact {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #000000;
        /* background-color: #ffffff; */
    }

    .contact-item {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #000000;
        background-color: #ffffff;
        box-shadow: rgba(150, 155, 187, 0.2) 0px 60px 120px 0px;
        border-radius: 10px;
        margin-left: -14px;
    }

    .h6 {
        font-family: serif;
        font-size: 17.6px;
        line-height: 21.12px;
        text-align: left;
        letter-spacing: normal;
        color: #1baaa0;
        background-color: #ffffff;
    }

    .contact-item-info {
        font-family: SpaceGrotesk, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #747474;
        background-color: #ffffff;
    }

    .col-lg-6 {
        font-family: SpaceGrotesk, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 15px;
        line-height: 22.5px;
        text-align: left;
        letter-spacing: 0.3px;
        color: #000000;
        /* background-color: #ffffff; */
    }


    /* @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic); */

    /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    } */

    /* body {
        font-family: "Roboto", Helvetica, Arial, sans-serif;
        font-weight: 100;
        font-size: 12px;
        line-height: 30px;
        color: #777;
        background: #4CAF50;
    } */

    .containercont {
        max-width: 566px;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact textarea1,
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
        font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
        background: #F9F9F9;
        padding: 25px;
        margin: 5px 0;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    #contact h4 {
        margin: 5px 0 15px;
        display: block;
        font-size: 13px;
        font-weight: 400;
    }

    fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    /* #contact textarea1 {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 5px;
        padding: 10px;
    } */
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 5px;
        padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    /* #contact textarea1:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    } */
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    }

    #contact textarea {
        height: 100px;
        max-width: 100%;
        resize: none;
    }

    /* #contact textarea1 {
        height: 100px;
        max-width: 100%;
        resize: none;
    } */

    #contact button[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        background: #4CAF50;
        color: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
    }

    #contact button[type="submit"]:hover {
        background: #43A047;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .copyright {
        text-align: center;
    }

    #contact input:focus,
    #contact textarea:focus {
        outline: 0;
        border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }

    :-ms-input-placeholder {
        color: #888;
    }
</style>
@endsection