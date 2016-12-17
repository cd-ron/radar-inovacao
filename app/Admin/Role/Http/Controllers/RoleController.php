<?php

namespace App\Admin\Role\Http\Controllers;

use App\Admin\Role\Models\Permission;
use App\Admin\Role\Http\Requests\RoleRequest;
use App\Admin\Role\Models\PermissionRole;
use App\Core\Http\Controllers\CoreController;
use Illuminate\Support\Facades\Auth;
use Validator;
use Input;
use Redirect;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersroles;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Admin\Role\Models\Role;

class RoleController extends CoreController
{
    function index(){

        $roles = Role::all();

        return view('admin::role.index')->with(compact('roles'));
    }

    function edit($id){

        $role = Role::find($id);

        return view('admin::role.form')->with(compact('role'));
    }

    function show($id){
    }

    function create(){
        return view('admin::role.form');
    }

    public function store(RoleRequest $request)
    {
        $role = new Role();

        $role->fill($request->all());

        if ($role->save()) {
            return Redirect::route('admin.role.index');
        } else {
            return Redirect::route('admin.role.create');
        }
    }

    public function update($id, RoleRequest $request)
    {
        $role = Role::find($id);
        $role->fill($request->all());

        if ($role->save()) {
            return Redirect::route('admin.role.index');
        } else {
            return Redirect::route('admin.role.edit', ['id' => $id])->withInputs();
        }
    }

    public function destroy($id){

        $role = Role::find($id);

        if ($role->delete()) {
            return Redirect::route('admin.role.index');
        } else {
            return Redirect::route('admin.role.index')->withInputs();
        }
    }

    public function permission($id) {

        $role = Role::find($id);

        $permission = Permission::all();

        $permission_roles = PermissionRole::where('role_id', $id)->get();

        $ar_permission_roles = array();

        foreach($permission_roles as $item_permission_roles) {
            array_push($ar_permission_roles, $item_permission_roles->permission_id);
        }

        return view('admin::role.permission')
            ->with(compact('role'))
            ->with('permission', $permission)
            ->with('permission_roles', $ar_permission_roles);
    }

    public function permissionSave($id) {

        $permissions_roles = PermissionRole::where('role_id', $id)->get();

        foreach($permissions_roles as $permissions_role){
            $permissions_role->delete();
        }

        $params = Input::all();
        foreach ($params as $key => $param) {

            if($key != '_token'){
                if($param > 0){
                    $permission = Permission::where('slug', $key)->first();
                    $new_permissions_role = new PermissionRole();
                    $new_permissions_role->role_id = $id;
                    $new_permissions_role->permission_id = $permission->id;
                    $new_permissions_role->save();
                }
            }
        }
        return Redirect::route('admin.role.index');
    }
}

