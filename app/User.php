<?php

namespace App;

use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function role()
    {
        return $this->roles()->first();
    }

    public function hasPermission($permission)
    {
        if(in_array($permission, $this->roleAllPermissions())){
            return true;
        }
        return false;
    }
    public function roleAllPermissions()
    {
        return Role::find($this->roleName()->id)->permissions()->pluck('name')->toArray();
    }

    public function roleName()
    {
        return $this->roles()->first();
    }

}
