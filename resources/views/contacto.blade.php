@extends('layouts.principal')
@section('content')
<!--REPITE-->
@include('alerts.success') <!--sirve para el Session Flash de los mensajes de los controladores-->
<!--FIN REPITE-->
			<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>CINEMA MURPHY</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTO</h3>
		 <p>SIEMPRE ESTAMOS AQUÍ PARA AYUDARLO</p>
		 <div class="contact-form">


			 {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}		 {{--ESPECIFICAMOS LA RUTA que sera al store del mailcontroller Y EL METODO QUE VAMOS A ENVIAR LA INFORMACION--}}
					 <div class="col-md-6 contact-left">
						 {!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
						 {!!Form::text('email',null,['placeholder' => 'Email'])!!}
					 </div>
					 <div class="col-md-6 contact-right">
						 {!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
					 </div>
					 {!!Form::submit('SEND')!!}
					{!!Form::close()!!}


			{{-- LO PASAMOS ESTA PARTE DE CONTACTO A FORM COLLETCTIVE DE LARAVEL BLADE--}}
			 {{-- <form>
				 <div class="col-md-6 contact-left">
					  <input type="text" placeholder="Name" required/>
					  <input type="text" placeholder="E-mail" required/>
					  <input type="text" placeholder="Phone" required/>
				  </div>
				  <div class="col-md-6 contact-right">
					 <textarea placeholder="Message"></textarea>
					 <input type="submit" value="SEND"/>
				 </div>
				 <div class="clearfix"></div>
			 </form> --}}
	     </div>
</div>


<!--REPITE-->

<!--FIN REPITE-->
@endsection
