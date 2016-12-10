{{--MENSAJE DE ERROR AL LOGUEARSE LOS DATOS ESTAN MAL --}}
{{--PARA LOS MENSAJES DE ERRORES EN LOS CAMPOS SI NO SON IGUALES EN EL LOGUEO LOS DATOS NO SON IGUALES--}}
{{--Usamos session para no repetir codigo constantemente --}}
@if(Session::has('message-errors'))  {{--session permite almacenar informacion sobre el usuario, con esete session vamos al controlador y retornaremos el mensaje redireccionando y declaramos el mensaje que queremosq ue aparezca en la variable seccion--}}
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message-errors')}} {{--vamos a obtener el mensaje de error --}}
</div>
@endif
