@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Add Complain Place
                </div>
                <div class="card-body">
                    <form action="{{ route('complain_place.update', $complain_place->id) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="ComplainPlace">Name</label>
                            <input type="text" name="complain_place_name" value="{{$complain_place->name}}" class="form-control" id="ComplainPlace">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection