<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ComplainPlace;

class ComplainPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_complain_place= ComplainPlace::all();
        return view('backend.complain_place.index', compact('all_complain_place'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.complain_place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $complain_place= new ComplainPlace();
        $complain_place->name= request('complain_place_name');
        $complain_place->save();

        return redirect()->route('complain_place.index');
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
        $complain_place = ComplainPlace::find($id);
        
        return view('backend.complain_place.edit', compact('complain_place'));
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
        $complain_place = ComplainPlace::find($id);

        $complain_place->name = request('complain_place_name');

        $complain_place->save();

        return redirect()->route('complain_place.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complain_place = ComplainPlace::find($id);

        $complain_place->delete();

        return redirect()->route('complain_place.index');
    }
}
