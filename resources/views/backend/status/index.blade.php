@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-lg-9 col-md-10 col-sm-12">
                    အခြေအနေစာရင်း
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12">
                        <a href="{{route('status.create')}}" class="btn btn-primary">အခြေအနေ အသစ်ထည့်ရန်</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col" style="width: 5%">စဥ်</th>
                            <th scope="col" style="width: 50%">အမည်</th>
                            <th scope="col" style="width: 35%">အရောင်</th>
                            <th scope="col" style="width: 10%" colspan="2">လုပ်ဆောင်မှု</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $index=1;
                        @endphp
                        @foreach($statuses as $status)
                            <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $status->name }}</td>
                            <td>{{ $status->color }}</td>
                            <td>
                                <a href="{{route('status.edit',$status->id)}}" class="btn btn-sm btn-success">ပြင်ဆင်ရန်</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('status.destroy',$status->id)}}" onsubmit="return confirm('Are you sure delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" >ဖျက်ရန်</button>
                                </form>
                            </td>
                            </tr>
                        @php
                        $index++;
                        @endphp
                        @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection