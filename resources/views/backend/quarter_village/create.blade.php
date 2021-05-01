@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    ရပ်ကွက်နှင့်ကျေးရွာအသစ်ထည့်ခြင်း
                </div>
                <div class="card-body">
                    <form action="{{ route('quarter_village.store') }}" method="post">
                    @csrf

                        <label>မြို့နယ်‌ရွေးရန်</label>
                        <select name="selected_township" class="custom-select mb-2">
                            @foreach($all_township as $township)
                            <option value="{{ $township->id }}">{{ $township->name }}</option>
                            @endforeach   
                        </select>
                        @foreach($all_complain_place as $index=>$complain_place)      
                        <div class="form-check mt-3">
                                <input class="form-check-input" id="{{$index}}" type="radio" @if ($loop->first) checked @endif name="selected_place" value="{{ $complain_place->id }}">
                                <label class="form-check-label" for="{{$index}}">
                                    {{ $complain_place->name }}
                                </label>
                        </div>
                        @endforeach
                        <div class="form-group mt-3">
                            <label for="Township Name">အမည်</label>
                            <input type="text" name="township_name" class="form-control" id="Township Name">
                        </div>
                       
                        <button type="submit" class="btn btn-primary mt-5">ဖြည့်သည်</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection