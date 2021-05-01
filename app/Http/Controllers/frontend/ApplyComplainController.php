<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Township;
use App\ComplainPlace;
use App\QuarterVillage;
use App\Complain;
use File;
use App\Status;

class ApplyComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_complain_list = Complain::where('user_id','=',  Auth::user()->id)->get();
        
        return view('frontend.user_dashboard.complained_list', compact('all_complain_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('image')){
            $photo= $request->file('image');
            $name=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('complain_img'),$name);
            $image='/complain_img/'.$name;
        }

        $status = Status::orderby('id', 'ASC')->first();

        $complain= new Complain();
        $complain->title= request('complain_title');
        $complain->image= $image;
        $complain->description= request('complain_description');
        $complain->user_id= Auth::user()->id;
        $complain->township_id= request('selected_township');
        $complain->quartervillage_id= request('selected_qv');
        $complain->status_id = $status->id;

        $complain->save();

        return redirect()->route('user.dashboard')->with('success_complain','Your complain has been send successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $one_complain= Complain::where('id','=',$id)->first();
        return view('frontend.user_dashboard.view_detail', compact('one_complain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complain= Complain::find($id);

        if(\File::exists(public_path($complain->image))){

            \File::delete(public_path($complain->image));
        
        }


        $complain->delete();
        return redirect()->route('request_complain.index');
    }

    public function get_data(Request $request){

        $data=request('data');
        $township_id=$data['township_id'];
        $qua_vill_id=$data['qua_vill_id'];

        $qua_vill= QuarterVillage::where('township_id','=',$township_id)->where('complainplace_id','=',$qua_vill_id)->get();
      
        return $qua_vill;
       
    }

    public function accept_complain(Request $request){
        $all_accept_complain = Complain::where('user_id','=',  Auth::user()->id)->where('status_id','=',2)->get();
        return view('frontend.user_dashboard.accept_complain', compact('all_accept_complain'));

    }

    public function reject_complain(Request $request){
        $all_reject_complain = Complain::where('user_id','=',  Auth::user()->id)->where('status_id','=',3)->get();
        return view('frontend.user_dashboard.reject_complain', compact('all_reject_complain'));

    }

    
}
