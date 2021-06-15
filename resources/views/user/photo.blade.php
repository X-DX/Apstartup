@extends('user/app')
@section('main-content')

<body class="body-wrapper page_view-gallery ">
  <!--/option-switcher-->
  <div class="main-wrapper">
    <div id="gallery-inside">
    <!-- <link rel="stylesheet" type="text/css" href="user/css/image/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="user/css/image/style.css">

    <link href="user/css/image/lightGallery.css" rel="stylesheet" type="text/css">
      <section class="whiteSection full-width clearfix">
        <div class="container">
          <div class="sectionTitle text-center wow fadeInUp animation-delay-16">
            <h2 class="m-t-30">
              <span class="shape shape-left bg-color-4"></span>
              <span>Images Gallery</span>
              <span class="shape shape-right bg-color-4"></span>
            </h2>
          </div>
        </div>
      </section>
      <div class="team-bottom" id="work">
        <div class="container ">
          <div class="w3layouts_gallery_grids">
            <ul class="w3l_gallery_grid" id="lightGallery">
              <li class="event-click" data-title="" data-event="">
                <div class="w3layouts_gallery_grid1 box wow fadeInUp animation-delay-16">
                  <a href="">
                    <img src="user/img/cover photo/ziro fist/f1.jpg"
                      alt="ziro" class="img-responsive" />
                    <div class="overbox">
                      <h4 class="title overtext">ziro Festival 2019</h4>
                    </div>
                  </a>
                </div>
              </li>
              <li class="event-click" data-title="Rajasthan IT Day 2018" data-event="7">
                <div class="w3layouts_gallery_grid1 box wow fadeInDown animation-delay-16">
                  <a href="">
                    <img src="user/img/cover photo/tourism/t2.jpg"
                      alt="" class="img-responsive" />
                    <div class="overbox">
                      <h4 class="title overtext">Tourism</h4>
                    </div>
                  </a>
                </div>
              </li>
              <li class="event-click" data-title="Digifest Udaipur 2017" data-event="3">
                <div class="w3layouts_gallery_grid1 box wow fadeInRight animation-delay-16">
                  <a href="">
                    <img src="user/img/cover photo/tech/tech1.jpg"
                      alt="" class="img-responsive" />
                    <div class="overbox">
                      <h4 class="title overtext">Technology</h4>
                    </div>
                  </a>
                </div>
              </li>
              <li class="event-click" data-title="Rajasthan IT Day  2017" data-event="2">
                <div class="w3layouts_gallery_grid1 box wow fadeInDown animation-delay-16">
                  <a href="">
                    <img src="user/img/cover photo/art/a1.jpg"
                      alt="" class="img-responsive" />
                    <div class="overbox">
                      <h4 class="title overtext">Arts & Culture</h4>
                    </div>
                  </a>
                </div>
              </li>
              <li class="event-click" data-title="Digifest Kota 2017" data-event="1">
                <div class="w3layouts_gallery_grid1 box wow fadeInUp animation-delay-16">
                  <a href="">
                    <img src="user/img/cover photo/bw/bw1.jpg"
                      alt="" class="img-responsive" />
                    <div class="overbox">
                      <h4 class="title overtext">Business & Work</h4>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection