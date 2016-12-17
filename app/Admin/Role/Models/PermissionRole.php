<?php

namespace App\Admin\Role\Models;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Role\Models\Permission;
use App\Admin\Role\Models\Role;

class PermissionRole extends Model
{
    protected $table = 'permission_role';

    protected $fillable = ['permission_id' , 'role_id'];

    public function permission()
    {
       return $this->belongsToMany(Permission::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
}
