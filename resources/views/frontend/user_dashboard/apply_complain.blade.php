@extends('frontend.user_dashboard.user_template')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
            <div class="sparkline12-hd">
            @if(session('success_complain'))
                <div class="alert alert-success" id="complain_msg">
                {{ session('success_complain') }}
                <button type="button" class="close" data-dismiss="alert">x</button>
                </div>
            @endif
                <div class="main-sparkline12-hd">
                    <h1>တိုင်ကြားစာတင်ရန်</h1>
                </div>
            </div>
            <div class="sparkline12-graph" style="margin-top:50px;">
                <div class="basic-login-form-ad">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="all-form-element-inner">
                                <form action="{{ route('request_complain.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">မြို့နယ်မြို့နယ်</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list" id="township_container">
                                                    <select class="form-control custom-select-value" name="selected_township" id="township">
                                                        <option selected value="1" disabled>မြို့နယ်ရွေးရန်</option>
                                                        @foreach($all_township as $township)
                                                        <option value="{{ $township->id }}" id="select_township">{{ $township->name }}</option>
                                                        @endforeach   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                                                <label class="login2 pull-right pull-right-pro">ရပ်ကွက်(သို့)ကျေးရွာရွေးရန်</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <div class="bt-df-checkbox">
                                                    <div class="row" id="qv">
                                                    @foreach($all_complain_place as $complain_place)      
                                                        <div class="col-lg-2">
                                                            <input type="radio" @if ($loop->first) checked @endif name="selected_qv" value="{{ $complain_place->id }}" class="custom-control-input" id="qua_vill">
                                                            <label class="custom-control-label"> {{ $complain_place->name }}</label>
                                                        </div>
                                                    @endforeach  
                                                        <div class="col-lg-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">တိုင်ကြားလိုသောနေရာရွေးရန်</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="selected_place" id="qua_vill_list">
                                                       

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">ခေါင်းစဥ်</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list">
                                                    <input type="text" name="complain_title" placeholder="Complain Title" class="form-control input-lg">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">ပုံ</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list">
                                                    <input type="file" name="image" class="form-control input-lg">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">အကြောင်းအရာ</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list">
                                                    <textarea name="complain_description" style="height:200px;" class="form-control input-lg"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="login-btn-inner">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-9">
                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">ပေးပို့သည်</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

<script>

    $(document).ready(function(){
        $("#complain_msg").fadeTo(2000, 500).slideUp(500, function(){
            $("#complain_msg").slideUp(500);
        });

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });

        $('#qv').on('change', '#qua_vill', function() {//do action when change Quarter or Village
            $township_id= $('#township').val();
            $qua_vill_id= $(this).val();

            console.log('this is qv'+$qua_vill_id);

            $data = {
                township_id: $township_id,
                qua_vill_id: $qua_vill_id
            };
            //console.log($data);

            $.ajax({
                url: '/user/apply_complain',
                data: { data: $data },
                type: 'POST',
                success: function(res){
                    $('#qua_vill_list').empty();
                    
                   $('#qua_vill_list').append('<option selected disabled>Choose one...</option>');
                   $.each(res,function(index,value){
                        $('#qua_vill_list').append('<option value="'+value.id+'">'+value.name+'</option>');
                   });


                }
              
            });

    
        });

        $('#township_container').on('change', '#township', function(){//do action when change Township
            $qua_vill_id= $('#qua_vill').val();
            $township_id= $(this).val();

            console.log('this is auto check'+$qua_vill_id);

            $data = {
                township_id: $township_id,
                qua_vill_id: $qua_vill_id
            };

            $.ajax({
                url: '/user/apply_complain',
                data: { data: $data },
                type: 'POST',
                success: function(res){
                    $('#qua_vill_list').empty();
                    
                   $('#qua_vill_list').append('<option selected disabled>Choose one...</option>');
                   $.each(res,function(index,value){
                        $('#qua_vill_list').append('<option value="'+value.id+'">'+value.name+'</option>');
                   });



                }
              
            });
        });
    });
    
</script>

@endsection

