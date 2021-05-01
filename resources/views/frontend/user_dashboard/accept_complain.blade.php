@extends('frontend.user_dashboard.user_template')

@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>လက်ခံပြီးသော တိုင်ကြားစာ စာရင်း</h4>
                        <div class="add-product">
                            
                        </div>
                        <div class="asset-inner">
                            <table class="table table-striped" style="margin-bottom:530px;">
                                <thead>
                                    <tr>
                                        <th>စဥ်</th>
                                        <th width="50%">ပုံ</th>
                                        <th>ခေါင်းစဥ်</th>
                                        <th>အခြေအနေ</th>
                                        <th>အကြောင်းအရာ</th>
                                        <th>မြို့နယ်</th>
                                        <th>ရပ်ကွက် နှင့် ကျေးရွာ</th>
                                        <th>တိုင်ကြားထားသော နေရာ</th>
                                        <th>တိုင်ကြားခဲ့သော ရက်စွဲ</th>
                                        <th colspan="2">လုပ်ဆောင်မှု</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $index=1;
                                    @endphp
                                    @foreach($all_accept_complain as $accept_complain)
                                    
                                    <tr>

                                        <td>{{ $index }}</td>
                                        <td><img src="{{ $accept_complain->image }}" style="width:100px;height:100px;" alt="" /></td>
                                        <td>{{ $accept_complain->title }}</td>
                                        <td>
                                        <p class="text-{{$accept_complain->status->color}}"><i class="fa fa-circle" style="margin-right:5px;" aria-hidden="true"></i>{{$accept_complain->status->name}}</p>
                                        </td>
                                    

                                        <td style="width:30%;">{{ substr($accept_complain->description,0,30) }}...</td>
                                        <td>{{ $accept_complain->township->name }}</td>
                                        <td>{{ $accept_complain->quarter_village->name }}</td>
                                        <td>{{ $accept_complain->quarter_village->complain_place->name }}</td>
                                    
                                        <td>{{ $accept_complain->created_at }}</td>
                                        <td>
                                        <form method="post" action="{{ route('request_complain.destroy', $accept_complain->id) }}" onsubmit="return confirm('Are you sure delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    
                                        </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('request_complain.show', $accept_complain->id ) }}"><button class="btn btn-sm btn-success">View</button></a>
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
        </div>
    </div>
@endsection


