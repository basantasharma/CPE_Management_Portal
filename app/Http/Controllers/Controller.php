<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use App\Http\Controllers\RoleController;

// use View;

class Controller extends BaseController
{
    // public function __construct()
    // {
    //     $userrole = (new RoleController())->seeUserRole();
    //     View::share('userhasrole', $this->userrole);
    // }
    use AuthorizesRequests, ValidatesRequests;

    
}
