// para listar  y actualizar en la parte de abajo, todos juntos

$(document).ready(function(){//preguntamos que si el DOCUMENTO o la pagina esta listo haremos:
	Carga(); //creamos este metodo, usamos para la funcion de abajo que cuando esta listo lo usara...Lo que hace el document.ready es que cuando el archivo este cargado levanta el codigo que este tiene dentro, si nada levanta el codigo que existe no funciona, aparte es mala practica tener codigo suelto
});

//lo va a ejecutar una ves que este listo la pagina:

//LISTAR o mostrar en el index de genero
function Carga(){
	var tablaDatos = $("#datos"); //declararemos una variable tabladatos que sera el ID del tbody del index
	var route = "/genero"; //la ruta que nos interesa   Route::resource('genero', 'GeneroController'); de ahi tomamos el genero de donde agarra los metodos ya ponemos donde nos conviene y si queremos crear otro metodo especificamos la ruta
	//var route = "http://localhost:8000/generos";//esta ruta de ejempo que fue creado y usado en el controler el metodo listing
	$("#datos").empty();//hague referencia a mis datos Y LOS VOY A LIMPIAR
	$.get(route, function(res){ //hacemos la peticion ajax mediante el metodo get en esta peticion obtendremos una respuesta, DENTRO DE ESA RESPUESTA ESTARAN TODOS LOS GENEROS
		$(res).each(function(key,value){ //en respuesta(res) estaran todos mis generos each itero mis generos, y podre acceder a una llave que podre mapear y tambm tendre los valores de los generos
			tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
			//hacemos referecncia a nuestra table datos que es el body basicamente ID y mediante el metodo append le agregare el td tr
			//y dentro de esto hare la referencia al valor y me interesa el genero (value.genre) que se mostrara, antes puse el ID, esto ira en cada columna y mostramos el boton de editar y eliminar
			//para acceder al ID correspondiente de cada genero en el boton se hara referencia al ID el valor de genero, desencadenamos un evento click mostrar vamos
			//a invocar al metodo mostrar, el cual le vamos enviar el elemento del boton.
		});
	});
}

//creamos la funcion ELIMINAR del btn eliminar sacamos su metodo Eliminar
function Eliminar(btn) {
	var route = "/genero/"+btn.value+""; //DAMOS L A RUTA que nos importa y concatenamos el valor que toma el boton eliminar
	var token = $("#token").val(); //despues traemos el valor del token, para que la peticion no sea malintencionada

//hacemos la peticion
	$.ajax({
		url: route, //pasamos la URL que sera la ruta
		headers: {'X-CSRF-TOKEN': token}, //pasamos el encabezado donde viene el token
		type: 'DELETE', //sera del tipo PUT COMO ES ACTUALIZAR
		dataType: 'json', //especificamos el tipo de dato

		success: function(){ //cuando se lleva acabo la funcion correctamente, cada ves que se hague una actualizacion
			Carga(); //mandara a traer al metodo carga, que basiacamente va a eliminar, volvera hacer la peticion ajax
			$("#msj-errors").fadeIn(); //Y QUIERO QUE APAREZCA UN MENSAJE QUE SE ELIMINO CORRECTAEMENTE, LLAMAMOS AL MENSAJE SUCESS Y LE DECIMOS QUE SE MUESTRE
		}
		//despues PASAMOS AL metodo DESTROY del GeneroController
	});
}

//CREAMOS LA FUNCION MOSTRAR DEL BOTON EDITAR para el ACTUALIZAR
function Mostrar(btn){   //LA FUNCION esta recibiendo ese boton editar
	var route = "/genero/"+btn.value+"/edit"; //CREAMOS LA RUTA con la ruta que nos interesa,especificamos el id del genero que queremos editar, le damos el valor del btn que es igual value="+value.id+" al id
//con esto ya realizamos la peticion ajax
	$.get(route, function(res){ //en esta funcion obtendremos una respuesta nos traera al
		$("#genre").val(res.genre); //al ID genero le asignamos un valor.. el valor sera la respuesta y vamos a acceder a LO QUE ES EL  genero
		$("#id").val(res.id); //iremos al input del id oculto, Y LE ASIGNAREMOS AL ID QUE VENGA A NUESTRA RESPUESTA
	});
}

//EVENTO Actualizar, hacemos referencia al ID DEL MODAL DEL link_to
$("#actualizar").click(function(){ //hacemos referecnia al ID, cuando ese elemento tengga el evento click
	var value = $("#id").val(); 	//DECLARAMOS LA VARIABLE OBTENEMOS EL ID del genero, del input tipo oculto de donde obtendremos su valor esta en el MODAL.BLADE.PHP
	var dato = $("#genre").val(); //otra variable tomamos el valor de nuestro input text en su id genre, que esta en el form/genero.blade.php
	var route = "/genero/"+value+""; //OTRA VARIABLE ES LA RUTA QUE HACEMOS referencia, especificamos el ID del genero PARA ESO CONCATENAMOS la variable value que trae el id del input oculto en el modal
	var token = $("#token").val(); //despues traemos el valor del token, para que la peticion no sea malintencionada

//hacemos la peticion
	$.ajax({
		url: route, //pasamos la URL que sera la ruta
		headers: {'X-CSRF-TOKEN': token}, //pasamos el encabezado donde viene el token
		type: 'PUT', //sera del tipo PUT COMO ES ACTUALIZAR
		dataType: 'json', //especificamos el tipo de dato
		data: {genre: dato}, //ESPECIFICAMOS LA DATA QUE ESTAREMOS ENVIANDO, ENVIAREMOS UN GENERO y enviamos el dato, especificamos el genero y enviamos el dato - aca mandamos datos mas especifico

		success: function(){ //cuando se lleva acabo la funcion correctamente, cada ves que se hague una actualizacion
			Carga(); //mandara a traer al metodo carga, que basiacamente va a actualizar, volvera hacer la peticion ajax
			$("#myModal").modal('toggle'); //DESPUES QUIERO QUE SE OCULTE MI MODAL
			$("#msj-success").fadeIn(); //Y QUIERO QUE APAREZCA UN MENSAJE QUE SE CREO CORRECTAEMENTE, LLAMAMOS AL MENSAJE SUCESS Y LE DECIMOS QUE SE MUESTRE
		}
		//despues del edit pasamos al UPDATE para hacer los codigos
	});
});
