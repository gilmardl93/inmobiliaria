<?php

namespace App\Http\Requests\Page\Contactos;

use Illuminate\Foundation\Http\FormRequest;

class ValidarRequest extends FormRequest
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
            'datos' => 'required|min:3',
            'email' => 'required|email',
            'celular' => 'required',
            'asunto' => 'required|min:3',
            'mensaje' => 'required|min:3',
        ];
    }
}
