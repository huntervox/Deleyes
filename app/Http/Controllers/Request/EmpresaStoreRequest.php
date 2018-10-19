<?php

namespace App\Http\Controllers\Request;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaStoreRequest extends FormRequest
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
            'nombreEmpresa' => 'required|string|max:225',
            'tipoEmpresa' => 'required|string',
            'numAccionistas' => 'required|integer|max:500',
            'capital' => 'required|integer|',
            'departamento' => 'required|string',
            'ciudad' => 'required|string',
        ];
    }
}
