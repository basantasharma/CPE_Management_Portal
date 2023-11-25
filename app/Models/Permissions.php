<?php

namespace App\Models;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = ['permission'];
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'permissions_roles', 'permission_id', 'role_id');
    }
}
