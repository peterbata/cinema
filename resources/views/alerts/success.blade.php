<!--sirve para el Session Flash de los mensajes de los CONTROLADORES-->
{{--MENSAJE DE CONFIRMACION CORRECTA--}}
{{--mensaje de confirmacion de editado creado de usuarios--}}
{{--Usamos session para no repetir codigo constantemente --}}
@if(Session::has('message'))  {{--session permite almacenar informacion sobre el usuario, con esete session vamos al controlador y retornaremos el mensaje redireccionando y declaramos el mensaje que queremosq ue aparezca en la variable seccion--}}
  <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}} {{--vamos a obtener el mensaje--}}
</div>
@endif
