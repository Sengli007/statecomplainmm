<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Township;
use App\QuarterVillage;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $townships = Township::all()->count();
        $quarters  = QuarterVillage::where('complainplace_id',1)->count();
        $villages  = QuarterVillage::where('complainplace_id',2)->count();
        return view('register',compact('townships','quarters','villages'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:6|confirmed',
        ],

        [
            'email.unique' => 'အီးလ်မေး ရှိပြီးသားဖြစ်ပါသည်!',
            'phone.unique' => 'ဖုန်းနံပါတ် ရှိပြီးသားဖြစ်ပါသည်!',
            'password.min:6' => 'လျှို့ဝှက်နံပါတ်သည် အနည်းဆုံး‌‌‌‌‌‌‌ခြောက်လုံးနှင့်အထက်ဖြစ်ရမည် !',
            'password.confirmed' => 'လျှို့ဝှက်နံပါတ် နှင့် အတည်ပြုလျှို့ဝှက်နံပါတ် မတူပါ!',
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('/login');
            
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
        //
    }
}
