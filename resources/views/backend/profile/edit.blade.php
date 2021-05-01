@extends('backend.admin_main')

@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>ကိုယ်ရေးပြင်ဆင်ခြင်း</strong>
                        </div>
                        <div class="card-body card-block">
                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            <form action="{{route('adminprofile.update',$user->id)}}" method="post" class="form-horizontal">
                                @csrf
                                @method('PATCH')
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">အမည်</label></div>
                                    <div class="col-12 col-md-9"><input type="text" value="{{$user->name}}" name="name" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">အီးလ်မေး</label></div>
                                    <div class="col-12 col-md-9"><input type="email" value="{{$user->email}}" name="email" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">ဖုန်းနံပါတ်</label></div>
                                    <div class="col-12 col-md-9"><input type="text" value="{{$user->phone}}" name="phone" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">လက်ရှိ လျှို့ဝှက်နံပါတ်</label></div>
                                    <div class="col-12 col-md-9 {{ $errors->has('current_password') ? ' has-error' : '' }}">
                                        <input type="password" id="password-input" name="current_password" class="form-control">
                                        @if ($errors->has('current_password'))
                                            <span class="help-block red-text">
                                            <strong>{{ $errors->first('current_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">လျှို့ဝှက်နံပါတ် အသစ်</label></div>
                                    <div class="col-12 col-md-9 {{ $errors->has('new_password') ? ' has-error' : '' }}">
                                        <input type="password" id="password-input" name="password" class="form-control">
                                        @if ($errors->has('new_password'))
                                            <span class="help-block red-text">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">လျှို့ဝှက်နံပါတ် အတည်ပြုရန်</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="password-input" name="password_confirmation" class="form-control"></div>
                                </div>
                                <div class="row form-group mt-5">
                                    <div class="col col-md-3">
                                    </div>
                                    <div class="col col-md-4">
                                        <button type="submit" class="btn btn-primary btn-md"><i class="fa fa-dot-circle-o"></i> ပြင်ဆင်သည်</button>
                                    </div>
                                    <div class="col col-md-5">
                                        <a href="{{route('adminprofile.index')}}" class="btn btn-danger btn-md"><i class="fa fa-ban"></i> ပယ်ဖျက်သည်</a>
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