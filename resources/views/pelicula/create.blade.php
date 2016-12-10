@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
    {{--especificamos la ruta y el metodo que sera enviado el formulario, y el atributo para manejar ARCHIVOS para subir es el files true --}}
		  	{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST','files' => true])!!} {{-- FILES TRUE PARA SUBIR ARCHIVOS--}}

		  		@include('pelicula.forms.pelicula'){{--incluimos la subvista donde esta el cuerpo del formulario--}}

				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection
