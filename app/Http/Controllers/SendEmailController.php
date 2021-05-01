<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request,[
            'name'  =>  'required',
            'phone' =>  'required',
            'email' =>  'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name'  => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );


        Mail::to('htoomyatmaw.lamm@gmail.com')->send(new SendMail($data));
        return back()->with('success','Thanks for contacting us!');
    }
}
