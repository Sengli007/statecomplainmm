@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   အခြေအနေ ပြင်ဆင်ခြင်း
                </div>
                <div class="card-body">
                    <form action="{{ route('update_new_complain',$complains->id) }}" method="post">
                    @csrf

                        <label>အခြေအနေ</label>
                        <select name="slected_status" class="custom-select mb-2">
                            @foreach($all_status as $status)
                            <option value="{{ $status->id }}" {{$complains->status_id==$status->id ? 'selected' : ''}}>{{ $status->name }}</option>
                            @endforeach   
                        </select>
                       
                        <button type="submit" class="btn btn-primary mt-5">ပြင်ဆင်သည်</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection