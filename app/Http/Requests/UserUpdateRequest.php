<?php

namespace Cinema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //AUTORIAZAMOS EL USO DEL UserUpdateRequest PONIENDO TRUE
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          //los campos que nos arrojaran los mensajes de error, en el formulario pondremos las alertas
          'name' => 'required',  //requerimos el name
          'email' => 'required', //requerimos el email
                                //no requerimos la contraseña ya que podemos o no editar esta parte cuando ACTUALIZAMOS
        ];
    }
}
