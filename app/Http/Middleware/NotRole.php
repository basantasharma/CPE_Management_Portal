<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersRolesController;


class NotRole
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

            // allow the request to proceed. Otherwise, return a 403 error.
            if (!$hasRole) {   //&& $hasEditPermission
                return $next($request);
            } else {
                return back()->with('failed', 'sorry you are not authorized to access');
                //abort(403, 'Unauthorized action.');
            }
        } else {
            // If the user is not authenticated, redirect them to the login page
            return redirect()->route('login');
        }
    }
}
