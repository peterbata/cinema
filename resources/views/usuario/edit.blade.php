@extends('layouts.admin')
    @section('content')

  {{--EDITAR ACTUALIZAR--}}
  {{-- NOS SALTA LAS NOTIFICACIONES DE ERRORES DE LOS CAMPOS DEL FORMULARIO SI LLENAMOS MAL , lo metimos en la carpeta alerts fichero request ya que siempre usaremos --}}

      @include('alerts.request')  {{--LAS VALIDACIOES REQUEST- llama al mensaje de alerta de errores que esta en la carpeta alerts en el fichero request, codigo que se repite--}}

{{--creamos el formulario, NOS COPIAMOS DEL FORMULARIO DE CREAR USUARIO--}}
{{--PARA QUE MUESTRE LA INFORMACION DEL USUARIO EL MODEL LLENA EL FORMULARIO BASADO POR UN MODELO (MODELO QUE VIENE DEL USER con la variable user), AUTOMATICAMENTE LOS ATIBUTOS SE AJUSTAN A LOS CAMPOS.
ponemos, despues del model la variable USER que es el elemento que estamos recibiendo del metodo edit del UsuarioController, especificamos la ruta que esta usuariocontroller
al metodo update,EN SEGUIDA PONEMOS EL ID DE NUESTRO USUARIO, DESPUES EL METODO QUE SERA ENVIADA LA INFORMACION CON EL METODO PUT QUE ES PARA ACTUALIZAR
------------------------------------
METODOS:
Crear = PUT si y sólo si va a enviar todo el contenido del recurso especificado (dirección URL)
Crear = POST si va a enviar un comando al servidor para crear un subordinado del recurso especificado mediante algún algoritmo del lado del servidor
Recuperar = GET
Actualizar = PUT si y sólo si va a actualizar el contenido completo del recurso especificado
Actualizar = POST si usted está solicitando el servidor para actualizar uno o más subordinados del recurso especificado
Eliminar = DELETE

 --}}
{{-- FORMULARIO PARA ACTUALIZAR O EDITAR --}}
    {!!Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}

        @include('usuario.forms.usr') {{--aca incluimos el codigo repetido html de la capeta usiario,carpeta forms jalamos del archibo usr.blade.php , se llama incluyendo diferente al section del layout--}}

        {!! Form::submit('Actualizar!',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}

  {{-- FORMULARIO PARA DELETE ELIMINAR  dentro de la vista de actualizar el usuario lo mismo puse en el INDEXS en la tabla --}}
    {!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!} {{-- formulario normal open, pasamos la ruta , la ruta lo cambiamos al usuario destroy, usamos el user el id para eliminar y el metodo seria DELETE --}}
        {!! Form::submit('Eliminar!',['class'=>'btn btn-danger'])!!} {{-- boton seria elimanr de boostrap eliminar --}}
    {!!Form::close()!!}

@endsection
