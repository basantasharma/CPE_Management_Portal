<?php

namespace App\Http\Controllers;


use App\Models\Roles;
use App\Models\UsersRoles;
use Illuminate\Http\Request;

use App\Http\Controllers\RoleController;


class UsersRolesController extends Controller
{

    public function addUserRole(Request $request)
    {
        $request->validate([
            'roleid'            => 'required|exists:roles,id',
            'userid'            => 'required|exists:users,id',
        ]);
        
        $douserHasRole = $this->hasUserRole($request->userid, $request->roleid);


        //if to check if data exist already or not
        if($douserHasRole)
        {
            return redirect('/admin')->with('failed', 'User already has the specified role');
        }
        else
        {
            $data=array([
                'role_id'=> $request->roleid,
                'user_id' => $request->userid
            ]);
            $role = UsersRoles::insert($data);
            if($role)
            {
                return redirect('/admin')->with('success', "Role Added successfully.");
            }
            else
            {
                return redirect('/admin')->with('failed', "Sorry something went wrong");
            }
        }
        
    }


    public function seeUserRole()
    {
        $data = [];
        $datas = [];
        $userId = \Auth::id();
        $results = UsersRoles::select('role_id')->where('user_id', $userId)->get();
        foreach($results as $result=>$key)
        {
            array_push($data, $key->role_id);
        }
        $roles = Roles::select('role', 'id')->whereIn('id', $data)->get();
        foreach($roles as $role=>$key)
        {
            array_push($datas, $key->role);
        }
        return $roles;
    }


    public function deleteAllUserRoles()
    {
        $allrole = UsersRoles::delete();
        if($allrole)
        {
            return back()->with('success', 'All roles deleted');
        }
        return back()->with('failed', ' Operetion failed');
    }


    
    //
    public function removeUserRole(Request $request)
    {
        $request->validate([
            'roleid'            => 'required|exists:roles,id',
            'userid'            => 'required|exists:users,id',
        ]);
        $douserHasRole = ($this->hasUserRole($request->userid, $request->roleid));

        if($douserHasRole)
        {
            // dd(gettype($douserHasRole));
            $data=array([
                'role_id'=> $request->roleid,
                'user_id' => $request->userid
            ]);
            $role = UsersRoles::where('role_id', $request->roleid)->where('user_id', $request->userid)->delete();
            if($role)
            {
                return redirect('/admin')->with('success', "Role removed successfully.");
            }
            else
            {
                return redirect('/admin')->with('failed', "Sorry something went wrong");
            }
        }
        else
        {
            return redirect('/admin')->with('failed', 'User may not have specified role');

            
        }
    }




    public function hasUserRole($userId, $roleId)
    {
        $results = UsersRoles::select('id')->where('role_id', $roleId)->where('user_id', $userId)->get()->pluck('id')->first();
       
        if(gettype($results) == 'NULL')
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}