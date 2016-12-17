<?php

namespace App\Admin\Event\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'city_id',
        'category_event_id',
        'name',
        'date',
        'hour',
        'local',
        'organization',
        'manager',
        'email',
        'site',
        'phone',
        'ingress',
        'description'
    ];

    protected $dates = array('date', 'created_at', 'updated_at');

    public function setDateAttribute($date)
    {
        $this->attributes['date'] = Carbon::createFromFormat('d/m/Y', $date);
    }
}
