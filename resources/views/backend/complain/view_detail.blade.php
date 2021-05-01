@extends('backend.admin_main')

@section('content')
<style>
    p,h3{
        color: black;
    }
    .card{
      
        margin-right:5px;
        margin-top: 20px;
        margin-left: 10px;
        box-shadow: 2px 2px 2px 2px #c4c3be;
        padding: 5px;
    }
</style>

    <div class="row">
        <div class="col-lg-12">
 
            <div class="card">
                <div class="card-header">
                    <h3>အသေးစိတ်ကြည့်ရှုခြင်း</h3><br>
                    <div class="row">
                        <div class="col-lg-3">
                        <img src="{{ $one_complain->image }}" alt="" width="200px" height="200px">
                        </div>
                        <div class="col-lg-9">
                            <p>ခေါင်းစဥ် :{{ $one_complain->title }}</p>
                            <p>မြို့နယ် :{{ $one_complain->township->name }}</p>
                            <p>ရပ်ကွက် (သို့) ကျေးရွာ :{{ $one_complain->quarter_village->complain_place->name }}</p>

                            <p>တိုင်ကြားထားသောနေရာ :{{ $one_complain->quarter_village->name }}</p>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4>အကြောင်းအရာ :</h4>
                    <hr>
                    <p class="card-text">{{ $one_complain->description }}</p>
                </div>
            </div>
         
        </div>
    </div>
@endsection



