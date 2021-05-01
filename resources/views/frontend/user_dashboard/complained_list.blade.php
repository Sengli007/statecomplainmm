@extends('frontend.user_dashboard.user_template')

@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>တိုင်ကြားခဲ့သော စာရင်း</h4>
                        <div class="add-product">
                            
                        </div>
                        <div class="asset-inner">
                            <table class="table table-striped" style="margin-bottom:530px;">
                                <thead>
                                <tr>
                                    <th scope="col">စဥ်</th>
                                    <th scope="col" width="50%">ပုံ</th>
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
                                    @php 
                                    $index=1;
                                    @endphp
                                    @foreach($all_complain_list as $complain_list)
                                    
                                    <tr>

                                        <td>{{ $index }}</td>
                                        <td><img src="{{ $complain_list->image }}" style="width:100px;height:100px;" alt="" /></td>
                                        <td>{{ $complain_list->title }}</td>
                                        <td>
                                        <p class="text-{{$complain_list->status->color}}"><i class="fa fa-circle" style="margin-right:5px;" aria-hidden="true"></i>{{$complain_list->status->name}}</p>
                                        </td>
                                    

                                        <td>{{ $complain_list->township->name }}</td>
                                        <td>{{ $complain_list->quarter_village->name }}</td>
                                        <td>{{ $complain_list->quarter_village->complain_place->name }}</td>
                                    
                                        <td>{{ $complain_list->created_at }}</td>
                                        <td>
                                        <form method="post" action="{{ route('request_complain.destroy', $complain_list->id) }}" onsubmit="return confirm('Are you sure delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">ဖျက်ရန်</button>
                                    
                                        </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('request_complain.show', $complain_list->id ) }}"><button class="btn btn-sm btn-success">ကြည့်ရန်</button></a>
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


