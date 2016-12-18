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

    public function verifyMonth($month)
    {
        switch ($month){
            case 1 :
                return 'Janeiro';
            case 2 :
                return 'Fevereiro';
            case 3 :
                return 'Março';
            case 4 :
                return 'Abril';
            case 5 :
                return 'Maio';
            case 6 :
                return 'Junho';
            case 7 :
                return 'Julho';
            case 8 :
                return 'Agosto';
            case 9 :
                return 'Setembro';
            case 10 :
                return 'Outubro';
            case 11 :
                return 'Novembro';
            case 12 :
                return 'Dezembro';
        }
    }
}
