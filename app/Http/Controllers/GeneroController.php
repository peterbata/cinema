<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

//agregamos para usar
use Cinema\Http\Requests\GenreRequest; //por las validaciones usamos el GenreRequest PONEMOS TRUE EN EL Requests
use Cinema\Genre; //USAMOS PARA USAR EL NAMESPACE DE NUESTRA APLICACION Y USAR EL MODELO Genre //incorporamos el modelo
use Cinema\Http\Requests;
class GeneroController extends Controller
{

  //FUNCION PARA LISTAR IGUAL QUE EL METODO INDEX ES LO MISMO SOLO QUE TUVO QUE ENRUTARLO
  // public function listing(Request $request)
  // {
  //   //  return 'hola estamos en el index';
  //
  //   if ($request->ajax()) {
  //        $genres = Genre::all();
  //        return response()->json($genres); //respondemos mediante json donde solamente pasaremos nuestros generos, le estamos mandando nuestros generos del MODELO
  //   }
  //}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //  return 'hola estamos en el index';

      if ($request->ajax()) {
           $genres = Genre::all();
           return response()->json($genres); //respondemos mediante json donde solamente pasaremos nuestros generos
      }
      return view('genero.index');

//PARA PAGINAR CON AJAX
      // $genres = Genre::paginate(2);
      // return response()->json([
      //         'datos' => $genres->toArray(),
      //         'pag' => $genres->render()
      //     ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //sin AJAX
      // return view('genero.create');   //nos retorna la vista en la carpeta  genero el archivo create.blade.php

      //CON AJAX
      return view('genero.create'); //nos retorna la vista en la carpeta  genero el archivo create.blade.php
    }

    /**
     * Store a newly created resource in storage. CREAR GENERO
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreRequest $request) //especificamos el GenreRequest por las VALIDACIONES SOLO ERA request $request
    {

   //SIN AJAX
      /** PARTE SIN AJAX PARA CREAR GENERO, PONER EL CAMPO DE LA BASE DE DATO IGUAL QUE EL NOMBRE DEL FORMULARIO*/
       //Genre::create([
       //'genre'=> $request['genre'],
       //]);
       //return "Usuario Registrado"; //nos dice si se registro el usuario y no retorna

       // CON AJAX

   /**  //prueba antes de ajax ver en network debe mandar el mensaje
     if ($request->ajax()){ //si esta peticieno es mediante ajax
          return response()->json([ //daremos una respuesta tipo JSON donde vamos a enviar un mensaje
             "mensaje"=>$request->all(), //mensaje que enviara todo lo que nos esta llegando
          ]);
       }
       */

       if($request->ajax()){ //si esta peticion es mediante ajax
          Genre::create($request->all());   //Genre::create([
                                            //'genre'=> $request['genre'], //puedo insertar datos de esta forma tambien
                                            //]);
          return response()->json([ //daremos una respuesta tipo JSON donde vamos a enviar un mensaje
            "mensaje" => 'creado', //mensaje que enviara todo lo que nos esta llegando, aparecera en modo desarrollador
          ]);
       }

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
      $genre = Genre::find($id);//BUSCAMOS UN GENERO, QUE LO ENCONTRAR POR SU ID (find es encontrar)
      return response()->json($genre); //repuesta JSON enviando la variable genero que encontro los id
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
      $genre = Genre::find($id); //BUSCAMOS UN GENERO, QUE LO ENCONTRAR POR SU ID (find es encontrar)
      $genre->fill($request->all()); //al cual hacemos referencia al metodo fill y pasamos todo
      $genre->save(); // y lo salvamos o guadamos
      return response()->json(["mensaje" => "listo esta editado"]); //regresamos una respuesta de tipo JSON en la consola se vera EN network
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Genre::destroy($id);
        // $this->genre->delete(); //hacemos referencia al metodo delete NO ME FUNCIONA DE ESTA FORMA por eso lo comente  es por la version de laravel
     return response()->json(["mensaje"=>"borrado el genero"]); //retornamos la respuesta de tipo JSON que el mensaje se ah borrado
    }
}
