@extends('layouts.admin')
@section('content')

  {{-- NOS SALTA LAS NOTIFICACIONES DE ERRORES DE LOS CAMPOS DEL FORMUARIO SI LLENAMOS MAL , lo metimos en la carpeta alerts fichero request ya que siempre usaremos--}}

  @include('alerts.request') {{--LAS VALIDACIONES REQUEST- llama al mensaje de alerta de errores que esta en la carpeta alerts en el fichero request, codigo que se repite--}}

{{-- enrutamos el formulario, agregamos la ruta para crear usuario AL STORE POR QUE ES ALMACENAR,
mediante un array (que se represena po corchetes) route que sera de usuario al metodo store se ira del controlador usuariocontroller,
 y el metodo que viajaraa sera el metodo post --}}
{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

  @include('usuario.forms.usr')  {{--aca incluimos el codigo repetido html de la capeta usiario,carpeta forms jalamos del archibo usr.blade.php , se llama incluyendo diferente al section del layout--}}


  {!! Form::submit('Registar!',['class'=>'btn btn-primary'])!!}


{!!Form::close()!!}


{{-- TODOS EL CODIGO HTML QUE ES SUCIO LE PASAMOS A LARAVEL COLECLETIVE DONDE NOS DICE EN LA DOCUEMNTACION SE SEPARA EN COMA Y CORCHETE PARA AGERGAR BOOTSTRAP --}}
{{-- SE PUEDE BORRAR POR QUE YA NO SIRVE --}}
  {{-- <form  action="" >
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Correo</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input type="password" class="form-control">
    </div>
    <button class="btn btn-primary">Registrar</button>

  </form> --}}
@endsection
