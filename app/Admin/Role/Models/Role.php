<?php

namespace App\Admin\Role\Models;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Role\Models\Permission;

class Role extends Model
{
    protected $table = 'role';

    protected $fillable = ['name'];

    public function permission()
    {
       return $this->belongsToMany(Permission::class);
    }
}
