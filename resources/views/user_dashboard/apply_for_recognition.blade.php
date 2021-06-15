@extends('user_dashboard/layouts/app')
@section('main-content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome {{ Auth::user()->name }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Startup Recognition</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Startup Recognition Application </h3>
                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div> -->
                        </div>
                       <div class="container">
                       @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                </div>
                            @endforeach
                        @endif
                       </div>
                        <!-- part 1 -->
                        <div class="card card-default collapsed-card">
                            <div class="card-header" style="background-color: #00bcd4;">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: black;">
                                    <label class="card-title">Section A (Applicant Details)</label>
                                </button>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="" action="" name="" id="" enctype="multipart/form-data" accept-charset="utf-8">
                                    @csrf
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">APPLICATION DETAILS</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Registration No.</label>
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <h6>{{$user->application->app_id}}</h6>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <!-- <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Applicantion Status</label>

                                            </div>
                                          
                                            <div class="form-group">
                                                <h6>Pending</h6>
                                            </div>
                                          
                                        </div> -->
                                        <!-- /.col -->
                                        <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Startup Recognition Application</label>

                                            </div>
                                           
                                            <div class="form-group">
                                                <h6>.pdf</h6>

                                            </div>
                                           
                                        </div> -->
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Application At</label>

                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group" style="color:green;">
                                                <label>StartUp</label>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">APPLICANT DETAILS (MAIN APPLICANT)</h3>
                                    </div>
                                    <!-- <div class="row">                                       
                                </div>                                 -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card card-danger">
                                                <!-- <div class="card-header">
                                                <h3 class="card-title">Input masks</h3>
                                            </div> -->
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Photo</label>
                                                        <div class="input-group">
                                                            <img src="{{asset($user->application->photo )}}" alt="" width="200" height="200" class="absolute top-4 left-0 filter blur-lg saturate-150" />

                                                        </div>
                                                    </div>
                                                    <!-- Date dd/mm/yyyy -->
                                                    <div class="form-group">
                                                        <label>Applicant Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username" value="<?php echo Auth::user()->name ?>" aria-label="Username" aria-describedby="basic-addon1" disabled>
                                                        </div>
                                                    </div>
                                                    <!-- phone mask -->
                                                    <div class="form-group">
                                                        <label>Mobile No.</label>

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="text" placeholder="Mobile No." value="<?php echo Auth::user()->phone ?>" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                                            </div>
                                                            <input type="text" placeholder="Email Address" value="<?php echo Auth::user()->email ?>" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" placeholder="Gender" value="{{$user->application->gender}}" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <!-- Date -->
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                                            </div>
                                                            <input type="date" name="dob" value="{{$user->application->dob}}" class="form-control datetimepicker-input" data-target="" disabled />
                                                            <!-- <input type="text" placeholder="Date of Birth" name="dob" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                            </div> -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Profession / Occupation</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" placeholder="Profession" value="{{$user->application->occupation}}" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col (left) -->
                                        <div class="col-md-6">
                                            <div class="card card-primary">
                                                <!-- <div class="card-header">
                                                <h3 class="card-title">Date picker</h3>
                                            </div> -->
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Company Logo</label>
                                                        <div class="input-group">
                                                            <img src="{{asset( $user->application->logo )}}" alt="" width="200" height="200" class="absolute top-4 left-0 filter blur-lg saturate-150" />

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Domain Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                            </div>
                                                            <input type="text" name="domain" placeholder="domain" value="{{$user->application->domain}}" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <!-- Date -->
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                                            </div>
                                                            <input type="text" name="address" value="{{$user->application->address}}" placeholder="address" class="form-control" data-target="" disabled />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>District</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                                            </div>
                                                            <input type="text" name="district" placeholder="District" value="{{$user->application->district}}" class="form-control" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-city"></i></i></span>
                                                            </div>
                                                            <input type="text" name="state" placeholder="State" value="{{$user->application->state}}" class="form-control" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                                            </div>
                                                            <input type="text" name="country" placeholder="Country" value="{{$user->application->country}}" class="form-control" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Web Page</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                                            </div>
                                                            <input type="text" name="webpage" placeholder="Webpage" value="{{$user->application->webpage}}" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- <button type="submit" class="btn btn-block btn-success" onclick="fun();">
                                            <i class="fa fa-shield-alt"></i>&nbsp;&nbsp;&nbsp;Save Details
                                        </button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end part 1 -->
                        <!-- part 2 -->
                        <div class="card card-default collapsed-card">
                            <div class="card-header" style="background-color: #00bcd4;">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: black;">
                                    <label class="card-title">Section B (Entity, Communication and Founders/Directors/Partners Details)</label>
                                </button>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <form action="{{route("sectionbstore")}}" name="" id="frm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    @csrf
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">DETAILS OF ENTITY</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Are you a Startup recognisied by DPIIT ?</label>
                                                <div class="form-group clearfix ">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="radiobutton2" name="dpiit_radiobox" value="Yes" onchange="getRating(this)" checked>
                                                        <label for="radiobutton2">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline ">
                                                        <input type="radio" id="radiobutton1" name="dpiit_radiobox" value="No" onchange="getRating(this)">
                                                        <label for="radiobutton1">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4" id="dpiit_cer_no">
                                            <label>DPIIT Certificate Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name='dpittno' placeholder="DPIIT Certificate Number" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4" id="dpiit_cer">
                                            <div class="col-md-6" id="" style="display: block; outline: none;">
                                                <label style="outline: none;">DPIIT Certificate</label>
                                                <br style="outline: none;">
                                                <div class="" id="" style="outline: none;">
                                                    <input type="file" class="file-styled-primary" name="dpittcr" style="outline: none;">
                                                </div>
                                                <br style="outline: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6" id="div1">
                                            <label>Full Name of Entity</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="nameentity" placeholder="Entity Name" aria-label="Username" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nature of Legal Entity</label>
                                            <select class="form-control select2" name="legalentity" style="width: 100%;" required> 
                                                <option selected="selected">Select from list</option>
                                                <option>Private Limited Company</option>
                                                <option>Limited Liability Company</option>
                                                <option>Registered Partnership</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Company Incorporation Number (CIN)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                                                    </div>
                                                    <input type="text" name="cin" class="form-control" placeholder="Company Incorporation Number" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Incorporation Date</label>
                                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                    <input type="date" name="incorporationdate" placeholder="Incorporation Date" class="form-control datetimepicker-input" data-target="#reservationdate" required>
                                                    <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="div1">
                                            <label style="outline: none;">Incorporation Certificate</label>
                                            <br style="outline: none;">
                                            <div class="" id="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="incorporationcertificate" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>PAN Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                                                    </div>
                                                    <input  type="text" name="pan" class="form-control" placeholder="PAN Number" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="div1">
                                            <label style="outline: none;">Copy of PAN Card</label>
                                            <br style="outline: none;">
                                            <div class="" id="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="copypan" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>GST Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                                                    </div>
                                                    <input type="text" name="gst" class="form-control" placeholder="GST Number" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="div1">
                                            <label style="outline: none;">Copy of GST Registration Certificate</label>
                                            <br style="outline: none;">
                                            <div class="" id="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="copygst" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Aadhaar Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                                                    </div>
                                                    <input type="text" name="aadhaar" class="form-control" placeholder="Aadhaar Number" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="div1">
                                            <label style="outline: none;">Copy of Aadhaar</label>
                                            <br style="outline: none;">
                                            <div class="" id="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="copyaadhaar" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                            <br style="outline: none;">
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">ADDRESS OF REGISTERED OFFICE</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <div class="input-group">

                                                    <input type="text" name="roadd1" id="ro_al1" class="form-control" placeholder="Address Line 1" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <div class="input-group">

                                                    <input type="text" name="roadd2" id="ro_al2" class="form-control" placeholder="Address Line 2" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City/Town</label>
                                                <div class="input-group">

                                                    <input type="text" name="rocity" id="ro_al3" class="form-control" placeholder="City/Town" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>District</label>
                                                <div class="input-group">

                                                    <input type="text" name="rodistrict" id="ro_al4" class="form-control" placeholder="District" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State/Union Territory</label>
                                                <div class="input-group">

                                                    <input type="text" name="rostate" id="ro_al5" class="form-control" placeholder="State/Union Territory" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pin Code</label>
                                                <div class="input-group">

                                                    <input type="text" name="ropincode" id="ro_al6" class="form-control" placeholder="Pin Code" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">ADDRESS OF HEAD OFFICE IN ARUNACHAL PRADESH</h3>
                                    </div>
                                    <br>
                                    <div class="form-group clearfix">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="isenterprise_add_same" onclick="copy_delete();">
                                            <label class="form-check-label" for="isenterprise_add_same">Is Enterprise address same as above</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <div class="input-group">

                                                    <input type="text" name="hoadd1" id="ho_al1" class="form-control" placeholder="Address Line 1" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <div class="input-group">

                                                    <input type="text" name="hoadd2" id="ho_al2" class="form-control" placeholder="Address Line 1" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City/Town</label>
                                                <div class="input-group">

                                                    <input type="text" name="hocity" id="ho_al3" class="form-control" placeholder="City/Town" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>District</label>
                                                <div class="input-group">

                                                    <input type="text" name="hodistrict" id="ho_al4" class="form-control" placeholder="District" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State/Union Territory</label>
                                                <div class="input-group">

                                                    <input type="text" name="hostate" id="ho_al5" class="form-control" placeholder="State/Union Territory" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pin Code</label>
                                                <div class="input-group">

                                                    <input type="text" name="hopincode" id="ho_al6" class="form-control" placeholder="Pin Code" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Sector</label>
                                            <select class="form-control select2" name="sector" style="width: 100%;" required>
                                                <option selected="selected">Select from list</option>
                                                <option>Food Processing and Agriculture</option>
                                                <option>Travel and Tourism</option>
                                                <option>Aayush</option>
                                                <option>Education</option>
                                                <option>Healthcare</option>
                                                <option>Bio Technology</option>
                                                <option>Pharmaceutical</option>
                                                <option>Others</option>
                                                <option>Skill Development</option>
                                                <option>IT and Artificial Intelligence</option>
                                                <option>Energy</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Industry</label>
                                            <select class="form-control select2" name="industry" style="width: 100%;" required>
                                                <option selected="selected">Select from list</option>
                                                <option>Manufacturing</option>
                                                <option>Service</option>
                                                <option>Trading</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">DETAIL OF FOUNDERS / COFOUNDERS / DIRECTORS / PARTNERS</h3>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No of Founders / CoFounders / Directors / Partners in Company</label>
                                                <div class="input-group">

                                                    <input type="text" name="nofounder" class="form-control" placeholder="No of Founder /  Directors / Partners in Company" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Share Holding Certificate</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="" id="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="sharecer" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No of Employees in Company (Except Director / Partner)</label>
                                                <div class="input-group">
                                                    <input type="text" name="noofemployees" class="form-control" placeholder="No of Employees" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8" id="div1">
                                            <label style="outline: none;">Need only declaration of Number of employees on the letter head of the company (Name, Designation, Gender, Domicle City, State)</label>
                                            <br style="outline: none;">
                                            <div class="" id="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="declaration" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                            <br style="outline: none;">
                                        </div>
                                        <br>
                                        <div class="form-group clearfix">
                                            <div class="form-group form-check">
                                                <input type="checkbox" name="checkbox_terms" class="form-check-input" id="exampleCheck1" required>
                                                <label class="form-check-label" for="exampleCheck1">I certify that the entity is not an extension of existing family business or formed by splitting up or reconstruction of a business already in existence.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-success" id='frmSubmit'>
                                        <i class="fa fa-shield-alt"></i>&nbsp;&nbsp;&nbsp;Save Details
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- end part 2 -->

                        <!-- part 3 -->
                        <div class="card card-default collapsed-card">
                            <div class="card-header" style="background-color: #00bcd4;">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: black;">
                                    <label class="card-title">Section C (Product Details and Documentations)</label>
                                </button>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route("sectioncstore")}}" name="" id="" enctype="multipart/form-data" accept-charset="utf-8">
                                    @csrf
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">INFORMATION REQUIRED</h3>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Final Product/Service/Trade</label>
                                            <div class="input-group">
                                                <input type="text" name="final_product" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Describe about your idea and startup (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                                <!-- <input type="text" name="about_idea" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"> -->
                                                <textarea id="idea" name="about_idea" class="form-control" aria-label="idea" aria-describedby="" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What problem the startup is trying to solve? (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                            <textarea id="" name="problem" class="form-control" aria-label="" aria-describedby="" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What is the Proposed solution? (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                            <textarea id="" name="solution" class="form-control" aria-label="" aria-describedby="" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What is the Uniqueness of your idea/startup? (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                            <textarea id="" name="uniqueness" class="form-control" aria-label="" aria-describedby="" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Is your startup creating an innovative product / process / service or improving an existing product / process / service ? Please explain (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                            <textarea id="" name="innovative" class="form-control" aria-label="" aria-describedby="" required></textarea>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What is the Business Model ? (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                            <textarea id="" name="business_model" class="form-control" aria-label="" aria-describedby="" required></textarea>                                                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What is the revenue model ? (Min. 500 Max. 1000 Characters)</label>
                                            <div class="input-group">
                                            <textarea id="" name="revenue_model" class="form-control" aria-label="" aria-describedby="" required></textarea>                                                                                                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>How many Employment the startups proposes to generate in next one year ?</label>
                                            <div class="input-group">
                                                <input type="text" name="employment" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What is the current stage of Startup?</label>
                                            <div class="input-group">
                                                <input type="text" name="stage" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Have you filed/applied for any Patent?</label>
                                                <div class="form-group clearfix ">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="applied_patent_yes" name="patent" value="Yes" onchange="getRatinddg(this)" checked>
                                                        <label for="applied_patent_yes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline ">
                                                        <input type="radio" id="applied_patent_no" name="patent" value="No" onchange="getRatinddg(this)">
                                                        <label for="applied_patent_no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8" id="attachap_yes">
                                            <div class="col-md-8" id="attachap_yes" style="display: block; outline: none;">
                                                <label style="outline: none;">If Yes, attach the Certificate of Application/Registration</label>
                                                <br style="outline: none;">
                                                <div class="" id="attachap_yes" style="outline: none;">
                                                    <input type="file" class="file-styled-primary" name="patent_certf" id="" multiple="" style="outline: none;" aria-invalid="false">
                                                </div>
                                                <br style="outline: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Have you received any awards/ recognitions?</label>
                                                <div class="form-group clearfix ">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="recog_yes" name="awards" value="Yes" onchange="getRathhdfero(this)" checked>
                                                        <label for="recog_yes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline ">
                                                        <input type="radio" id="recog_no" name="awards" value="No" onchange="getRathhdfero(this)">
                                                        <label for="recog_no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="recorgy_yes">
                                            <div class="form-group">
                                                <label>If Yes, Please Describe Briefly</label>
                                                <div class="input-group">
                                                    <input type="text" name="awards_describe" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="recorgyy_yes">
                                            <div class="col-md-8" style="display: block; outline: none;">
                                                <label style="outline: none;">If Yes, Attach Certificate</label>
                                                <br style="outline: none;">
                                                <div class="" style="outline: none;">
                                                    <input type="file" class="file-styled-primary" name="awards_certificate" id="" multiple="" style="outline: none;" aria-invalid="false">
                                                </div>
                                                <br style="outline: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Have you received any sort of fundings ?</label>
                                                <div class="form-group clearfix ">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="fundings _yes" name="fund" value="Yes" onchange="getRathhdferofundings(this)" checked>
                                                        <label for="fundings _yes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline ">
                                                        <input type="radio" id="fundings _no" name="fund" value="No" onchange="getRathhdferofundings(this)">
                                                        <label for="fundings _no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="recorgyfundings_yes">
                                            <div class="form-group">
                                                <label>If Yes, Please Describe Briefly</label>
                                                <div class="input-group">
                                                    <input type="text" name="fund_describe" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="recorgyyfundings_yes">
                                            <div class="col-md-8" style="display: block; outline: none;">
                                                <label style="outline: none;">If Yes, Attach File</label>
                                                <br style="outline: none;">
                                                <div class="" style="outline: none;">
                                                    <input type="file" class="file-styled-primary" name="fund_certificate" id="" multiple="" style="outline: none;" aria-invalid="false">
                                                </div>
                                                <br style="outline: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Has your Startup got incubated in any incubation Centre in India</label>
                                                <div class="form-group clearfix ">
                                                    <div class="icheck-primary d-inline">
                                                        <input type="radio" id="incubated_yes" name="incu" value="Yes" onchange="getRathhdferoincubated(this)" checked>
                                                        <label for="incubated_yes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="icheck-primary d-inline ">
                                                        <input type="radio" id="incubated_no" name="incu" value="No" onchange="getRathhdferoincubated(this)">
                                                        <label for="incubated_no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="recorgyincubated_yes">
                                            <div class="form-group">
                                                <label>If Yes, Please provide Name of the incubator</label>
                                                <div class="input-group">
                                                    <input type="text" name="incu_dec" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="recorgyyincubated_yes">
                                            <div class="col-md-12" style="display: block; outline: none;">
                                                <label style="outline: none;">Period of Incubation (eg. 01/05) </label>
                                                <div class="input-group">
                                                    <input type="text" name="incu_period" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">Attachments</h3>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <label style="outline: none;">Memorandum of Association(MoA)/Article of Association(AoA)</label>
                                            <br style="outline: none;">

                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <p><a href=".pdf">Business Plan Template</a>.</p> -->
                                        </div>
                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <div class="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="moa" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                        </div>



                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <label style="outline: none;">Business Plan</label>
                                            <br style="outline: none;">

                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <p><a href=".pdf">Business Plan Template</a>.</p>
                                        </div>
                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <div class="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="businessplan" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                        </div>


                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <label style="outline: none;">Financial Projection Sheet</label>
                                            <br style="outline: none;">

                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <p><a href=".pdf">Financial Projection Sheet Template</a>.</p>
                                        </div>
                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <div class="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="financialproject" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                        </div>


                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <label style="outline: none;">Pitch Deck</label>
                                            <br style="outline: none;">

                                            <br style="outline: none;">
                                        </div>
                                        <div class="col-md-4">
                                            <p><a href=".pdf">Pitch Deck Template</a>.</p>
                                        </div>
                                        <div class="col-md-4" style="display: block; outline: none;">
                                            <div class="" style="outline: none;">
                                                <input type="file" class="file-styled-primary" name="pitchdeck" id="" multiple="" style="outline: none;" aria-invalid="false">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Website Link (if any)</label>
                                                <div class="input-group">
                                                    <input type="text"  name="websitelink" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Video link (if any)</label>
                                                <div class="input-group">
                                                    <input type="text" name="videolink" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="display: block; outline: none;">
                                                <label style="outline: none;">Other</label>
                                                <br style="outline: none;">
                                                <div class="" style="outline: none; margin-left: 750px; margin-top: -35px;">
                                                    <input type="file" class="file-styled-primary" name="othercrt" id="" multiple="" style="outline: none;" aria-invalid="false">
                                                </div>
                                                <br style="outline: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-success" id=''>
                                        <i class="fa fa-shield-alt"></i>&nbsp;&nbsp;&nbsp;Save Details
                                    </button>
                                </form>
                                <br>
                            </div>
                        </div>
                        <!-- end part 3 -->
                        <script>
                            function getRatinddg(el) {
                                if (el.value == 'Yes') {
                                    // console.log("Arup");
                                    $("#attachap_yes").show();
                                }
                                if (el.value == 'No') {
                                    // console.log("Bhaskar");
                                    $("#attachap_yes").hide();
                                }
                            }
                            $(document).ready(function() {
                                // Your code here

                            });
                        </script>


                        <script>
                            function getRathhdfero(el) {
                                if (el.value == 'Yes') {
                                    console.log("Arup");
                                    $("#recorgy_yes").show();
                                    $("#recorgyy_yes").show();
                                }
                                if (el.value == 'No') {
                                    console.log("Bhaskar");
                                    $("#recorgy_yes").hide();
                                    $("#recorgyy_yes").hide();
                                }
                            }
                            $(document).ready(function() {
                                // Your code here

                            });
                        </script>

                        <script>
                            function getRathhdferofundings(el) {
                                if (el.value == 'Yes') {
                                    console.log("Arup");
                                    $("#recorgyfundings_yes").show();
                                    $("#recorgyyfundings_yes").show();
                                }
                                if (el.value == 'No') {
                                    console.log("Bhaskar");
                                    $("#recorgyfundings_yes").hide();
                                    $("#recorgyyfundings_yes").hide();
                                }
                            }
                            $(document).ready(function() {
                                // Your code here

                            });
                        </script>


                        <script>
                            function getRathhdferoincubated(el) {
                                if (el.value == 'Yes') {
                                    console.log("Arup");
                                    $("#recorgyincubated_yes").show();
                                    $("#recorgyyincubated_yes").show();
                                }
                                if (el.value == 'No') {
                                    console.log("Bhaskar");
                                    $("#recorgyincubated_yes").hide();
                                    $("#recorgyyincubated_yes").hide();
                                }
                            }
                            $(document).ready(function() {
                                // Your code here

                            });
                        </script>
                        <!-- part 4 -->
                        <div class="card card-default collapsed-card">
                            <div class="card-header" style="background-color: #00bcd4;">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: black;">
                                    <label class="card-title">Section D (Terms and Conditions, Self Declaration)</label>
                                </button>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route("sectiondstore")}}" name="" id="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                @csrf
                                    <div class="form-group clearfix">
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="yes_agree" value="Yes_Agree" class="form-check-input" id="exampleCheck1" required>
                                            <label class="form-check-label" for="exampleCheck1">I agree to abide by the Terms and Conditions of Startup Arunachal Pradesh, Government Of Arunachal Pradesh</label>
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">SELF-DECLARATION</h3>
                                    </div>
                                    <br>
                                    <div class="form-group clearfix">
                                        <div class="icheck-success d-inline">
                                            <div class="form-group form-check">
                                                <input type="checkbox" name="yes_selfdeclaration" value="Yes_Self" class="form-check-input" id="exampleCheck2" required>
                                                <label class="form-check-label" for="exampleCheck2">The Nodal Department reserves the right to revert the application if submitted without uploading relevants documents and/or information</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #e2a908;">
                                        <h3 class="card-title">NOTES</h3>
                                    </div>
                                    <br>
                                    <h6>
                                        <i class="fas fa-hand-point-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                                        An entity shall cease to be a Startup on completion of Ten years from the date of its incorporation/registration or, if the turnover of the entity for any of the financial years since incorporation/ registration exceeds hundred crore rupees.
                                    </h6>
                                    <h6>
                                        <i class="fas fa-hand-point-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                                        The Nodal Department reserves the right to revert the application if submitted without uploading relevants documents and/or information
                                    </h6>
                                    <h6>
                                        <i class="fas fa-hand-point-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                                        The Nodal Department reserves the right to revoke the certificate of recogntion and sanction of all incentives immediately without any prior notice, if the application submitted by the startup is found to be based on false information/documents.
                                    </h6>
                                    <h6>
                                        <i class="fas fa-hand-point-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                                        Startup Arunachal Pradesh may, in its sole discretion, change or modify "Terms and Conditions" with or without prior notice. Such changes or modifications shall be made effective for all 'Applicants" upon posting of the modified "Terms and Conditions" to this web addres.
                                    </h6>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-success toastrDefaultSuccessd">
                                        <i class="fa fa-shield-alt"></i>&nbsp;&nbsp;&nbsp;Save & Review
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- end part 4 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->

<script>
    function getRating(el) {
        if (el.value == 'Yes') {
            console.log("Arup");
            $("#dpiit_cer").show();
            $("#dpiit_cer_no").show();

        }
        if (el.value == 'No') {
            console.log("Bhaskar");
            $("#dpiit_cer").hide();
            $("#dpiit_cer_no").hide();
        }
    }
    $(document).ready(function() {
        // Your code here

    });

    function copy_delete() {
        if (document.getElementById('isenterprise_add_same').checked) {
            console.log("Hi Bhaskar");
            var al1 = document.getElementById('ro_al1').value;
            document.getElementById('ho_al1').value = al1;

            var al2 = document.getElementById('ro_al2').value;
            document.getElementById('ho_al2').value = al2;

            var al3 = document.getElementById('ro_al3').value;
            document.getElementById('ho_al3').value = al3;

            var al4 = document.getElementById('ro_al4').value;
            document.getElementById('ho_al4').value = al4;

            var al5 = document.getElementById('ro_al5').value;
            document.getElementById('ho_al5').value = al5;

            var al6 = document.getElementById('ro_al6').value;
            document.getElementById('ho_al6').value = al6;


        } else {
            console.log("Hi Afup");
        }
    }
</script>

// submit form data in database ajazx
<!-- <script>
$(document).ready(function(){
    $('#frm').on('submit',function(event){
        event.preventDefault();
        jQuery('#btn').attr('disabled', true);
        $.ajax({
            url:"{{url('sectionbstore')}}" ,
            method:"POST" ,
            data: new FormData(this),
            dataType : 'JSON',
            contentType: false,
            cache:false,
            processData:false,
            success:function(data)
            {
               
               jQuery('#frm')[0].reset();
                jQuery('#btn').attr('disabled', false);
            }
        })
    })
})
</script> -->

@endsection