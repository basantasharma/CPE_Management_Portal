<?php

namespace App\Http\Controllers;


use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function addRole(Request $request)
    {
        $request->validate([
            'role'            => 'required|string|max:30|unique:roles|min:2',
        ]);
        $data=array('role'=>strtolower($request->role));
        $role = Roles::insert($data);
        // $role = \DB::table('roles')->insert($data);
        if($role)
        {
            return back()->with('success', "Role Added successfully.");
        }
        else
        {
            return back()->with('failed', "Sorry something went wrong");
        }
    }    

    //it works 90% null value return need to be test ///tested if no role found it returns a null value with null datatype
    public function getRoleId($role)
    {
        $userId = \Auth::id();
        // $result = \DB::table('roles')->select('id')->where('role', $role)->get()->pluck('id')->first();
        $result = Roles::select('id')->where('role', $role)->get()->pluck('id')->first();
        if($result)
        {
            return $result;
        }
        //dd('sorry no such role exist');
    }

    
    public function seeAllRoles()
    {
        $userId = \Auth::id();
        // $results = \DB::table('roles')->select('role', 'id')->get();
        $results = Roles::select('role', 'id')->get();
        return $results;
    }



    public function deleteAllRoles()
    {
        // $allrole = \DB::table('roles')->delete();
        $allrole = Roles::delete();
        if($allrole)
        {
            return back()->with('success', 'All roles deleted');
        }
        return back()->with('failed', 'Operation failed');
    }



    public function deleteRole(Request $request)
    {
        $request->validate([
            'roleid'            => 'required|string|max:30|exists:roles,id',
        ]);
        $deleterole = ROles::where('id', $request->roleid)->delete();
        // $deleterole = \DB::table('roles')->where('id', $request->roleid)->delete();
        if($deleterole)
        {
            return redirect('/admin')->with('success', 'role deleted');
        }
        return redirect('/admin')->with('failed', 'role cannot be deleted');
    }

}

