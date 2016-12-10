@extends('layouts.admin')
      @section('content')

        @include('genero.modal')   {{--incluimos la modal para ACTUALIZAR O EDITAR--}}

{{--MENSAJE CREADO CORRECTAMENTE ajax--}}
        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <strong> Genero Agregado Correctamente.</strong>
        </div>
{{--MENSAJE ELIMINADO ajax--}}
        <div id="msj-errors" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
            <strong> Genero !ELIMINADO¡ Correctamente.</strong>
        </div>

         <table class="table">
           <thead>
             <th>ID</th>
             <th>Nombre</th>
             <th>Operaciones</th>
           </thead>

           <tbody id="datos"> </tbody>
        </table>

      @endsection

      {{--llamar al script AJAX para listar, aca usaremos el script2 asi que lo llamamos--}}
          @section('scripts')
                 {!!Html::script('js/script2.js')!!} <!--PARA PODER USAR EL AJAX - LEER CON AJAX-->

          @endsection
