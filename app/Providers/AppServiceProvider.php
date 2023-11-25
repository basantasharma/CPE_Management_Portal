<?php

namespace App\Providers;


use Illuminate\Support\Facades\Blade;

use Illuminate\Support\ServiceProvider;


use App\Http\Controllers\UsersRolesController;
use App\Http\Controllers\UsersPermissionsController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Blade::if('role', function ($role) {
            $roles = (new UsersRolesController())->seeUserRole();
            foreach($roles as $rolee)
            {
                if($rolee->role == $role || $rolee->role == 'admin')
                {
                    return true;
                }
            }
            return false;
        });

        Blade::if('permission', function ($permission) {
            $permissions = (new UsersPermissionsController())->seeUserPermission();
            foreach($permissions as $permissionss)
            {
                if($permissionss->permission == $permission || $permissionss->permission == 'all')
                {
                    return true;
                }
            }
            return false;
        });
    }
}
