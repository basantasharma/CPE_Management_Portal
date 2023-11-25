<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */


     // This is where the policies are defined
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     */

     
     // we define gates here 
    public function boot(): void
    {
        //
        // Gate::define('update', function(User $user, ));
    }
}
