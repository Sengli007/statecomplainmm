@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    မြို့နယ်ပြင်ဆင်ခြင်း
                </div>
                <div class="card-body">
                    <form action="{{ route('township.update', $township->id) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Township Name">အမည်</label>
                            <input type="text" name="township_name" value="{{$township->name}}" class="form-control" id="Township Name">
                        </div>
                        <button type="submit" class="btn btn-primary">ပြင်ဆင်သည်</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection