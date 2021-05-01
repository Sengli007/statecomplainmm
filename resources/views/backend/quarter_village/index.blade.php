@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                    ရပ်ကွက် နှင့် ကျေးရွာ စာရင်း
                    </div>
                    <div class="col-lg-4 col-md-2 col-sm-12">
                        <a href="{{route('quarter_village.create')}}" class="btn btn-primary">ရပ်ကွက်နှင့်ကျေးရွာအသစ်ထည့်ရန်</a>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col" style="width: 5%">စဥ်</th>
                            <th scope="col">အမည်</th>
                            <th scope="col">မြို့နယ်</th>
                            <th scope="col">ရပ်ကွက်/ကျေးရွာ</th>
                            <th scope="col" style="width: 10%" colspan="2">လုပ်ဆောင်မှု</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $index=1;
                        @endphp
                        @foreach($all_qua_vill as $qua_vill)
                            <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $qua_vill->name }}</td>
                            <td>{{ $qua_vill->township->name }}</td>
                            <td>{{ $qua_vill->complain_place->name }}</td>
                            <td>
                                <a href="{{route('quarter_village.edit',$qua_vill->id)}}" class="btn btn-sm btn-success">ပြင်ဆင်ရန်</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('quarter_village.destroy',$qua_vill->id)}}" onsubmit="return confirm('Are you sure delete?')">
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
                    {{ $all_qua_vill->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection