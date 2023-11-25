<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;


use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    //
    public function showRegisterPage()
    {
        if(\Auth::user())
        {
            \Auth::logout(); //this is considered as leatest method
 
            $request->session()->invalidate();
     
            $request->session()->regenerateToken();
        }
        return view('register');
    }

    public function startRegistration(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:30',
            'username'        => 'required|string|max:20',
            'email'           => 'required|email|unique:users,email',
            'password'        => 'required|confirmed|min:8',
        ]);



        $user = User::create([
            'name'            => $request->name,
            'username'        => $request->username,
            'email'           => $request->email,
            'password'        => $request->password
            
        ]);

        if(!is_null($user))
        {
            event(new Registered($user));

            //now send the verification link to the user 
            // we can use mail function



            // if(\Auth::attempt($request->only('email', 'password')))
            // {
            //     return redirect('/')->with('success', "Account successfully registered.");
            
            // }
            
                return redirect('/')->with('success', "Account successfully registered.")->with('info', "Please verify your email address before proceduring any further");
        }
        else
        {
            return redirect('/register');

            // return view('register',[
            //     'name'            => $request->name,
            //     'username'        => $request->username,
            //     'email'           => $request->email,
            // ]); 
            //return back()->with("failed", "Alert! Failed to register");
        }
    }
}
