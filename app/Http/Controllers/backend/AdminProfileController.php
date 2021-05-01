<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('backend.profile.index',compact('user'));
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
        $user = Auth::user()->find($id);
        return view('backend.profile.edit',compact('user'));
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
        $current_password = request('current_password');

            if($current_password == ''){
                
                $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                ]);

                $user = Auth::user();
                $user->name = request('name');
                $user->email = request('email');
                $user->phone = request('phone');
                $user->password = Auth::user()->password;
                $user->save();
                return redirect()->route('adminprofile.index')->with("success","Profile changed successfully!");
            }
            elseif(!(Hash::check($request->get('current_password'), Auth::user()->password))){
                    // The passwords matches
                    return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            }
        
            if(strcmp($request->get('current_password'), $request->get('password')) == 0){
                    //Current password and new password are same
                    return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            }

            elseif(!strcmp($request->get('password'), $request->get('password_confirmation')) == 0){
                //New password and Confirm new password are different
                return redirect()->back()->with("error","New Password must be same with confirm new password. Please choose same password.");
            }

                $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'current_password' => 'required',
                    'password' => 'required|min:8',
                    'password_confirmation' => 'required|min:8|same:password',
                ]);

                    $user = Auth::user();
                    $user->name = request('name');
                    $user->email = request('email');
                    $user->phone = request('phone');
                    $user->password = Hash::make($request->get('password'));
                    $user->save();
                    return redirect()->route('adminprofile.index')->with("success","Password changed successfully !");
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
