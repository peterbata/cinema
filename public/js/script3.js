// PARA LA PAGINACIÓN CON AJAX

$(document).on('click','.pagination a',function(e){ //obtenemos el evento click y hacemos referencia a la clase pagination de boostra y al link A, despues creamos una funcion y obtenemos  un evento (e)
    e.preventDefault(); //PREVENIMOS QUE ESE EVENTO(e) desencadene algo
    var page = $(this).attr('href').split('page=')[1]; //CREAMOS UNA VARIABLE PAGE, Y HACEMOS REFERENCIA AL ATRIBUTO href, split divide la cadena y vamos a obtener la posicion 1 PARA QUE NOS ENVIE LA PAGINA CORRESPONDIENTE en esta posicion
    var route = "/usuario";//CREAMOS LA VARIABLE que rera igual a LA RUTA USUARIO QUE NOS INTERESAS
    //creamos la peticion ajax
    $.ajax({
        url: route, //ESPECIFICAMOS LA URL
        data: {page: page},//especificamos la data que vamos a enviar y es nuestra pagina
        type: 'GET', //TIPO DE METODO QUE SERA LA PETICION
        dataType: 'json', //TIPO DE DATO QUE SERA JSON
        success: function(data){ //CREAMOS la funcion success donde vamos a recibir la data O LA RESPUESTA que se imprime en consola
            $(".users").html(data); //asignamos la data que estamos recibiendo nuestro div users y le pasamos nuestra data
        }
    });
});
