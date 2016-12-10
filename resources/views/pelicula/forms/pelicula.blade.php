<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('Elenco','Elenco:')!!}
	{!!Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Ingresa el elenco'])!!}
</div>
<div class="form-group">
	{!!Form::label('Direccion','Dirección:')!!}
	{!!Form::text('direction',null,['class'=>'form-control', 'placeholder'=>'Ingresa al director'])!!}
</div>
<div class="form-group">
	{!!Form::label('Duracion','Duración:')!!}
	{!!Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!} {{--  path es el camino donde se ira los archivos a guardarse, este archivo cambiaremos el nombre con la ifnromacion que esta mandando en el MODELO--}}
</div>
<div class="form-group">
	{!!Form::label('Genero','Genero:')!!}
	{!!Form::select('genre_id',$genreslist)!!} {{--Usamos la variable genreslist q es la lista de generos que existen y se les puede asignar a una pelicula--}}
</div>                                   {{--ESTO ESTA SIENDO LISTADO EN EL MovieController EN EL CREATE con el pluck donde nos manda los gnres--}}
																					{{--es la lista de generos, en el MovieController en el create estamos usando el modelo genero, y trayendo su genero con su id  y enviando el genero al create.blade.php--}}
