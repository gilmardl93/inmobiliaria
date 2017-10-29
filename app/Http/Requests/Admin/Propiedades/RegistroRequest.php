<?php

namespace App\Http\Requests\Admin\Propiedades;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'titulo'    => 'required|min:3',
            'imagen1'   => 'required|mimes:jpg,png,jpeg',
            'area'      => 'required',
            'banos'     => 'required',
            'antiguedad'    => 'required',
            'garaje'    => 'required',
            'ambientes' => 'required',
            ''
        ];
    }
}
