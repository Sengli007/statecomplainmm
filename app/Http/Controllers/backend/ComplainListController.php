<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Complain;
use App\Status;

class ComplainListController extends Controller
{
    public function solved_complain(){

        $complains = Complain::where('status_id','=',2)->paginate(10);

        return view('backend.complain.solved_complain_list',compact('complains'));
    }

    public function new_complain(){

        $complains = Complain::where('status_id','=',1)->paginate(10);

        return view('backend.complain.new_complain_list',compact('complains'));
    }

    public function rejected_complain(){

        $complains = Complain::where('status_id','=',3)->paginate(10);

        return view('backend.complain.rejected_complain_list',compact('complains'));
    }

    public function all_complain(){

        $complains = Complain::paginate(10);

        return view('backend.complain.all_complain_list',compact('complains'));
    }

    public function view_detail_complain($id){
        $one_complain= Complain::where('id','=',$id)->first();
        return view('backend.complain.view_detail', compact('one_complain'));
    }

    public function all_view_detail_complain($id){
        $one_complain= Complain::where('id','=',$id)->first();
        return view('backend.complain.view_detail', compact('one_complain'));
    }

   
    public function edit_new_complain($id){

        // return $id;

        $complains = Complain::find($id);
        
        $all_status = Status::all();

        return view('backend.complain.edit_new_complain_list',compact('complains','all_status'));
    }

    public function update_new_complain(Request $request, $id)

    {
        $complains = Complain::find($id);
        $complains->status_id = $request['slected_status'];
        $complains->save();

        return redirect()->route('new_complain');
    }


    public function delete_complain($id)
    {
       
        $complain= Complain::find($id);

        if(\File::exists(public_path($complain->image))){

            \File::delete(public_path($complain->image));
        
        }


        $complain->delete();
        return redirect()->route('all_complain');
    }
}
