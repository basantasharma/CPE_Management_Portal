<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function showAddUserPage(Request $request)
    {
        return view('adduser');
    }
    //
    public function getUserById(Request $request)
    {
        $request->validate([
            'role'      =>  'required|string|max:30|exists:roles,role|min:4',
            'userid'    =>  'required|numeric|exists:users,id',
        ]);

        // return $request->userId;
        return back()->with('success', 'user is persent in the user database');
    }

    public function deleteAllUsers()
    {
        $alluser = User::delete();
        if($alluser)
        {
            return redirect('/')->with('success', 'All users deleted');
        }
        return back()->with('failed', 'Cannot delete all users');
    }


    //it will get all users registered in the database 
    public function getAllUsers()
    {
        $alluser = User::select('id','username')->get();
        return $alluser;
    }
}
