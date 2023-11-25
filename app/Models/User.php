<?php

namespace App\Models;

use App\Models\Roles;
use App\Models\Permissions;
use App\Models\UsersRoles;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        // 'router_serial_no',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'users_roles', 'user_id', 'role_id');
    }
    public function permissions()
    {
        return $this->hasManyThrough(Permissions::class, Roles::class);
    }

    public function hasRole($role)
    {
        
        $roleid = Roles::where('role', '=', $role)->pluck('id');
        //$userid = User::where('id', '=', auth()->user()->id)->pluck('id');
        //dd(UsersRoles::where('role_id', '=', $roleid)->where('user_id', '=', $userid)->pluck('id'));
        return UsersRoles::where('role_id', '=', $roleid)->where('user_id', '=', auth()->user()->id)->pluck('id');
        //return $this->roles->contains('name', $role);
        //return Roles::contains('name', $role);
        //return $this->roles()->whereIn('name', $role);//->exists();
    }

    public function hasPermission($permission)
    {
        return $this->permissions()->where('name', $permission)->exists();
    }
}
