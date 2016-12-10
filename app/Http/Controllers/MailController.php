<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

//AGREGAMOS PAQUETES
use Mail; //agregamos para usar MAIL DONDE CONFIGURAMOS
use Session; //usar el Session para  optimizar codigo miramos los metodos de abajo messaje
use Redirect; //usar la redirect para  optimizar codigo miramos los metodos de abajo las rutas

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {        //enviamos los datos que estamos recibiendo y creamos un blade para especificar lo del formulario Y QUE MANDO POR EL REQUEST DE ACA 
          Mail::send('emails.contact',$request->all(), function($msj){ //especificamos la vista contact dentro de carpeta emails en elmetodo send,  y le decimos que pasemos la informacion en el request sera todo y despues creamos la funcion introducimos el mensaje
            $msj->subject('Correo de Contacto del CINEMA'); //especificamos el subjento
            $msj->to('BrayanMurphyC@gmail.com'); //a donde sera enviado ese correo
        });

        Session::flash('message','Mensaje enviado correctamente'); //NOTIFICAMOS AL USUARIO QUE SU CORREO FUE ENVIADO CORRECTAMENTE,AGREGAR DE LA CARPETA ALERT file SUCCES para que se muestre el mensaje
        return Redirect::to('contacto'); //y nos redirecciona
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
