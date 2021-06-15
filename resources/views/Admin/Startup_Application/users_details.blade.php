<!DOCTYPE html>
<html>

<head>
    <title>User Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="cv3.css"> -->
</head>

<body>
    <div class="col-md-offset-2 col-md-8" style="background: #E4E5E9" id="wrapper">
        @foreach($user_data as $data)
        <div id="header">
            <div>
                <img src="{{asset($data->application->photo )}}" id="image">
            </div>
            <div>
                <h2 id="name">{{$data->name}}</h2>
                <p id="underline"></p>
                <!-- <h5 id="web">Android and Web developer</h5> -->
            </div>
        </div><!--  end header -->
        <div class="row">
            <div class="col-md-6">
                <h4 id="exper1">PERSONAL DETAILS</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <span id="head">Name</span>
                        </div>
                        <div>
                            <p>{{$data->name}}</p>
                        </div>
                    </div>
                    <!-- end name -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div>
                            <span id="head">Email</span>
                        </div>
                        <div>
                            <p>{{$data->email}}</p>
                        </div>
                    </div>
                    <!-- end email -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div>
                            <span id="head">Phone</span>
                        </div>
                        <div>
                            <p>{{$data->phone}}</p>
                        </div>
                    </div>
                    <!-- end phone -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                        <div>
                            <span id="head">Date of Birth</span>
                        </div>
                        <div>
                            <p>{{ \Carbon\Carbon::parse($data->application->dob)->format('d/m/Y')}}</p>
                        </div>
                    </div>
                    <!-- end phone -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-transgender"></i>
                        </div>
                        <div>
                            <span id="head">Gender</span>
                        </div>
                        <div>
                            <p>{{$data->application->gender}}</p>
                        </div>
                    </div>
                    <!-- end Gender -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <span id="head">Occupation</span>
                        </div>
                        <div>
                            <p>{{$data->application->occupation}}</p>
                        </div>
                    </div>
                    <!-- end occupation -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-location-arrow"></i>
                        </div>
                        <div>
                            <span id="head">Address</span>
                        </div>
                        <div>
                            <p>{{$data->application->address}}</p>
                        </div>
                    </div>
                    <!-- end Address -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div>
                            <span id="head">District</span>
                        </div>
                        <div>
                            <p>{{$data->application->district}}</p>
                        </div>
                    </div>
                    <!-- end District -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-map"></i>
                        </div>
                        <div>
                            <span id="head">State</span>
                        </div>
                        <div>
                            <p>{{$data->application->state}}</p>
                        </div>
                    </div>
                    <!-- end State -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-flag"></i>
                        </div>
                        <div>
                            <span id="head">Country</span>
                        </div>
                        <div>
                            <p>{{$data->application->country}}</p>
                        </div>
                    </div>
                    <!-- end Country -->
                </div>
            </div>
            <div class="col-md-6">
                <h4 id="exp">STARTUP DETAILS</h4>
                <div id="experience">

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="far fa-id-card"></i>
                        </div>
                        <div>
                            <span id="head">Registration No.</span>
                        </div>
                        <div>
                            <p>{{$data->application->app_id}}</p>
                        </div>
                    </div>
                    <!-- end app_id -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div>
                            <span id="head">Domain</span>
                        </div>
                        <div>
                            <p>{{$data->application->domain}}</p>
                        </div>
                    </div>
                    <!-- end domain -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <span id="head">Company Name</span>
                        </div>
                        <div>
                            <p>{{$data->application->company_name}}</p>
                        </div>
                    </div>
                    <!-- end District -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-globe"></i>
                        </div>
                        <div>
                            <span id="head">WebPage Link</span>
                        </div>
                        <div>
                            <p>{{$data->application->webpage}}</p>
                        </div>
                    </div>
                    <!-- end webpage -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-blog"></i>
                        </div>
                        <div>
                            <span id="head">Company Logo</span>
                        </div>

                    </div>
                    <div id="exp1">
                        <div>
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;" xml:space="preserve">
                        </div>
                        <div>
                            <img src="{{asset($data->application->logo )}}" id="image">
                        </div>
                    </div>
                    <!-- end webpage -->
                </div>
            </div>
        </div> <!-- end row 1 -->
        <div class="row">
            <div class="col-md-12">
                <h4 id="exper1">DETAILS OF ENTITY</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Startup recognisied by DPIIT</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->dpiit_radiobox}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">DPITT No.</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->dpittno}}</p>
                        </div>
                    </div> <!-- end section 1 -->

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Full Name of Entity</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->nameentity}}</p>
                        </div>
                    </div> <!-- end section 1 -->
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Nature of Legal Entity</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->legalentity}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Company Incorporation Number (CIN)</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->cin}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Incorporation Date</span>
                        </div>
                        <div>
                            <p>{{\Carbon\Carbon::parse($data->sectionb->incorporationdate)->format('d/m/Y')}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">PAN Number</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->pan}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">GST Number</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->gst}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Aadhaar Number</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->aadhaar}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row 1 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 id="exp">ADDRESS OF REGISTERED OFFICE</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Address Line 1</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->roadd1}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Address Line 2</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->roadd2}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">City/Town</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->rocity}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">District</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->rodistrict}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">State/Union Territory</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->rostate}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Pin Code</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->ropincode}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row 1 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 id="exp">ADDRESS OF HEAD OFFICE IN ARUNACHAL PRADESH</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Address Line 1</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->hoadd1}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Address Line 2</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->hoadd2}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">City/Town</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->hocity}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">District</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->hodistrict}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">State/Union Territory</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->hostate}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Pin Code</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->hopincode}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Sector</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->sector}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Industry</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->industry}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row 1 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 id="exp">DETAIL OF FOUNDERS / COFOUNDERS / DIRECTORS / PARTNERS</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">No of Founders / CoFounders / Directors / Partners in Company</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->nofounder}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">No of Employees in Company (Except Director / Partner)</span>
                        </div>
                        <div>
                            <p>{{$data->sectionb->noofemployees}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row 1 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 id="exper1">PRODUCTS DETAILS</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Final Product</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->final_product}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">About your idea and startup</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->about_idea}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Startup problem trying to solve</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->problem}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Proposed solution</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->solution}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Uniqueness of your idea</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->uniqueness}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">startup creating an innovative product </span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->innovative}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Business Model </span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->business_model}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Revenue model</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->revenue_model}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Generate Employments</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->employment}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Current stage of Startup</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->stage}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Any Patent</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->patent}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Received any awards</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->awards}}</p>
                        </div>
                    </div>


                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Describe Briefly</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->awards_describe}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Received any sort of fundings</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->fund}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Describe Briefly</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->fund_describe}}</p>
                        </div>
                    </div>

                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Any incubation Centre in India</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->incu}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Name of the incubator</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->incu_dec}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Period of Incubation</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->incu_period}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Website Link </span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->websitelink}}</p>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Video link</span>
                        </div>
                        <div>
                            <p>{{$data->sectionc->videolink}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row 1 -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 id="exp">Documents</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">DPITT Certificate</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionb->dpittcr)}}" target="_blank">DPITT Certificate</a>
                        </div>
                    </div>
                </div>
                <div id="exp1">
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div>
                        <span id="head">Incorporation Certificate</span>
                    </div>
                    <div>
                        <a href="{{asset($data->sectionb->incorporationcertificate)}}" target="_blank">Incorporation Certificate</a>
                    </div>
                </div>
                <div id="exp1">
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div>
                        <span id="head">Copy of PAN Card</span>
                    </div>
                    <div>
                        <a href="{{asset($data->sectionb->copypan)}}" target="_blank">Copy of PAN Card</a>
                    </div>
                </div>
                <div id="exp1">
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div>
                        <span id="head">Copy of Aadhaar Card</span>
                    </div>
                    <div>
                        <a href="{{asset($data->sectionb->copyaadhaar)}}" target="_blank">Copy of Aadhaar Card</a>
                    </div>
                </div>
                <div id="exp1">
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div>
                        <span id="head">Copy of GST Registration Certificate</span>
                    </div>
                    <div>
                        <a href="{{asset($data->sectionb->copygst)}}" target="_blank">Copy of GST</a>
                    </div>
                </div>
                <div id="exp1">
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div>
                        <span id="head">Share Holding Certificate</span>
                    </div>
                    <div>
                        <a href="{{asset($data->sectionb->sharecer)}}" target="_blank">Share Holding Certificate</a>
                    </div>
                </div>

                <div id="exp1">
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-dot-circle"></i>
                    </div>
                    <div>
                        <span id="head">Letter head of the company</span>
                    </div>
                    <div>
                        <a href="{{asset($data->sectionb->declaration)}}" target="_blank">Declaration</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4 id="exp">Documents</h4>
                <div id="experience">
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Patent Certificate</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->patent_certf)}}" target="_blank">Patent Certificate</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Awards Certificate</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->awards_certificate)}}" target="_blank">Awards Certificate</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Funding Certificate</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->fund_certificate)}}" target="_blank">Funding Certificate</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">MoA / AoA</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->moa)}}" target="_blank">MoA / AoA</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Business Plan</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->businessplan)}}" target="_blank">Business Plan</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Financial Projection Sheet</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->financialproject)}}" target="_blank">Financial Projection Sheet</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Pitch Deck</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->pitchdeck)}}" target="_blank">Pitch Deck</a>
                        </div>
                    </div>
                    <div id="exp1">
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <div>
                            <span id="head">Other</span </div>
                        </div>
                        <div>
                            <a href="{{asset($data->sectionc->othercrt)}}" target="_blank">Other</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row 1 -->
    </div>
    @endforeach
    </div>
    <button type="button" class="btn btn-outline-success">Downlord</button>
    <a href="{{route('generate-pdf')}}" class="btn btn-primary">Go to Google</a>
