<?php

namespace App\Admin\Event\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Admin\Event\Http\Controllers';

    public function boot(Router $router)
    {
        parent::boot($router);
    }

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'prefix' => 'admin', 'middleware' => 'auth'], function ($router) {
            require app_path('Admin/Event/Http/routes.php');
        });
    }
}
