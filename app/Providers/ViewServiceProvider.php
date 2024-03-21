<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Controllers\UsersRolesController;
use App\Http\Controllers\RouterSettingController;
use App\Http\Controllers\FivegRouterSettingController;


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
        View::composer(['fivegroutersetting'], function ($view) {
            $view->with('routerSettingInfo', json_decode((new FivegRouterSettingController())->getRouterSettingInfo(), true));
            // $view->with('routerInfo', json_decode((new FivegRouterSettingController())->getRouterInfo($id = '00259E-EG8041V5-48575443CC7B43AC'), true));
        });
        View::composer(['routersetting'], function ($view) {
            $view->with('routerSettingInfo', json_decode((new RouterSettingController())->getRouterSettingInfo(), true));  
        });
        View::composer(['dashboard'], function ($view) {
            $view->with('routerInfo', json_decode((new RouterSettingController())->getRouterInfo($id = '00259E-EG8141A5-48575443F6E9A3A4'), true));

            // $view->with('routerBands', (new RouterSettingController())->getSupportedFrequencyBand($id = '00259E-EG8141A5-48575443F6E9A3A4'));
            // $view->with('routerBands', json_decode((new RouterSettingController())->getSupportedFrequencyBand($id = '00259E-EG8141A5-48575443F6E9A3A4'), true));
            // $view->with('routerBands', (new RouterSettingController())->getSupportedFrequencyBand($id = '00259E-EG8141A5-48575443F6E9A3A4'));
        });
    }
}
