<?php

namespace App\Admin\User\Http\Help;
use App\Admin\Role\Models\Permission;
use Illuminate\Support\Facades\Route;

class PermissionsRoles
{
    public static function refresh() {

        $routes = Route::getRoutes();
        foreach($routes as $route)
        {
            if(substr($route->getName(), 0, 6) == "admin."){

                $routeSlug = str_replace('.','-', $route->getName());
                $routeName = str_replace('.',' ', $route->getName());
                $routeName = ucwords($routeName);

                $permission = Permission::where('slug', $routeSlug)->get();
                if(count($permission) == 0) {
                    $permission = new Permission();
                    $permission->name = $routeName;
                    $permission->slug = $routeSlug;
                    $permission->save();
                }
            }
        }
        return;
    }
}