<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Controllers\UsersRolesController;


use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // View::composer('*', function ($view) {
        //     $view->with('userRoles', (new UsersRolesController())->seeUserRole());
        //     // $view->with('userRoles', (new UsersRolesController())->seeUserRole());
        // });
    }
}
