<?php

namespace App\Admin\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
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
