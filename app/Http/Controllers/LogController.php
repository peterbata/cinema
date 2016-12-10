<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

//AGREGAMOS LO QUE USAREMOS
use Cinema\Http\Requests\LoginRequest; //por las validaciones usamos el LoginRequest PONEMOS TRUE EN EL Requests
use Auth; //es un paquete que usaremos a los largo de la autentificacion de nuestro usuario
use Session; //usar el Session para  optimizar codigo miramos los metodos de abajo messaje
use Redirect; //usar la redirect para  optimizar codigo miramos los metodos de abajo las rutas

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return "estamos en el index del LogController"; //localhost:8000/log
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //ACA TRABAJAREMOS DEL FORMULARIO QUE NOS MANDA DEL INDEX CON EL METODO POST LA INFORMACION
    public function store(LoginRequest $request) { //LoginRequest esta en el request que creamos para las validaciones
      //llevamos acabo la validacion
      //usamos el paquete auth y el metodo attempt, nos recibe un array donde le preguntamos si el email y email es igual a lo que nosotros estamos recibiendo y tambm le preguntamos por el password
      //Si esto es cierto nos redireccionara en el panel de administacion o si no lle enviara un mensaje de error y le mandara al index

      if (Auth::attempt(['email' => $request['email'],'password' => $request['password']])) {
          return Redirect::to('admin'); //localhost:8000/admin
        }
          Session::flash('message-errors','Datos Incorrectos'); //caso contrario HACEMOS ENVIAR EL MENSAJE al usuario de error que sus datos son incorrectos el mensaje esta en el index principal
          return Redirect::to('/'); //si es incorrecto retornara a la raiz de la pagina

      //return "estamos en el ESTORE del LogController venimos desde le index blade principal donde esta el formulario para el ingreso";
      //return $request -> email; //como prueba retornamos el email que es enviado del formulario
    }

    //creamos el metodo logout que especificamos en la ruta que sera para cerrar session
    public function logout(){
      Auth::logout(); //usamos el paquete Aut nos brinda el metodo logout despues nos redirigimos a la raiz del sitio,
      return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
