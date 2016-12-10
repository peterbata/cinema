// REGISTRAR O CREAR GENEROS
$("#registro").click(function(){ //usamos el ID REGISTRO DEL link_to en create.blade.php cuando tenemos un evento click HARA
	var dato = $("#genre").val(); //especificamos el dato que sera igual ID del INPUT de genero.blade.php,y OBTENDREMOS su valor
	var route = "/genero"; //en esta variable es igual a la ruta que nos interesa,IGUAL QUE EL SIN AJAX solo se pone en general ya no ('route'=>'genero.store') puerto 8000 y la ruta es el genero - URI; PARA CREER UN RECURSO TENEMOS QUE HACER REFERENCIA AL RECURSO  EN LA RUTA Y ENVIARLO POR METODO POST
	var token = $("#token").val(); //creamos esta variable token que toma el valor DEL ID del que tenga el token (id='token')

//peticion AJAX
	$.ajax({
		url: route, //PASAMOS LA URL que es mi ruta
		headers: {'X-CSRF-TOKEN': token},//le enviamos el token
		type: 'POST',	//como queremos mandar la informacion que enviamos mediante el metodo POST
		dataType: 'json', //tipo de dato que sera tipo JASON, con la cual estamos trabajando
		data:{genre: dato}, //por ultimo le pasamos la data, que le especificamos que vamos a enviar un genre y le enviamos el dato que estamos tomando en la variable de la parte de arriba

//mensaje que se creo correctamente create.blade.php de genero
		success:function(){ //llamamos la funcion success
			$("#msj-success").fadeIn(); //mostrar mensaje mediante selectores y mostrarlo(fede)
		},										//selectores son los que toman el ID es decir #msj-success ejemplo


//cuando nuestra peticion llega a tener un error - VALIDACIONES
		error:function(msj){ //metodo error cuando la peticion tenga un error y en este caso estamos recibiendo un msj=mensaje de json en consola
			$("#msjvalidaciones").html(msj.responseJSON.genre); //asignamos al ID el msj la respuesta que nos esta llegando de json en la consola
			$("#msj-error").fadeIn(); //Y DESPUES MOSTRAREMOS ESE MENSAJE QUE ES EL ID del ALERTAen el create.blade.php del genero
		}
	});

});




// Saludos desde Venezuela, buen aporte, este script funciona para solucionar el error al dar enter en el formulario:
// function Datos(){
//     var dato = $('#genre').val();
//     var route = 'http://localhost:8000/genero';
//     var token = $('#token').val();
//
//     $.ajax({
//         url:        route,
//         headers:    {'X-CSRF-TOKEN':token},
//         type:       'POST',
//         dataType:   'json',
//         data:       {genre: dato},
//
//         success:function(){
//             $('#msj-success').fadeIn();
//             $('#genre').val('');
//         }
//     });
// };
//
// $('form').keypress(function(e){
//     if(e.which === 13){
//         Datos();
//         return false;
//     }
// });
// $('#registro').click(function(){
//     Datos();
// });
