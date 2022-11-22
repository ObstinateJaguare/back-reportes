<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLivingPlaceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'direccion'     => ['required', 'string',  'max:200'],
            'barrio'        => ['required', 'string',  'max:200'],
            'tipoVivienda'  => ['required', 'string',  'max:200'],
            'descripcion'   => ['required', 'string',  'max:200'],
        ];
    }
}
