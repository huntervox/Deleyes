<?php

namespace App\Http\Controllers\Request;

use Illuminate\Foundation\Http\FormRequest;

class CreditoStoreRequest extends FormRequest
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
            'suceso' => 'required|string|max:500',
            'fecha' => 'required',
            'soporte' => 'required',
            'departamento' => 'required|string',
            'ciudad' => 'required|string',
        ];
    }
}
