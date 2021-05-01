@extends('frontend.user_dashboard.user_template')

@section('content')

    <div class="library-book-area mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-cards-item" style="padding-top:20px;">
                        <h3>ကိုက်ရေးအကျဥ်းပြင်ဆင်ခြင်း</h3>
                        <div class="single-product-text">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form method="post" action="{{route('profile.update',$user->id)}}">
                        @csrf
                        @method('PUT')
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">အမည်</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list">
                                            <input type="text" name="name" class="form-control input-lg" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">အီးလ်မေး</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list">
                                            <input type="email" name="email" class="form-control input-lg" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">ဖုန်းနံပါတ်</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list">
                                            <input type="text" name="phone" class="form-control input-lg" value="{{$user->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">လက်ရှိ လျှို့ဝှက်နံပါတ်</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list {{ $errors->has('current_password') ? ' has-error' : '' }}">
                                            <input type="password" name="current_password" class="form-control input-lg">
                                            @if ($errors->has('current_password'))
                                            <span class="help-block red-text">
                                            <strong>{{ $errors->first('current_password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">လျှို့ဝှက်နံပါတ် အသစ်အသစ်</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list {{ $errors->has('new_password') ? ' has-error' : '' }}">
                                            <input type="password" name="password" class="form-control input-lg">
                                            @if ($errors->has('new_password'))
                                            <span class="help-block red-text">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label class="login2 pull-right pull-right-pro">လျှို့ဝှက်နံပါတ် အတည်ပြု</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list">
                                            <input type="password" name="password_confirmation" class="form-control input-lg">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner" style="margin-top:30px;">
                                <div class="row">

                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <a href="{{route('profile.index')}}" class="btn btn-danger" style="width:100px;height:35px;color:white;font-size:13px;">ဖျက်သည်</a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-select-list">
                                            <button type="submit" class="btn btn-primary">ပြင်ဆင်သည်</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection