<?php

namespace App\Admin\CategoryEvent\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryEvent extends Model
{
    protected $table = 'category_event';

    protected $fillable = [
        'name',
        'slug'
    ];
}
