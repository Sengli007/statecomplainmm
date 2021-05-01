@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   တိုင်ကြားရာနေရာအသစ်ထည့်ခြင်း
                </div>
                <div class="card-body">
                    <form action="{{ route('complain_place.store') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="ComplainPlace">အမည်</label>
                            <input type="text" name="complain_place_name" class="form-control" id="ComplainPlace">
                        </div>
                        <button type="submit" class="btn btn-primary">ဖြည့်သည်</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection