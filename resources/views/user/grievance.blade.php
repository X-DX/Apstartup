@extends('user/app')

@section('main-content')
<!-- <section class="divider5 parallax-section"></section> -->
<!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/other/Grievance.jpg">
    <h2 class="info color-primary animated slideInUp animation-delay-8 "> Grievance</h2>
</section> -->
<div id="banner" class="wsite-background wsite-custom-background">
    <div class="banner-shade">
        <div class="container">
            <div class="banner-content">
                <h2 class="color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                        <strong>Grievance<font color="#59a3fc">.</font></strong>
                    </span></h2>
            </div>
        </div>
    </div>
</div>
<style>
    .wsite-background {
        height: 325px;
        background-image: url(user/img/other/Grievance.jpg) !important;
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


<!--  Grievance  -->
<div class="container">
    <div class="card card-hero animated fadeInUp animation-delay-7">
        <div class="card-block "><span style="color:red;"></span>
            <h2 class="color-warning wow fadeInUp animation-delay-16">DO YOU HAVE ANY QUERY OR ISSUE? PLEASE WRITE TO US</h2>
            <form action="#" name="frm1" id="frm1" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <fieldset>
                    <div class="form-group wow fadeInUp animation-delay-16">
                        <label for="inputName" class="col-md-2 control-label">Person Name</label>
                        <div class="col-md-9">
                            <input type="text" name="m_NAME" value="" id="m_NAME" class="form-control" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group wow fadeInUp animation-delay-16"><label for="inputEmail" class="col-md-2 control-label">Mobile No.</label>
                        <div class="col-md-9"><input type="text" name="m_MOBILE" value="" id="m_MOBILE" class="form-control" placeholder="Mobile No." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile No.'" autocomplete="off" /></div>
                    </div>
                    <div class="form-group wow fadeInUp animation-delay-2"><label for="inputEmail" class="col-md-2 control-label">Email</label>
                        <div class="col-md-9"><input type="text" name="m_EMAILID" value="" id="m_EMAILID" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" autocomplete="off" /></div>
                    </div>
                    <div class="form-group wow fadeInUp animation-delay-2"><label for="inputSubject" class="col-md-2 control-label">Address</label>
                        <div class="col-md-9"><input type="text" name="m_ADDRESS" value="" id="m_ADDRESS" class="form-control" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" autocomplete="off" /></div>
                    </div>
                    <!-- <div class="form-group"><label for="inputGen" class="col-md-2 control-label">Type of Grievance</label>
                        <div class="col-md-9"><select name="m_GRIEVENCETYPE" id="m_GRIEVENCETYPE" class="form-control selectpicker" data-dropup-auto="false" onChange="getshowbox();">
                                <option value="">---Select from list---</option>
                                <option value="1">option 1</option>
                                <option value="2">option 2</option>
                            </select></div>
                    </div> -->
                    <div class="form-group wow fadeInUp animation-delay-2"><label for="inputSubject" class="col-md-2 control-label">Subject</label>
                        <div class="col-md-9"><input type="text" name="m_SUBJECT" value="" id="m_SUBJECT" class="form-control" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" autocomplete="off" /></div>
                    </div>
                    <div class="form-group wow fadeInUp animation-delay-2"><label for="textArea" class="col-md-2 control-label">Message</label>
                        <div class="col-md-9"><textarea name="m_MESSAGE" cols="40" rows="3" id="m_MESSAGE" class="form-control autosize" placeholder="Your message..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your message...'"></textarea></div>
                    </div>
                    <div class="form-group wow fadeInUp animation-delay-2"><label for="textArea" class="col-md-2 control-label">Attachments</label>
                        <div class="col-md-9"><input type="text" readonly="" class="form-control" placeholder="Browse..."><input type="file" id="ATTACHMENT" name="ATTACHMENT[]" multiple="multiple"></div>
                    </div>
                    <div class="form-group wow fadeInUp animation-delay-2">
                        <div class="col-md-9 col-md-offset-2">
                            <input type="hidden" name="recaptcha_response" id="g-recaptcha-response" />
                            <button type="submit" class="btn btn-raised btn-primary btn-block mt-4">
                                <i class="zmdi zmdi-account-add"></i> Submit
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- end Grievance -->

@endsection