@extends('backend.admin_main')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    လက်ခံပြီးသောတိုင်ကြားစာ စာရင်း
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">စဥ်</th>
                            <th scope="col">ပုံ</th>
                            <th scope="col">ခေါင်းစဥ်</th>
                            <th scope="col">အခြေအနေ</th>
                           
                            <th scope="col">မြို့နယ်</th>
                            <th scope="col">ရပ်ကွက် နှင့် ကျေးရွာ</th>
                            <th scope="col">တိုင်ကြားထားသော နေရာ</th>
                            <th scope="col">တိုင်ကြားခဲ့သော ရက်စွဲ</th>
                            <th scope="col">လုပ်ဆောင်မှု</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($complains as $index=>$complain)
                            <tr>
                               <td>{{++$index}}</td>
                               <td><img src="{{ $complain->image }}" width="80" height="80" alt="" /></td>
                                <td>{{ $complain->title }}</td>
                                <td>
                                    <p class="text-{{$complain->status->color}}"><i class="fa fa-circle" style="margin-right:5px;" aria-hidden="true"></i>{{$complain->status->name}}</p>
                                </td>
                               
                                <td>{{ $complain->township->name }}</td>
                                <td>{{ $complain->quarter_village->name }}</td>
                                <td>{{ $complain->quarter_village->complain_place->name }}</td>
                                <td>{{ $complain->created_at }}</td>
                                <td>
                                    <a href="{{ route('view_detail_complain', $complain->id ) }}"><button class="btn btn-sm btn-success">ကြည့်ရန်</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
@endsection