{{--PARA LA PAGINACION CON AJAX Y MOSTRAR, COPIAMOS IGUAL LO QUE ESTA DENTRO DEL DIV USERS--}}
{{--SERIA LO MISMO PARA LISTAR Y PAGINACION SIN AJAX solo que esto estamos extendiendo para el uso del AJAX en el index se incluisra todo esto--}}
{{--NUEVO PARSHALL QUE USAREMOS, BASICAMENTE RESPONDEREMOS CON ESTA VISTA, PARA ASIGNARLA EN EL DIV DE INDEX.BLADE DE LOS USUARIO--}}
{{-- nesecitaremos una tabla donde podamos mostrar la informacion --}}
<table class="table">
  <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Operación</th>
  </thead>

  @foreach($users as $user)  {{-- haremos un recorrido de users en user  --}}
  <tbody>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>  {{-- aca mostraremos la informacuin del usuario nombre--}}
    <td>{{$user->email}}</td> {{-- aca mostraremos la informacuin del usuario email--}}

    {{--BOTON EDITAR SE UNA EL link_to_route LINK DE RUTAS en la documentacion de laravel colletive se ve,
    por que necesitaremos que nos envie con su ID y ver la lista de ruta su URI.. necesita el ID para actualizar--}}
    {{--EL BOTON EDITAR nos enviara a su ruta correspondiente con su ID--}}
    <td>
      {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = [$user->id], $attributes = ['class'=>'btn btn-primary']);!!}
      {{-- nombre de la ruta y el metodo , el titulo que sera editar del botony
        el parametro necesitamos pasar el id del usuario,asi se creara automaticamente las rutas (localhost:8000/usuario/2,3,4,5/edit) -
        como atributo la classe de boostrap para el boton--}}
    </td>

    {{-- boton eliminar --}}
    <td>
      {!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!} {{-- formulario normal, pasamos el usuario, la ruta lo cambiamos al usiario destroy y el metodo seria DELETE --}}
      {!! Form::submit('Eliminar!',['class'=>'btn btn-danger'])!!} {{-- boton seria elimanr de boostrap eliminar --}}
      {!!Form::close()!!}
    </td>
  </tbody>
@endforeach

</table>

{{--rendereamos la paginacion para que pueda mostrar de la  que contiene la variable de todos los usuarios, tiene el listado de todos los usuarios--}}
{!!$users->render()!!}
