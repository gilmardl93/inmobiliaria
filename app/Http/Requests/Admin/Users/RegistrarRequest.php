<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'  => 'required|unique:users|min:2',
            'password'  => 'required|min:2',
            'nombres'   => 'required|min:2',
            'paterno'   => 'required|min:2',
            'materno'   => 'required|min:2',
        ];
    }
}
