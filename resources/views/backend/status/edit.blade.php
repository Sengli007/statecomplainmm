@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   အခြေအနေပြင်ဆင်ခြင်း
                </div>
                <div class="card-body">
                    <form action="{{ route('status.update', $status->id) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Township Name">အမည်</label>
                            <input type="text" name="status_name" value="{{$status->name}}" class="form-control" id="Status Name">
                        </div>
                        <div class="form-group">
                            <label for="Township Name">အရောင်</label>
                            <input type="text" name="status_color" value="{{$status->color}}" class="form-control" id="Status Color">
                        </div>
                        <button type="submit" class="btn btn-primary">ပြင်ဆင်သည်</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection