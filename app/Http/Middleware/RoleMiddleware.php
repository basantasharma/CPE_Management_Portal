<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersRolesController;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (\Auth::check()) {
            // Get the authenticated user's ID
            $userId = \Auth::id();
            $roleId = (new RoleController())->getRoleId($role);
            $hasRole = (new UsersRolesController())->hasUserRole($userId, $roleId);

            // Check if the user has the "admin" role
            // $hasAdminRole = \DB::table('users_roles')
            //     ->where('user_id', $userId)
            //     ->join('roles', 'users_roles.role_id', '=', 'roles.id')
            //     ->where('roles.role', 'admin')
            //     ->exists();




            // Check if the user has the "edit" permission
            // $hasEditPermission = \DB::table('users_roles')
            //     ->where('user_id', $userId)
            //     ->join('roles', 'users_roles.role_id', '=', 'roles.id')
            //     ->join('permissions_roles', 'roles.id', '=', 'permissions_roles.role_id')
            //     ->join('permissions', 'permissions_roles.permission_id', '=', 'permissions.id')
            //     ->where('permissions.permission', 'edit')
            //     ->exists();

            // If the user has both the "admin" role and the "edit" permission,
            // allow the request to proceed. Otherwise, return a 403 error.
            if ($hasRole) {   //&& $hasEditPermission
                return $next($request);
            } else {
                return back()->with('failed', 'sorry you are not authorized to access');
                //abort(403, 'Unauthorized action.');
            }
        } else {
            // If the user is not authenticated, redirect them to the login page
            return redirect()->route('login');
        }

        // if(!(\Auth::user()->hasrole($role)))
        // {
        //     abort(403, 'Unauthorized'); 
        // }
        // // if (! $request->user()->hasRole($role)) {
        // //     abort(403, 'Unauthorized');
        // // }
        
        // return $next($request);
    }
}
