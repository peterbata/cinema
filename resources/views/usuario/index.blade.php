{{--PARA MOSTRAR LISTADO DE LOS RECURSOS NOS SIRVE ESTE FORMULARIOS QUE SON TABLAS--}}
@extends('layouts.admin')

    {{-- mensaje lo incluimos de la carpeta alerts archivo success--}}
    {{--mensaje de confirmacion de editado creado de usuarios--}}
    @include('alerts.success')

    @section('content')

      {{--encerramos en DIV USERS que usara el script3 y script2 para la paginacion y listar eliminar y actualizar que mandara DENTRO DE aca el users.blade.php--}}
      <div class="users">

          @include('usuario.users')﻿ {{--inluimos la tabla para mostrar la lista y la PAGINACION con ajax, LO QUE ESTA DENTRO TAMBM SIRVE PARA EL SIN AJAX --}}

      </div>

    @endsection

{{-- AGREGAMOS EL script3 PARA LA PAGINACION AJAX EN EL USUARIO--}}

    @section('scripts')

    {!!Html::script('js/script3.js')!!}

    @endsection
