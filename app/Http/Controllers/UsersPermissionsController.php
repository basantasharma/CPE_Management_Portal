<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\UsersPermissions;
use App\Models\Permissions;

class UsersPermissionsController extends Controller
{
    //
    public function addUserPermission(Request $request)
    {
        $request->validate([
            'permissionid'            => 'required|exists:permissions,id',
            'userid'            => 'required|exists:users,id',
        ]);
        
        $douserHasPermission = $this->hasUserPermission($request->userid, $request->permissionid);


        //if to check if data exist already or not
        if($douserHasPermission)
        {
            return back()->with('failed', 'User already has the specified permission');
        }
        else
        {
            $data=array([
                'permission_id'=> $request->permissionid,
                'user_id' => $request->userid
            ]);
            $permission = UserPermissions::insert($data);
            if($permission)
            {
                return back()->with('success', "Permission to user Added successfully.");
            }
            else
            {
                return back()->with('failed', "Sorry something went wrong");
            }
        }
        
    }


    public function seeUserPermission()
    {
        $data = [];
        $datas = [];
        $userId = \Auth::id();
        $results = UsersPermissions::select('permission_id')->where('user_id', $userId)->get();
        foreach($results as $result=>$key)
        {
            array_push($data, $key->permission_id);
        }
        $permissions = Permissions::select('permission', 'id')->whereIn('id', $data)->get();
        foreach($permissions as $permission=>$key)
        {
            array_push($datas, $key->permission);
        }
        return $permissions;
    }


    public function deleteAllUserPermissions()
    {
        $allpermission = UsersPermmissions::delete();
        if($allpermission)
        {
            return back()->with('success', 'All permissions to all user deleted');
        }
        return back()->with('failed', ' Operetion failed');
    }


    
    //
    public function removeUserPermission(Request $request)
    {
        $request->validate([
            'permissionid'            => 'required|exists:permissions,id',
            'userid'            => 'required|exists:users,id',
        ]);
        $douserHasPermission = ($this->hasUserPermission($request->userid, $request->permissionid));

        if($douserHasPermission)
        {
            // dd(gettype($douserHasRole));
            $data=array([
                'Permission_id'=> $request->permissionid,
                'user_id' => $request->userid
            ]);
            $permission = UsersPermissions::where('permission_id', $request->permissionid)->where('user_id', $request->userid)->delete();
            if($permission)
            {
                return back()->with('success', "Permission removed successfully.");
            }
            else
            {
                return back()->with('failed', "Sorry something went wrong");
            }
        }
        else
        {
            return back()->with('failed', 'User may not have specified permission');

            
        }
    }




    public function hasUserPermission($userId, $permissionId)
    {
        $results = UsersPermissions::select('id')->where('permission_id', $roleId)->where('user_id', $userId)->get()->pluck('id')->first();
       
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
