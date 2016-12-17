<?php

namespace App\Admin\Role\Providers;

use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'admin');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
