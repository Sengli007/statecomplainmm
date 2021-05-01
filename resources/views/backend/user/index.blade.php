@extends('backend.admin_main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   ပြည်သူလူထု စာရင်း
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col" style="width: 5%">စဥ်</th>
                            <th scope="col">အမည်</th>
                            <th scope="col">အီးလ်မေး</th>
                            <th scope="col">ဖုန်းနံပါတ်တ်</th>
                            
                            <th scope="col" style="width: 10%" colspan="2">လုပ်ဆောင်ချက်</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $index=1;
                        @endphp
                        @foreach($all_user as $user)
                            <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            
                            <td>
                                <form method="post" action="{{route('user.destroy',$user->id)}}" onsubmit="return confirm('Are you sure delete?')">
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
                    {{ $all_user->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection