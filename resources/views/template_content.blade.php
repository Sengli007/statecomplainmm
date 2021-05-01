@extends('template')

@section('content')

    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <div class="header-text">
                            <div class="wow fadeInUp upper latter-space" data-wow-delay="0.2s">WE PROVIDE BEST BUSINESS SOLUTION</div>
                            <h2 class="header-title wow fadeInUp upper" data-wow-delay="0.4s">One State One Township</h2>
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#contact-area" class="bttn bttn-lg bttn-primary">ဆက်သွယ်ရန်</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smoth">
            <a href="#about-area" class="scrolldown"><i class="icofont icofont-bubble-down"></i></a>
        </div>
    </header>
    <!--Header-Area-/-->

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


@endsection

