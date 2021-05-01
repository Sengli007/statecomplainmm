<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>One State One Township- User Dashboard</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_user/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_user/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_user/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_user/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend_user/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('frontend_user/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>
        .myhover:hover {
            background: #DEE1E6 !important;
            opacity: 0.8;
        }
    </style>

   
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="#"><img class="main-logo" src="{{asset('frontend_user/img/logo/mlogo.png')}}" alt="" /></a>
                <strong><a href="#"><img src="{{asset('frontend_user/img/logo/slogo.png')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{route('user.dashboard')}}">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">တိုင်ကြားစာတင်ရန်</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('request_complain.index') }}">
                                <span class="educate-icon educate-data-table icon-wrap"></span>
                                <span class="mini-click-non">တိုင်ကြားခဲ့သောစာရင်း</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('accept_complain') }}">
                                <span class="educate-icon educate-data-table icon-wrap"></span>
                                <span class="mini-click-non">လက်ခံပြီးသောတိုင်ကြားစာ</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('reject_complain') }}">
                                <span class="educate-icon educate-data-table icon-wrap"></span>
                                <span class="mini-click-non">ငြင်းဆိုထားသောတိုင်ကြားစာ</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{route('profile.index')}}">
                                <span class="educate-icon educate-professor icon-wrap"></span>
                                <span class="mini-click-non">ကိုယ်ရေးအကျဥ်း</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="{{asset('frontend_user/img/logo/slogo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #177600 !important">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12" style="background: #177600 !important">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                              <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="background: #177600 !important">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="{{asset('frontend_user/img/profile2.png')}}" alt="" />
                                                        @if(Auth::check())
                                                        <span class="admin-name">{{Auth::user()->name}}</span>
                                                        @endif
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="{{route('profile.index')}}"><span class="edu-icon edu-home-admin author-log-ic"></span>ကိုယ်ရေးအကျဥ်း</a>
                                                        </li>
                                                      
                                                        <li>
                                                            <a href="{{route('logout')}}"><span class="edu-icon edu-locked author-log-ic"></span>ထွက်ရန်</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="{{route('user.dashboard')}}">Apply Complain</a></li>
                                        <li><a href="{{ route('request_complain.index') }}">Complain List</a></li>
                                        <li><a href="{{route('profile.index')}}">Profile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>
    
        @yield('content')

        

     
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>One State One Township</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- jquery
		============================================ -->
    <script src="{{asset('frontend_user/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('frontend_user/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('frontend_user/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('frontend_user/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('frontend_user/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('frontend_user/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('frontend_user/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('frontend_user/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('frontend_user/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('frontend_user/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('frontend_user/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('frontend_user/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('frontend_user/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('frontend_user/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('frontend_user/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('frontend_user/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('frontend_user/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('frontend_user/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('frontend_user/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('frontend_user/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="j{{asset('frontend_user/js/tawk-chat.js')}}"></script>

    @yield('script')

</body>

</html>