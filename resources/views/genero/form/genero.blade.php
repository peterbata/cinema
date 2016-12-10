<div class="form-group">
 {!!Form::label('genre','Nombre: ')!!} {{--for en html->El genre es el ID QUE COINCIDE CON EL FORM TEXT, specificamos el nombre que va a obtener y le pasamos lo que queremos que se renderice en la vista--}}
 {!!Form::text('genre',null, ['id'=>'genre','class'=>'form-control', 'placeholder' => 'Ingresa el genero de la pelicula'])!!}
  {{-- creamos un imput de texto donde le pasamos un nombre genre, le pasamos un nulo no queremos valor por default, despues le asignamos atributos
  primero el id despues la clase BOOSTRAP  y despues placeholder--}}
 </div>

 {{-- La etiqueta <label> se utiliza para adjuntar información a los controles.
 El valor del atributo for debe ser igual al valor id del elemento input para que los reconozca como asociados.
 como son FORMS el genre es igual al ID que esta en el FORM TEXT --}}
 {{--mirar LAVEL en laravelcollective donde nos menciona el uso del ID no olvidarnos--}}


{{--SIN AJAX--}}
{{-- <div class="form-group">
  {!!Form::label('Género:')!!}
  {!!Form::text('genre', null,['class'=>'form-control', 'placeholder'=>'Ingrese el gero de la peli'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA
  </div> --}}
