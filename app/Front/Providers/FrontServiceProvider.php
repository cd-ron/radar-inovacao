<?php

namespace App\Front\Providers;

use Illuminate\Support\ServiceProvider;
use App\Admin\Category\Models\Category;
use App\Admin\SubCategory\Models\SubCategory;

class FrontServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'front');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'front');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
