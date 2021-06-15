
    <div class="header-top" style="font-size:13px;">
        <div class="container" style="padding-left: 0px;padding-right: 0px;">
            <div class="social-icons hidden-xs pull-left animated fadeInUp animation-delay-9">
                <a href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#myModalLabeldis" class="social-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    &nbsp;&nbsp;Block No. 1, 4th Floor, AP Civil Secretariat, Itanagar (A.P)&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <a href="" target="_blank" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#myModalLabeldis" class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="" target="_blank" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#myModalLabeldis" class="social-icon"><i class="fa fa-twitter" aria-hidden="true" ></i></a>
                <a href="" target="_blank" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#myModalLabeldis" class="social-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="" target="_blank" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#myModalLabeldis" class="social-icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="" target="_blank" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#myModalLabeldis" class="social-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </div>


            <div class="dropdown header-dropdown pull-right animated fadeInUp animation-delay-9">
                <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-phone"></i>
                    &nbsp;&nbsp;+91 8732076888&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
            </div>
            <div class="dropdown header-dropdown pull-right active animated fadeInUp animation-delay-9">
                <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                    &nbsp;&nbsp;APstartup@gmail.com
                </a>
            </div>
            <div class="dropdown header-dropdown pull-right active">
                <a href="#" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                </a>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
    <header class="ms-header ms-header-white">
        <div class="container container-full">
            <div class="ms-title">
                <a href="">
                    <img src="{{asset('user/img/navbar/arunachal.png')}}" class="" alt="Startup Aruanchal Pradesh" />
                </a>
            </div>
            <div class="header-right">
                <div class="share-menu">
                    @guest()
                    <ul class="share-menu-list">
                        <li class="animated fadeInRight animation-delay-2">
                            <a href="{{route('login')}}" class="btn-circle btn-facebook" data-toggle="tooltip" data-placement="bottom" title="Login">
                                <i class="zmdi zmdi-account"></i>
                            </a>
                        </li>

                        <li class="animated fadeInRight animation-delay-1">
                            <a href="{{route('State-Start-Up-Registration')}}" class="btn-circle btn-twitter" data-toggle="tooltip" data-placement="bottom" title="Register">
                            <i class="zmdi zmdi-account-add"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-royal animated zoomInDown animation-delay-7" data-toggle="tooltip" data-placement="bottom" title="My Account">
                    <i class="zmdi zmdi-account"></i>
                    </a>
                    @else
                    <ul class="share-menu-list">
                        <li class="animated fadeInRight animation-delay-2">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="btn-circle btn-twitter" data-toggle="tooltip" data-placement="bottom" title="Logout">
                            <i class="zmdi zmdi-account-add"></i>
                            </a>
                        </li>
                        <li class="animated fadeInRight animation-delay-1">
                            <a href="{{route('dashboard')}}" class="btn-circle btn-facebook" data-toggle="tooltip" data-placement="bottom" title="Dashboard">
                                <i class="zmdi zmdi-account"></i>
                            </a>
                        </li>


                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-royal animated zoomInDown animation-delay-7" data-toggle="tooltip" data-placement="bottom" title="{{ Auth::user()->name }}">
                    <i class="zmdi zmdi-account"></i>
                    </a>
                    @endguest
                </div>
                <a href="{{route('contact')}}" class="btn-circle btn-circle-danger no-focus animated zoomInDown animation-delay-9" data-toggle="tooltip" data-placement="bottom" title="Contact Us">
                    <i class="zmdi zmdi-email zmdi-hc-fw"></i>

                </a>
                <img class=" animated fadeInRight animation-delay-9" src="{{asset('user/img/navbar/logo.png')}}" id="header-logo" alt="" style="height:102px; position:absolute; top:-14px; right:14px;" />
            </div>
        </div>
    </header>
