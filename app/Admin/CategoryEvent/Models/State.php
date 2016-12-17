<?php

namespace App\Admin\CategoryEvent\Models;

use Illuminate\Database\Eloquent\Model;


class State extends Model
{
    protected $table = 'state';

    protected $fillable = ['name','slug'];
}
