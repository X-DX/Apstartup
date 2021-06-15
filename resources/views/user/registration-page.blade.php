     @extends('user/app')

     @section('main-content')

     <!-- <section class="divider5 parallax-section"></section> -->
     <!-- <section class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="user/img/application.jpg">
    <h2 class="info color-primary animated slideInUp animation-delay-8 "> REGISTRATION APPLICATION</h2>
</section> -->
     <div id="banner" class="wsite-background wsite-custom-background">
         <div class="banner-shade">
             <div class="container">
                 <div class="banner-content">
                     <h2 class=" color-primary animated slideInUp animation-delay-8 " style="margin-block-start: 3.90em;"><span class="wsite-text wsite-headline">
                             <strong>REGISTRATION APPLICATION<font color="#59a3fc">.</font></strong>
                         </span></h2>
                 </div>
             </div>
         </div>
     </div>
     <style>
         .wsite-background {
             height: 325px;
             background-image: url(user/img/application.jpg) !important;
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
     <!-- {{ var_dump($errors)}} -->
     <!--  Registration page  -->
     <section style="background-color: #579c87!important; background-image: url('user/img/pattern-light.png');">
         <div class="container">
             <div class="col-md-10 col-md-offset-1">
                 <div class="card card-hero ">
                     <div class="card-block"><span style="color:red;"></span>

                         <form action="{{route("registration")}}" name="frm1" id="frm1" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                             @csrf
                             <fieldset>

                                 <div class="form-group">
                                     <!-- <h4 for="inputGen" class="col-md-2 control-label">Hello</h4> -->
                                     <label for="inputGen" class="col-md-2 control-label">Target Domain</label>
                                     <div class="col-md-9">
                                         <select name="domain" id="" class="form-control selectpicker" data-dropup-auto="false" onChange="getshowbox();">
                                             <option value="">---Select from list---</option>
                                             <option value="Software/IT">Software/IT</option>
                                             <option value="Hardware">Hardware</option>
                                             <option value="Healthcare">Healthcare</option>
                                             <option value="Agriculture">Agriculture</option>
                                             <option value="Bio Technolog">Bio Technology</option>
                                             <option value="Services Only">Services Only</option>
                                             <option value="Others">Others</option>
                                         </select>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="inputName" class="col-md-2 control-label">Company Name</label>
                                     <div class="col-md-9">
                                         <input type="text" name="company_name" value="" id="m_NAME" class="form-control" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" autocomplete="off" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="textArea" class="col-md-2 control-label">Your Company Logo</label>
                                     <div class="col-md-9">
                                         <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                         <input type="file" id="ATTACHMENT" name="logo" multiple="multiple">
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="inputName" class="col-md-2 control-label">Full Name</label>
                                     <div class="col-md-9">
                                         <input readonly type="text" name="name" value="{{$user->name}}" id="m_NAME" class="form-control" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" autocomplete="off" />
                                     </div>
                                 </div>
                                 <div class="form-group"><label for="inputEmail" class="col-md-2 control-label">Contact Number </label>
                                     <div class="col-md-9"><input readonly type="text" name="phone" value="{{$user->phone}}" id="m_MOBILE" class="form-control" placeholder="Mobile No." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile No.'" autocomplete="off" /></div>
                                 </div>
                                 <div class="form-group"><label for="inputEmail" class="col-md-2 control-label">Contact Email</label>
                                     <div class="col-md-9"><input readonly type="text" name="email" value="{{$user->email}}" id="m_EMAILID" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" autocomplete="off" /></div>
                                 </div>

                                 <div class="form-group">
                                     <!-- <h4 for="inputGen" class="col-md-2 control-label">Hello</h4> -->
                                     <label for="inputGen" class="col-md-2 control-label">Gender</label>
                                     <div class="col-md-9">
                                         <select name="gender" id="" class="form-control selectpicker" data-dropup-auto="false" onChange="getshowbox();">
                                             <option value="">---Select---</option>
                                             <option value="Male">Male</option>
                                             <option value="Female">Female</option>
                                             <option value="Other">Other</option>
                                         </select>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="inputGen" class="col-md-2 control-label">Date of Birth</label>
                                     <div class="col-md-9">
                                         <input type="date" name="dob" class="form-control datetimepicker-input" data-target="" />
                                         </select>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="inputGen" class="col-md-2 control-label">Occupation</label>
                                     <div class="col-md-9">
                                         <select name="occupation" id="" class="form-control selectpicker" data-dropup-auto="false" onChange="getshowbox();">
                                             <option value="">---Select---</option>
                                             <option value="Individual">Individual</option>
                                             <option value="Business">Business</option>
                                             <option value="Professional">Professional</option>
                                             <option value="Service">Service</option>
                                         </select>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="textArea" class="col-md-2 control-label">Upload Photograph</label>
                                     <div class="col-md-9">
                                         <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                         <input type="file" id="ATTACHMENT" name="photo" multiple="multiple">
                                     </div>
                                 </div>
                                
                                 <div class="form-group"><label for="inputSubject" class="col-md-2 control-label">Address</label>
                                     <div class="col-md-9"><input type="text" name="address" value="" id="m_ADDRESS" class="form-control" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" autocomplete="off" /></div>
                                 </div>

                                 <div class="form-group">
                                     <label for="inputSubject" class="col-md-2 control-label">District</label>
                                     <div class="col-md-9">
                                         <input type="text" name="district" value="" class="form-control" placeholder="District" onfocus="this.placeholder = ''" onblur="this.placeholder = 'District'" autocomplete="off" />
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="inputName" class="col-md-2 control-label">State</label>
                                     <div class="col-md-9">
                                         <input type="text" name="state" value="" id="state" class="form-control" placeholder="State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'State'" autocomplete="off" />
                                     </div>
                                 </div>    
                                 
                                 <div class="form-group">
                                     <label for="inputName" class="col-md-2 control-label">Country</label>
                                     <div class="col-md-9">
                                         <input type="text" name="country" value="" id="country" class="form-control" placeholder="Country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'" autocomplete="off" />
                                     </div>
                                 </div>                                                           


                                 <div class="form-group">
                                     <label for="inputName" class="col-md-2 control-label">Web Page</label>
                                     <div class="col-md-9">
                                         <input type="text" name="webpage" value="" id="webpage" class="form-control" placeholder="Web Page" onfocus="this.placeholder = ''" onblur="this.placeholder = 'webpage'" autocomplete="off" />
                                     </div>
                                 </div>

                                 <div class="col-md-9">
                                     {{-- {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!} --}}
                                 </div>
                                 <div class="form-group">
                                     <div class="col-md-9 col-md-offset-2">
                                         {{-- {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!} --}}
                                         <input type="hidden" name="recaptcha_response" id="g-recaptcha-response" />

                                         <button type="submit" class="btn btn-raised btn-primary btn-block mt-4">
                                             <i class="zmdi zmdi-account-add"></i> Submit Application
                                         </button>
                                     </div>
                                 </div>
                             </fieldset>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- end Registation page -->
     @endsection