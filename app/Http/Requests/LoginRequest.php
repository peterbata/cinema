<?php

namespace Cinema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //CUANDO GENERAMOS UN request TENEMOS QUE ESPECIFICAR QUE ESTA AUTORIZADFO PONIENDO TRUE
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'password' => 'required',  //requerimos el password
          'email' => 'required|email', //requerimos el email y que sea correcto
        ];
    }
}
