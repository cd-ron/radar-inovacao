<?php

namespace App\Admin\User\Http\Requests;

use App\Core\Http\Requests\Request;

/**
 * @property mixed users
 */
class UserRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST': {
                return [
                    'email' => 'required|email|unique:users,email',
                    'name' => 'required',
                    'password' => 'required',
                    'roles_id' => 'required',
                    'user_type_id' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'email' => "required|email|unique:users,email,{$this->user}",
                    'name' => 'required',
                    'roles_id' => 'required',
                    'user_type_id' => 'required',
                ];
            }
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}