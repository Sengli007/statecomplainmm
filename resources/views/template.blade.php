<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>One State One Township</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('frontend/images/favicon.png')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('css')
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Mainmenu-Area -->
    <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="logo" href="{{route('/')}}"><img src="{{asset('frontend/images/mlogo.png')}}" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <li><a href="{{route('authlogin')}}">၀င်ရန်</a></li>
                            <li><a href="{{route('authregister')}}">အသင်းဝင်ရန်</a></li>
                            <li class="select-cuntry">
                                <select name="counter" id="counter">
                                    <option value="ENG">မြန်မာ</option>
                                    <!-- <option value="BEN">MYA</option> -->
                                </select>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li class="active"><a href="{{route('/')}}">ပင်မစာမျက်နှာ</a></li>
                            <li><a href="#about-area">သိကောင်းစရာ</a></li>
                            <li><a href="#service-area">လုပ်ဆောင်ချက်များ</a></li>
                            <li><a href="#contact-area">ဆက်သွယ်ရန်</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area -->

   
    @yield('content')

    <!-- Footer-Area -->
    <footer class="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text">
                            <h4 class="upper text-white">အစိုးရဝက်ဘ်ဆိုက်များ</h4>
                            <a href="#"><p style="color: white !important">နိုင်ငံတော်သမ္မတရုံး</p></a>
                            <a href="#"><p style="color: white !important">နိုင်ငံခြားရေးဝန်ကြီးဌာန</p></a>
                            <a href="#"><p style="color: white !important">ပြည်ထဲရေးဝန်ကြီးဌာန</p></a>
                            <a href="#"><div class="social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 col-md-offset-1">
                        <div class="footer-single">
                            <h4 class="upper">သတင်းများ</h4>
                            <ul>
                                <li><a href="#" style="color: white !important">ဝန်ဆောင်မှုများ</a></li>
                                <li><a href="#" style="color: white !important">မဲဆန္ဒနှင့်စစ်တမ်းများ</a></li>
                                <li><a href="#" style="color: white !important">ဘလော့ဂ်များ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">ကဏ္ဍများ</h4>
                            <ul>
                                <li><a href="#" style="color: white !important">ကျန်းမာရေး</a></li>
                                <li><a href="#" style="color: white !important">စီးပွားရေး</a></li>
                                <li><a href="#" style="color: white !important">ဟိုတယ်နှင့် ခရီးသွားလာရေး</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">နိုင်ငံတော်</h4>
                            <ul>
                                <li><a href="#" style="color: white !important">လွှတ်တော်များ</a></li>
                                <li><a href="#" style="color: white !important">အစိုးရအဖွဲ့အစည်းများ</a></li>
                                <li><a href="#" style="color: white !important">တရားစီရင်ရေးဆိုင်ရာရုံးများ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">မြန်မာအကြောင်း</h4>
                            <ul>
                                <li><a href="#" style="color: white !important">နောက်ခံသမိုင်း</a></li>
                                <li><a href="#" style="color: white !important">အမျိုးသားရေးသွင်ပြင်များ</a></li>
                                <li><a href="#" style="color: white !important">ယဉ်ကျေးမှုအမွေအနှစ်</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-4"></div>
                  <div class="col-lg-4"><p class="text text-white text-center" style="font-size: 15px;color:white;margin-top: 50px;">2020 Power By HTET Group.</p></div>                
                   <div class="col-lg-4"></div>                 
              </div>
            </div>
        </div>
    </footer>
    <!-- Footer-Area -->


    <!--Vendor-JS-->
    <script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/appear.js')}}"></script>
    <script src="{{asset('frontend/js/bars.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/easypiechart.min.js')}}"></script>
    <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/js/contact-form.js')}}"></script>
    <script src="{{asset('frontend/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script> -->
    <script src="{{asset('frontend/js/maps.js')}}"></script>
    @stack('scripts')
</body>

</html>