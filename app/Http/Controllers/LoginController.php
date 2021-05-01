<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use App\Township;
use App\QuarterVillage;

class LoginController extends Controller
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
        return view('login',compact('townships','quarters','villages'));
    }

    protected function authenticated()
    {
        $role = \Auth::user()->role;

        if($role == 'admin') {
            return redirect('/admin');
        }else{
            return redirect('/');
        }
    }

    public function userAuthentication(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password)) && Auth::user()->role == 'admin'){
            return redirect()->intended(route('admin.dashboard'));
        }
        elseif(Auth::attempt(array('email' => $request->email, 'password' => $request->password)) && Auth::user()->role == 'user'){
            return redirect()->intended(route('user.dashboard'));
        }
        else{
            return back()->withInput($request->only('email', 'remember'))->with('login_er','အီးလ်မေး(သို့)လျှို့ဝှက်နံပါတ်မှားနေပါသည်!');
        }
        die;
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
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
        //
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
