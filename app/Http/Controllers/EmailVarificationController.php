<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVarificationController extends Controller
{
    //
    public function index()
    {
        return view('auth.verify');
    }


    public function emailVerify(EmailVerificationRequest $request)
    {
        $request->fulfill();
 
        return redirect('/home');
    }

    public function sendEmailVerificationNotification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
 
        return back()->with('message', 'Verification link sent!');
    }
}
