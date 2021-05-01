@extends('backend.admin_main')

@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-3">ကိုယ်ရေးအကျဥ်း</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="rounded-circle mx-auto d-block" src="{{asset('backend/images/profile2.png')}}" alt="Card image cap">
                                <h5 class="text-sm-center mt-3 mb-1">{{$user->name}}</h5>
                                <div class="text-sm-center mt-3">
                                    <span class="col-lg-6">အီးလ်မေး</span>  
                                    <span class="col-lg-6">: {{$user->email}}</span>
                                </div>
                                <div class="location text-sm-center mt-2">
                                    <span class="col-lg-6">ဖုန်းနံပါတ်</span>  
                                    <span class="col-lg-6">: {{$user->phone}}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="card-text text-sm-center">
                                <a href="{{route('adminprofile.edit',$user->id)}}" class="btn btn-primary">ကိုယ်ရေးပြင်ဆင်ရန်</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection