<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Township;
use App\ComplainPlace;
use App\QuarterVillage;

class QuarterVillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_qua_vill= QuarterVillage::paginate(10);
        return view('backend.quarter_village.index', compact('all_qua_vill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_township= Township::all();
        $all_complain_place= ComplainPlace::all();
        return view('backend.quarter_village.create', compact('all_township','all_complain_place'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $qua_vill= new QuarterVillage();
        $qua_vill->name= request('township_name');
        $qua_vill->township_id= request('selected_township');
        $qua_vill->complainplace_id= request('selected_place');
        $qua_vill->save();

        return redirect()->route('quarter_village.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qua_vill= QuarterVillage::find($id);

        $all_township= Township::all();
        $all_complain_place= ComplainPlace::all();

        return view('backend.quarter_village.edit',compact('qua_vill','all_township','all_complain_place'));
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
        $qua_vill = QuarterVillage::find($id);

        $qua_vill->name = request('township_name');
        $qua_vill->township_id = request('selected_township');
        $qua_vill->complainplace_id = request('selected_place');
        $qua_vill->save();

        return redirect()->route('quarter_village.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qua_vill = QuarterVillage::find($id);

        $qua_vill->delete();

        return redirect()->route('quarter_village.index');
    }
}
