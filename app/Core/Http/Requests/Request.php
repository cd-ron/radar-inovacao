<?php

namespace App\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
	public function messages()
    {
        return [
            'required'  => 'Campo requerido!',
            'unique'    => 'Já usado, por favor inserir outro!'
        ];
    }
}
