<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*RUTAS*/

//RUTAS MAS BASICAS E IMPORTANTES
Route::get('/', function () {
    return view('welcome'); //RETORNARA VER ESTE MENSAJE DE BIENVENIDA
});
//hacemos referencia a la clases Route

Route::get('prueba', function () {
    return 'pagina de prueba las rutas'; //http://localhost:8000/prueba
});

//Rutas con parametros
Route::get('nombre/{nombre}', function ($nombre) {
    return 'El usuario es :'. $nombre; //http://localhost:8000/nombre/Brayan
});

Route::get('edad/{edad}', function ($edad) {
    return 'La edad del usuario es :'. $edad;
});  //http://localhost:8000/edad/23

//nos  arroja el valor que esta por defalt PARAMETROS OPCIONALES
Route::get('edad2/{edad?}', function ($edad = 22) {
    return $edad;  //http://localhost:8000/edad2
});


/*LLAMAMOS A LOS CONTROLADORES ENRUTAMOS */
//ENRUTAMOS LOS CONTROLADORES
  Route::get('controlador','PruebaController@index'); //http://localhost:8000/controlador

  //Aca esta su nombre y especificamos la variable que llevara especificamos en el arraba va el metodo
  Route::get('name/{nombre}','PruebaController@nombre'); //http://localhost:8000/name/Brayan


  //ES MEJOR RESOURCE - ESTA DECLARACION GENERA MULTIPLES RUTAS PARA EL INDEX CREATE Y OTROS
  Route::resource('movie', 'MovieController');




  //PARA EL PROYECTO, LOS ANTERIORES SON EJEMPLOS
  //vistas generales parte frontend del proyecto
  Route::get('/','FrontController@index'); //CREAMOS LA RUTA DEL INDEX Y HACEMOS REFERENCIA AL CONTROLADOR Y SU METODO LLAMADO INDEX
  Route::get('contacto','FrontController@contacto'); //SE VA AL METODO CONTACTO
  Route::get('reviews','FrontController@reviews'); //SE VA AL METODO REWIES
  Route::get('admin','FrontController@admin'); //SE IRA AL METODO DEL ADMINISTRADOR EL PRIMER ADMIN ES PARA LLAMAR LA VISTA EN LA RUTA localhost/admin

//USUARIO RUTAS
  //hacemos un enrutador RESOUCE para el CRUD crear usuario
  Route::resource('usuario', 'UsuarioController'); //http://localhost:8000/usuario/create  se llama asi es un resouce y la llama automaticamente los metodos

  //especificamos las rutas de la autentificacion hicimos un resouce
  Route::resource('log', 'LogController');
  Route::get('logout','LogController@logout'); //creamos la ruta para cerrar Session
  //declaramos una ruta logaout vamos a usar el LogController y es pecificamos el metodo logout y crearemos este metodo en el controlador

  //GENERO RUTAS
  //para el AJAX en la creacion de  para el generocontroller su ruta
  Route::resource('genero', 'GeneroController'); //http://localhost:8000/genero/create
  //Route::get('generos', 'GeneroController@listing'); //para listar en el index, es lo mismo que en el metodo index del controlador para usar AJAX

  //PELICULAS RUTAS
    Route::resource('pelicula', 'MovieController');

  //MAIL RUTAS
  Route::resource('mail', 'MailController');

  //RESETEO DE CUENTAS, RESTABLECER PASSWORD
  //SE CREAN AUTOMATICAMENTE LAS SIGUIENTES LINEAS EN LA autentificacion CUANDO USAMOS VER DOCUMENTACION

Auth::routes();

Route::get('/home', 'HomeController@index');
