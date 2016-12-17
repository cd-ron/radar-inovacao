<?php

namespace App\Admin\Role\Http\Requests;

use App\Core\Http\Requests\Request;

/**
 * @property mixed users
 */
class RoleRequest extends Request
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
                    'name' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required',
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