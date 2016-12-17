<?php

namespace App\Auth\Providers;

use App\Admin\Role\Models\Permission;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Schema;
class AuthServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'auth');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'auth');

        if(Schema::hasTable('permission')){

            $permissions = Permission::with('role')->get();

            foreach ($permissions as $permission) {
                $gate->define($permission->slug, function ($user) use ($permission){
                    return $permission->role->contains($user->role);
                });
            }
        }
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
