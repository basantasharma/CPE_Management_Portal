<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;


class AdminController extends Controller
{
    public function showadminPage()
    {
        $registeredUsers = (new UserController())->getAllUsers();
        $registeredRoles = (new RoleController())->seeAllRoles();
        $registeredPermissions = (new PermissionsController())->seeAllPermissions();
        return view('admin')->with('registeredusers', $registeredUsers)->with('registeredroles', $registeredRoles)->with('registeredpermissions', $registeredPermissions);
    }
    //
}
