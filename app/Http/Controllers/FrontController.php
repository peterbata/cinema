<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Movie; //incorporamos el modelo Movie


class FrontController extends Controller{

    //USO DE MIDDDLEWARE
    //creamos un metodo constructor donde especificamos que usaremos el middeleware auth de Laravel
    //y solo que se aplique al metodo admin, una ves hecho esto no permitira entrar a localhost:8000/admin
    //nos redireccionara a una ruta de login localhost:8000/auth/login
    //para cambiar la ruta de login a donde nos redicreccionara nos vamos a app/Exceptions/Habndler.php donde especificamos a donde queremos que nos redireccione

     public function __construct(){
       $this->middleware('auth',['only' => 'admin']); //aca especificamsos la ruta del admin, si dejamos solo   $this->middleware('auth'); se aplicara a todo
     }


    //MÉTODOS
      //DE ACA RETORNAREMOS DESDE LA CARPETA VIEWS que son las vistas parte FRONTEND
    public function index()
    {
      return view('index'); //RETORNAMOS LA VISTA INDEX - HACEMOS REFERENCIA AL HTML que sera en BLADE
    }
    public function contacto()
    {
      return view('contacto');//RETORNAMOS LA VISTA CONTACTO
    }
    public function reviews()
    {
      //NOS MUESTRA LOS GUARDADO EN EL REVIWS DEL FRONTEND

      $moviesfront = Movie::MoviesConsult(); //cereamos la variable moviesfront y usamos del modelo el metodo de consulta MoviesConsult PODEMOS USAR ALL
        return view('reviews',compact('moviesfront')); //le enviamos los datos de moviesfront al la vista reviews
      //return view('reviews');//RETORNAMOS LA VISTA REVIEEWS
    }
      //despues procedemos a crear estas vistas para el ADMINISTRADOR
    public function admin(){  //AGREGAMOS PARA EL ADMINISTRADOR EN EL CONTROLADOR UN MÉTODO
       return view('admin.index'); //le decimos que busque en vistas (VIEWS) en la carpeta ADMIN y coja el archivo index
      }

  }
