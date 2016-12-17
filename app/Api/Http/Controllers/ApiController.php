<?php

namespace App\Api\Http\Controllers;

use App\Admin\Category\Models\Category;
use App\Admin\Client\Models\Client;
use App\Admin\Event\Models\Event;
use App\Core\Http\Controllers\CoreController as CoreController;

class ApiController extends CoreController
{

    public function getCategories()
    {
        $categories = Category::whereActive('1')->get();

        return $categories;
    }

    public function getClients($category_id)
    {
        $clients = Client::whereActive('1')->where('category_id', $category_id)->get();

        return $clients;
    }

    public function getClientDetail($client_id)
    {
        $clients = Client::whereId($client_id)->get();

        return $clients;
    }

    public function getEvents()
    {
        $events = Event::get();

        return $events;
    }
}
