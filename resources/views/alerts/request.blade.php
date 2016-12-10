{{--CODIGO PARA LAS VALIDACIONES QUE REQUIERAN SUS CAMPOS - MIRAR LogController--}}
{{-- LAS VALIDACIONES USAREMOS NOS SALTA LAS NOTIFICACIONES DE ERRORES DE LOS CAMPOS DEL FORMUARIO SI LLENAMOS MAL,O NO LLENAMOS, SON OBLIGATORIOS
ESTO LO INCLUIREMOS DNDE LOS NECESITAMOS ES EL MISMO CODIGO QUE SE REPITE SIEMPRE--}}
@if(count($errors)>0)
  <div class="alert alert-success alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <ul>
      @foreach($errors->all() as $error)
        <li>{!!$error!!}</li>
      @endforeach
  </ul>
  </div>
@endif
