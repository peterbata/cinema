
<div class="form-group">
  {!!Form::label('Nombre:')!!}
  {!!Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del Usuario'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}
  </div>
<div class="form-group">
  {!!Form::label('Correo:')!!}
  {!!Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Correo del Usuario'])!!}
</div>
<div class="form-group">
  {!!Form::label('Password:')!!}
  {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese la contraseña del Usuario'])!!}
</div>
