{{--FORMULARIO PARA CREAR GENERO --}}
@extends('layouts.admin')
    @section('content')
      {!!Form::open()!!}
{{-- mensaje de GENERO CREADO CORRECTAMENTE --}}
      <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
       		<strong> Genero Agregado Correctamente.</strong>
   	</div>

{{--MENSAJE DE ERRORES - VALIDACIONES--}}
      <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
          <strong id="msjvalidaciones"> </strong>
      </div>

         {{--TOKEN sirve para que laravel reconozca que esa peticion no es malintencionada le asiga un token---}}
         <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> {{-- el ID hace mas facil de obtener su valor en AJAX--}}

         @include('genero.form.genero')  {{--aca incluimos el codigo repetido html--}}

{{-- Incluimos link_to donde no nos llevara a ninguna ruta, el titulo registrar y como atributo le pasamos el ID el cual sera
registro y el segundo le pasaremos la clase--}}
      {!!link_to('/genero', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}

      {!!Form::close()!!}
	  @endsection


{{--llamar al script AJAX para crear, ESTO IRA A LA PARTE DEL ADMIN A CARGAR EL script por el section y show, que lo utilizara solo cuando lo necesite--}}
{{--a ca en crear usaremos el script.js --}}
    @section('scripts')
           {!!Html::script('js/script.js')!!} <!--PARA PODER USAR EL AJAX - CREAR CON AJAX-->
    @endsection


{{--SIN AJAX--}}
{{-- ARROBA extends('layouts.admin')
    @section('content')

      {!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}



      {{-- {!! Form::submit('Registar!',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    @endsection --}}