</body>

</html>

<style>
    #header {
        display: grid;
        grid-template-columns: 2fr 5fr;
        background: black;
        color: white;
    }

    #ui {
        display: grid;
        grid-template-columns: 0.2fr 0.5fr;
    }

    .skills {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    #ent {
        margin-top: 0px;
    }

    #space {
        margin-left: 30px;

    }

    #progress-bar {
        background: #CDCDCF;
        height: 10px;
        margin-top: 5px;
        width: 100px;
    }

    #progress {
        background: black;
        height: 10px;
        width: 80px;
    }

    .topM {
        margin-top: 20px;
        margin-bottom: 10px;

    }

    #contacts {
        background: #CDCDCF;
        padding: 10px;
    }

    #skills {
        background: #CDCDCF;
        padding: 10px;
    }

    #exp1 {
        margin-right: 20px;
        display: grid;
        grid-template-columns: 1fr 2fr 4fr;
    }

    p {
        text-align: justify;
    }

    #head {
        font-weight: bold;
    }

    svg {
        height: 1em;
        margin-left: 40px;
    }

    #left-mrgm {
        margin-left: 40px;
        font-weight: bold;
    }

    .box {
        height: 20px;
        width: 20px;
        background: black;
    }

    #image {
        height: 150px;
        width: 150px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
    }

    #name {
        letter-spacing: 0.5em;
        font-weight: bold;
        margin-top: 20px;
    }

    #web {
        letter-spacing: 0.2em;
        margin-top: 30px;
    }

    #underline {
        width: 440px;
        height: 7px;
        margin-top: 20px;
        background: #CECED0;
    }

    #exp {
        background: #CDCDCF;
        padding: 10px;
    }

    #exper1 {
        background: #485eb7;
        padding: 10px;
    }



    #wrapper {
        padding: 0px;
        margin-top: 50px;
        margin-bottom: 50px;
    }
</style>