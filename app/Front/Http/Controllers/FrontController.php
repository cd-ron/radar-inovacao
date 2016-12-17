<?php

namespace App\Front\Http\Controllers;

use App\Admin\Event\Models\Event;
use App\Core\Http\Controllers\CoreController;

class FrontController extends CoreController
{
    public function home()
    {
        $events = Event::all();

        return view('front::home')->with(compact('events'));
    }

}
