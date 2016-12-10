<?php

namespace Cinema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            //los campos que nos arrojaran los mensajes de error, en el formulario pondremos las alertas
          //ingresamos las reglas las cuales queremos que sean validadas por el momento decimos que sean requeridos
          //DESPUES NOS VAMOS AL CONTROLADOR UsuarioController y cambiamos el Request hara referencia al UserCreateRequest e importamos
            'name' => 'required',
            'email' => 'required|unique:users', //le decimos que el correo debe ser unico en la tabla users Y EN ERROR NOS DIRA SI SE REPITE O NO EL CORREO
            'password' => 'required',
        ];
    }
}
