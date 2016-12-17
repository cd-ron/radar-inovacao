<?php

namespace App\Auth\Http\Controllers;

use App\Admin\User\Http\Help\PermissionsRoles;
use App\Auth\Models\User;
use App\Core\Http\Controllers\CoreController;
use Illuminate\Support\Facades\Auth;
use Validator;
use Input;
use Redirect;
use Socialite;
use Mailgun;
use Session;


class AuthController extends CoreController
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'doLogout']);
    }

    public function showLogin()
    {
        return view('auth::login');
    }

    public function doLogin()
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('auth/login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            if (Auth::attempt($userdata)) {
                PermissionsRoles::refresh();
                return Redirect::to('admin');
            } else {
                return Redirect::to('auth/login')->withInput(Input::except('password'));
            }
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('auth/login');
    }
}

