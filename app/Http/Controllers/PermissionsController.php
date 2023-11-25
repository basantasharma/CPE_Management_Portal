<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Permissions;

class PermissionsController extends Controller
{
    //
    public function addPermission(Request $request)
    {
        $request->validate([
            'permission'            => 'required|string|max:30|unique:permissions|min:2',
        ]);
        $data=array('permission'=>strtolower($request->permission));
        $permission = Permissions::insert($data);
        if($permission)
        {
            return back()->with('success', "Permission Added successfully.");
        }
        else
        {
            return back()->with('failed', "Sorry something went wrong");
        }

    }

    public function getPermissionId($permission)
    {
        $userId = \Auth::id();
        $result = Permissions::select('id')->where('permission', $permission)->get()->pluck('id')->first();
        if($result)
        {
            return $result;
        }
        //dd('sorry no such role exist');
    }

    public function seeAllPermissions()
    {
        $userId = \Auth::id();
        $results = Permissions::select('permission', 'id')->get();
        return $results;
    }

    public function deleteAllPermissions()
    {
        $allrole = Permissions::delete();
        if($allrole)
        {
            return back()->with('success', 'All permissions deleted');
        }
        return back()->with('failed', 'Operation failed');
    }

    public function deletePermission(Request $request)
    {
        $request->validate([
            'permissionid'            => 'required|string|max:30|exists:permissions,id',
        ]);
        $deletepermission = Permissions::where('id', $request->permissionid)->delete();
        if($deletepermission)
        {
            return redirect('/admin')->with('success', 'permission deleted');
        }
        return redirect('/admin')->with('failed', 'permission cannot be deleted');
    }

}
