<?php

namespace App\Models;

use App\Models\Permissions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = ['role'];

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class, 'permissions_roles', 'role_id', 'permission_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'users_roles', 'role_id', 'user_id');
    }
}
