@extends('layouts.admin')
	@section('content')

		{!!Form::model($movie,['route'=> ['pelicula.update',$movie->id],'method'=>'PUT','files' => true])!!} {{--agregamos files true para los archivos, lo demas es lo mismo al anterior--}}

    	@include('pelicula.forms.pelicula')  {{--incluimos el formulario de editar los campos que se llenaran con el model--}}

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['pelicula.destroy',$movie->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	 @endsection
