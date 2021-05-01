@extends('frontend.user_dashboard.user_template')

@section('content')

    <div class="library-book-area mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    <div class="single-cards-item">
                        <div class="single-product-image">
                            <a href="#"><img src="{{asset('frontend_user/img/profile-cover.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-product-text">
                            <img src="{{asset('frontend_user/img/profile2.png')}}" alt="">
                            <h4><a class="cards-hd-dn" href="#">{{$user->name}}</a></h4>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="cards-dtn">
                                        <h3><span>အီးလ်မေး</span></h3>
                                        <p>{{$user->email}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="cards-dtn">
                                        <h3><span>ဖုန်းနံပါတ်</span></h3>
                                        <p>{{$user->phone}}</p>
                                    </div>
                                </div>
                            </div>

                            <a class="follow-cards" style="margin-top:30px;" href="{{route('profile.edit',$user->id)}}">ကိုယ်ရေးအကျဥ်းပြင်ဆင်ရန်</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection