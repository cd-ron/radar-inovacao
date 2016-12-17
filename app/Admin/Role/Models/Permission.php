<?php

namespace App\Admin\Role\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';

    protected $fillable = ['name', 'slug'];

    public function role()
    {
       return $this->belongsToMany(Role::class);
    }
}
