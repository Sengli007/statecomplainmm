
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
	
	<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="{{asset('authlogin/images/icons/favicon.ico')}}"/> -->
	<!--===============================================================================================-->
		<!-- <link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/bootstrap/css/bootstrap.min.css')}}"> -->
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/css/util.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/css/main.css')}}">
	<!--===============================================================================================-->

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
                            <li><a href="{{route('authlogin')}}">ဝင်ရန်</a></li>
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
                            <li><a href="#contact-area">ဆက်သွယ်ရန် </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	<!-- Mainmenu-Area -->
	
	 <!--Register-Area-->
	 <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
					<div class="container-login100">
						<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
							<form class="login100-form validate-form" action="{{route('storeregister')}}" method="post">
								@csrf
								<span class="login100-form-title p-b-37">
									အသင်းဝင်ရန်
                                </span>

                                <div class="wrap-input100 validate-input m-b-20" data-validate="အမည် လို‌‌‌နေပါသည် !">
                                    
									<input class="input100" type="text" name="name" placeholder="အမည်">
									<span class="focus-input100"></span>
                                </div>
                                
                                
                                @if ($errors->has('email'))
                                <span class="alert text-danger">{{$errors->first('email')}}</span>
                                @endif
                                
                                <div class="wrap-input100 validate-input m-b-20" data-validate="အီးလ်မေး လိုနေပါသည် !">
									<input class="input100" type="email" name="email" placeholder="အီးလ်မေး">
									<span class="focus-input100"></span>
                                </div>
                                
                                @if ($errors->has('phone'))
                                <span class="alert text-danger">{{$errors->first('phone')}}</span>
                                @endif

								<div class="wrap-input100 validate-input m-b-20" data-validate="ဖုန်းနံပါတ် လိုနေပါသည် !">
									<input class="input100" type="text" name="phone" placeholder="ဖုန်းနံပါတ်">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input m-b-25" data-validate = "လျှို့ဝှက်နံပါတ် လိုနေပါသည် !">
									<input class="input100" type="password" name="password" placeholder="လျှို့ဝှက်နံပါတ်">
									<span class="focus-input100"></span>
                                </div>

                                @if ($errors->has('password'))
                                <span class="alert text-danger">{{$errors->first('password')}}</span>
                                @endif
                                
                                <div class="wrap-input100 validate-input m-b-25" data-validate = "အတည်ပြုလျှို့ဝှက်နံပါတ် လိုနေပါသည် !">
									<input class="input100" type="password" name="password_confirmation" placeholder="လျှို့ဝှက်နံပါတ် အတည်ပြုရန်">
									<span class="focus-input100"></span>
								</div>

								<div class="container-login100-form-btn">
									<button class="login100-form-btn">
										အကောင့်ဖွင့်ရန်
									</button>
								</div>

								<div class="text-center" style="margin-top:10px;">
                                    <p>အသင်းဝင်ပြီးသားလား?</p>
									<a href="{{route('authlogin')}}" class="txt2 hov1">
										ဝင်ရန်
									</a>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </header>
    <!--Register-Area-/-->


     <!-- About-Area -->
     <section class="section-padding gray-bg" id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="video-box">
                    <img src="{{asset('frontend/images/objective.png')}}" height="300px;" alt="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">
                    <div class="page-title">
                        <h3>အထွေထွေအုပ်ချုပ်ရေးဦးစီးဌာန၏ပန်းတိုင်</h3>
                     
                    </div>
                    <div class="tab-content">
                        <div id="our_mission" class="tab-pane fade in active">
                           
                            <p>
                            ရည်မှန်းချက်
                            ပြည်သူဗဟိုပြု၍ ကောင်းမွန်သောအုပ်ချုပ်ရေးယန္တရား 
                            တည်ဆောက်နိုင်ရန် ပြုပြင်ပြောင်းလဲရေးလုပ်ငန်းစဉ်များကို အကောင်အထည်ဖော် 
                            ဆောင်ရွက်နိုင်ရေးအတွက် ပြည်နယ်တစ်ခု ၊ မြို့နယ်တစ်ခုစီမံချက် 
                            ( One State One Township ) Project အား ဝိုင်းဝန်း ကြိုးပမ်း အကောင်အထည်ဖော် ဆောင်ရွက်နိုင်ရန်
                            </p>
                            <br />
                            <!-- <a href="#" class="bttn bttn-sm bttn-primary">ပိုမိုကြည့်ရန်</a> -->
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area / -->

    <!-- Service Area -->
    <section class="section-padding" id="service-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h3>လုပ်ဆောင်ချက်များ</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-idea"></i>
                        </div>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.114417270151662">
                            <h4>အသိပညာပေးဟော‌‌‌‌‌‌ပြောခြင်း</h4>
                        </a>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.114417270151662">
                            <img src="{{asset('frontend/images/shareknowledge.jpg')}}" alt="">
                        </a>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="icofont icofont-code-alt"></i>
                        </div>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.111707000422689">
                            <h4>လက်ကမ်းစာစောင်ဖြန့်‌ဝေခြင်း</h4>
                        </a>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.111707000422689">
                            <img src="{{asset('frontend/images/shareletter.jpg')}}" alt="">
                        </a>

                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="icofont icofont-monitor"></i>
                        </div>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.116721293254593">
                            <h4>ဆိုင်းဘုတ်များစိုက်ထူခြင်း</h4>
                        </a>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.116721293254593">
                            <img src="{{asset('frontend/images/buildboard.jpg')}}" alt="">
                        </a>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-chart-bar-graph"></i>
                        </div>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.122246642702058">
                            <h4>စုပေါင်းအမှိုက်ကောက်ခြင်း</h4>
                        </a>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.122246642702058">
                            <img src="{{asset('frontend/images/trash.jpg')}}" alt="">
                        </a>

                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1s">
                        <div class="box-icon">
                            <i class="icofont icofont-files"></i>
                        </div>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.113290460264343">
                            <h4>အမှိုက်ပုံးများလှူဒါန်းခြင်း</h4>
                        </a>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.113290460264343">
                            <img src="{{asset('frontend/images/donate.jpg')}}" alt="">
                        </a>

                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="box-icon">
                        <i class="icofont icofont-under-construction-alt"></i>
                        </div>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.111705283756194">
                            <h4>သန့်ရှင်းသာယာလှပရေးဆောင်ရွက်ခြင်း</h4>
                        </a>
                        <a href="https://www.facebook.com/onestateonetownship/media_set/?set=a.111705283756194">
                         <img src="{{asset('frontend/images/clean.jpg')}}" alt="">
                        </a>

                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area  / -->

    <!-- count area -->
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row counters">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="count-icon">
                            <i class="icofont icofont-bag-alt"></i>
                        </div>
                        <span class="count_title">ပြည်သူ့အကျိုးပြုလုပ်ငန်း</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="count-icon">
                        <i class="icofont icofont-brand-microsoft"></i>
                        </div>
                        <span class="count_title">မြို့နယ်များ</span>
                        <h2 class="count">{{$townships}}</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="count-icon">
                        <i class="icofont icofont-brand-blackberry"></i>
                        </div>
                        <span class="count_title">ရပ်ကွက်များ</span>
                        <h2 class="count">{{$quarters}}</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="count-icon">
                        <i class="icofont icofont-mill"></i>
                        </div>
                        <span class="count_title">ကျေးရွာများ</span>
                        <h2 class="count">{{$villages}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Count Area / -->

    <!-- Contact-Area -->
    <section class="section-padding" id="contact-area">
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h3 class="bar-title">ဆက်သွယ်ရန်</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="contact-form">
                            <form action="{{route('emailtest')}}" method="post">
                            @csrf
                                <div class="form-double">
                                    <input type="text" name="name" placeholder="အမည်အမည်" required="required">
                                    <input type="number" name="phone" placeholder="ဖုန်းနံပါတ်" required="required">
                                </div>
                                <div class="form-double">
                                    <input type="email" name="email" placeholder="အီးလ်မေး" required="required">
                                    <input type="text" name="subject" placeholder="ခေါင်းစဥ်" required="required">
                                </div>
                                <textarea name="message" rows="5" required="required" placeholder="အကြောင်းအရာ"></textarea>
                                <button type="submit" class="bttn bttn-primary">ပို့ရန်</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="contact-info">
                            <ul class="info">
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-social-google-map"></i>
                                    </span> အရှေ့မြို့ပတ်လမ်း၊ အိမ်တော်လမ်းနှင့် ရုံးကြီးလမ်းထောင့်၊သစ်တောရပ်ကွက် တောင်ကြီးမြို့
                                </li>
                                <li>
                                    <a href="tel:09969739346" style="color:white;">
                                    <span class="info-icon">
                                        <i class="icofont icofont-ui-cell-phone"></i>
                                    </span> 081-2125482
                                    </a> 
                                </li>
                                <li>
                                    <a href="mailto:htoomyatmaw.lamm@gmail.com" style="color:white;">
                                    <span class="info-icon">
                                        <i class="icofont icofont-envelope"></i>
                                    </span> info@onestateonetownship.org
                                    </a>
                                </li>
                            </ul>
                            <div class="social-menu-2">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-skype"></i></a>
                                <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area / -->
    
    <div id="maps" style="margin-top: 160px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.0510047255752!2d96.56040423063666!3d20.62677773247648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ceb7996093ec95%3A0xf17bab75fc64bbb8!2sKalaw!5e0!3m2!1sen!2smm!4v1582538916243!5m2!1sen!2smm" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>


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
                   <div class="col-lg-4"><p class="text text-white text-center" style="color:white;margin-top: 50px;">2020 Power By HTET Group.</p></div>                
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
	
	<!--===============================================================================================-->
	<script src="{{asset('authlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/bootstrap/js/popper.js')}}"></script>
		<!-- <script src="{{asset('authlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script> -->
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/daterangepicker/moment.min.js')}}"></script>
		<script src="{{asset('authlogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/js/main.js')}}"></script>
</body>

</html>