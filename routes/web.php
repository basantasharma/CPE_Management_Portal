<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersRolesController;
use App\Http\Controllers\UsersPermissionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RouterSettingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\EmailVarificationController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'showHomePage'])->name('index');
Route::get('/adduser', [UserController::class, 'showAddUserPage'])->name('adduser')->middleware(['auth', 'verified']);;

Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
Route::post('/login', [LoginController::class, 'startLogin'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register');
Route::post('/register', [RegisterController::class, 'startRegistration'])->name('register');

Route::get('/dashboard', [DashboardController::class, 'showDashboardPage'])->name('dashboard')->middleware('auth');
Route::get('/account', [AccountController::class, 'showAccountPage'])->name('account')->middleware('auth');
Route::get('/router', [RouterSettingController::class, 'showRouterSettingPage'])->name('router')->middleware('auth');
Route::get('/support', [SupportController::class, 'showSupportPage'])->name('support')->middleware('auth');
Route::get('/offers', [OffersController::class, 'showOffersPage'])->name('offers');
Route::get('/timeline', [TimelineController::class, 'showTimelinePage'])->name('timeline');



Route::get('/deleteallusers', [UserController::class, 'deleteAllUsers'])->name('deleteAllusers')->middleware('auth');
Route::get('/getallusers', [UserController::class, 'getAllUsers'])->name('getAllusers')->middleware('auth');

// Route::get('/role', [RoleController::class, 'getRoleId'])->name('seeRoles')->middleware('auth');
Route::post('/role', [RoleController::class, 'addRole'])->name('addRole')->middleware('auth');
Route::post('/deleterole', [RoleController::class, 'deleteRole'])->name('deleteRole')->middleware('auth');
Route::get('/deleteallrole', [RoleController::class, 'deleteAllRoles'])->name('deleteAllRoles')->middleware('auth');

// Route::get('/permission', [PermissionsController::class, 'getPermissionId'])->name('seePermission')->middleware('auth');
Route::post('/permission', [PermissionsController::class, 'addPermission'])->name('addPermission')->middleware('auth');
Route::post('/deletepermission', [PermissionsController::class, 'deletePermission'])->name('deletePermission')->middleware('auth');
Route::get('/deleteallPermission', [PermissionsController::class, 'deleteAllPermissions'])->name('deleteAllPermissions')->middleware('auth');


Route::post('/adduserrole', [UsersRolesController::class, 'addUserRole'])->name('addUserRole')->middleware('auth');
Route::post('/removeuserrole', [UsersRolesController::class, 'removeUserRole'])->name('removeUserRole')->middleware('auth');
Route::get('/deletealluserrole', [UsersRolesController::class, 'deleteAllUserRoles'])->name('deleteAlluserRole')->middleware('auth');
// Route::post('/adduserrole', [UserController::class, 'getUserById'])->name('getUserById')->middleware('auth');
// Route::get('/hasrole', [RoleController::class, 'seeAllRoles'])->name('seeRoles')->middleware('auth');

Route::post('/adduserpermission', [UsersPermissionsController::class, 'addUserPermission'])->name('addUserPermission')->middleware('auth');
Route::post('/removeuserpermission', [UsersPermissionsController::class, 'removeUserPermission'])->name('removeUserPermission')->middleware('auth');
Route::get('/deletealluserpermission', [UsersPermissionsController::class, 'deleteAllUserPermissions'])->name('deleteAlluserPermission')->middleware('auth');


Route::get('/email/verify',[EmailVarificationController::class, 'index'])->middleware('auth')->name('verification.notice');


 
Route::get('/email/verify/{id}/{hash}', [EmailVarificationController::class, 'emailVerify'])->middleware(['signed'])->name('verification.verify');
// Route::get('/email/verify/{id}/{hash}', [EmailVarificationController::class, 'emailVerify'])->middleware(['auth', 'signed'])->name('verification.verify');


 
Route::post('/email/verification-notification',[EmailVarificationController::class, 'sendEmailVerificationNotification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::middleware([])->group(function () {
Route::middleware(['auth', 'role:admin'])->group(function () {
//Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin');

    //Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    //Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});
