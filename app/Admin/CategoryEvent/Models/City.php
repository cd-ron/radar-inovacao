<?php

namespace App\Admin\CategoryEvent\Models;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    protected $table = 'city';

    protected $fillable = ['name', 'state_id'];
}
