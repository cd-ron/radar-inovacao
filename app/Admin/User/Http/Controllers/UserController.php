<?php
namespace App\Admin\User\Http\Controllers;

use App\Admin\User\Http\Requests\UserRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Core\Http\Controllers\CoreController as CoreController;
use Redirect;
use App\Auth\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Admin\Role\Models\Role;
use App\Auth\Models\State;
use Mailgun;

class UserController extends CoreController
{
    function index(){
        $users = User::all();
        return view('admin::user.index')->with(compact('users'));
    }

    function edit($id){

        $roles = Role::orderBy('name', 'asc')->get();
        $ar_role = ['' => 'Selecione...'];
        foreach ($roles as $role) {
            $ar_role[$role->id] = $role->name;
        }

        $states = State::orderBy('name', 'asc')->get();
        $selectState = array('' => 'UF');
        foreach($states as $state) {
            $selectState[$state->id] = $state->slug;
        }

        $user = User::find($id);

        return view('admin::user.form')
            ->with(compact('user'))
            ->with('role', $ar_role)
            ->with("state", $selectState);
    }

    function show($id){
    }

    function create(){

        $states = State::orderBy('name', 'asc')->get();
        $selectState = array('' => 'UF');
        foreach($states as $state) {
            $selectState[$state->id] = $state->slug;
        }

        $roles = Role::orderBy('name', 'asc')->get();
        $ar_role = ['' => 'Selecione...'];
        foreach ($roles as $role) {
            $ar_role[$role->id] = $role->name;
        }

        return view('admin::user.form')
            ->with('role', $ar_role)
            ->with("state", $selectState);
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->get('password'));

        if ($user->save()) {
            return Redirect::route('admin.user.index');
        } else {
            return Redirect::route('admin.user.create');
        }
    }

    public function update($id, UserRequest $request)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->roles_id = $request->get('roles_id');
        $user->zipcode = $request->get('zipcode');
        $user->address = $request->get('address');
        $user->neighborhood = $request->get('neighborhood');
        $user->city = $request->get('city');
        $user->state_id = $request->get('state_id');
        $user->country = $request->get('country');
        $user->company = $request->get('company');
        $user->phone = $request->get('phone');

        if($request->get('password')){
            $user->password = bcrypt($request->get('password'));
        }

        if ($user->save()) {
            return Redirect::route('admin.user.index');
        } else {
            return Redirect::route('admin.user.edit', ['id' => $id])->withInputs();
        }
    }

    function destroy($id){
        $user = User::find($id);

        if ($user->delete()) {

            return Redirect::route('admin.user.index');
        } else {

            return Redirect::route('admin.user.index')->withInputs();
        }
    }
}
