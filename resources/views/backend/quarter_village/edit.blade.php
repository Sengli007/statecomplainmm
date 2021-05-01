@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Quarter or Village
                </div>
                <div class="card-body">
                    <form action="{{ route('quarter_village.update',$qua_vill->id) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Township Name">Name</label>
                            <input type="text" name="township_name" value="{{$qua_vill->name}}" class="form-control" id="Township Name">
                        </div>

                        <label>Choose Township</label>
                        <select name="selected_township" class="custom-select mb-2">
                    
                            @foreach($all_township as $township)
                            <option {{ ($township->id == $qua_vill->township_id) ? 'selected':''}} value="{{ $township->id }}">{{ $township->name }}</option>
                            @endforeach   
                        </select>
                        @foreach($all_complain_place as $complain_place)      
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="selected_place" value="{{ $complain_place->id }}" 
                                {{ ($complain_place->id == $qua_vill->complainplace_id) ? 'checked':''}}>
                                <label class="form-check-label">
                                    {{ $complain_place->name }}
                                </label>
                        </div>
                        @endforeach
                       
                        <button type="submit" class="btn btn-primary mt-5">Upadate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection