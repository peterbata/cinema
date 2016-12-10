<?php

namespace Cinema\Http\Controllers;
use Illuminate\Http\Request;
use Cinema\Http\Requests;

//agregamos para usar
use Cinema\Http\Requests\UserCreateRequest; //por las validaciones usamos el UserCreateRequest PONEMOS TRUE EN EL Requests
use Cinema\Http\Requests\UserUpdateRequest; //por las validaciones usamos el UserUpdateRequest
use Session; //usar el Session para  optimizar codigo miramos los metodos de abajo messaje
use Redirect; //usar la redirect para  optimizar codigo miramos los metodos de abajo las rutas
use Cinema\User; //USAMOS PARA USAR EL NAMESPACE DE NUESTRA APLICACION Y USAR EL MODELO USER
use Illuminate\Routing\Route;

class UsuarioController extends Controller{

  //Declarar el MIDDDLEWARE DESDE EL CONTROLADOR
  //USO DE MIDDDLEWARE
  //creamos un metodo constructor donde especificamos que usaremos el middeleware Auut de Laravel
  //dejamos auth para que se aplique a todo
   public function __construct(){
     $this->middleware('auth');  //http://localhost:8000/usuario/create cuando tratemos de entrar nos redireccionara al http://localhost:8000/login ese login se cambia en Exceptions Handler ponemos la raiz del sitio donde deba loguarse, este auth es default de laravel asi no mas funciona
     $this->middleware('admin'); // PRIMERO SE EJECUTARA EL MiddlewareDE AUTENTIFICACION AUTH(viene por defacult de laravel) DESPUES se ejecuta este segundo que CREAMOS EL ADMIN para permisos de superusuario por id
  }                               //le decimos que aplicara a todo las rutas para su acceso, si no tiene priviligegios nos mostrara solo el admin
                                  //no tendra privilegios para esto ponemos el mensaje de alerts errors
                                  //el usuario tendra todos los privilegios y quien no es el id 1 no tendra ningun acceso por eso solo ponemos admin no especificamos las otras rutas
                                 //$this->middleware('admin'); es el MIDDDLEWARE ADMIN que creamos donde esta las condiciones para los usuarios controler, asi bloquea todos los metodos del usuario controler, no dejara entrar a las rutas resoucers a ninguna
                                //$this->middleware('admin',['only' => 'create','edit,'destroy'); //si queremos especificar los metodos a cuales afectaria, como lo dejamos solo admin sera a todos los metodos
                                 //auth y admin esta en la carpeta MIDDDLEWARE, auth es propio de laravel y admin nosotros creamos para la condicion que necesitaremos
                                 //nos rediccionaran ek admin en http://localhost:8000/admin no permitira ver

//OPTIMIZANDO EL PROYECTO NO FUNCIONA EL BeforeFilter
/*
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit','update','destroy']]); //es un filto que se ejecutara antes de cualquier accion en nuestro controllador
    }

    public function find(Route $route){
      $this->user = User::find($route->getParameter('usuario'));
      return $this->user;
    }
*/
    /**
     * Display a listing of the resource.
     * Es la que se encarga de mostrar los listados de los recursos
     * @return \Illuminate\Http\Response
     */
//SIN AJAX PAGINACION
  //   public function index()
  //   {
  //     // $users = \Cinema\User::All(); //hacemos una varialbe users que sera igual hacemos referencia al namespace , al medolo user, y el modelo ALL trae todos los elementos de la tabla USUARIOS - all es por default
  //     //$users = User::All(); //ARRIBA YA PUSIMOS USAR EL NAMESPACE Y EL MODELO USUARIO por eso ya no usamos el namespace solo hacemos referencia al modelo y que nos trae todos los datos de la BD
  //     $users = User::paginate(5); //sustituimos all por paginate
  // //  $users = User::onlyTrashed()->paginate(5); //mostrara los elementos que han sido elimindados por el soft deleting
  //     return view('usuario.index',compact('users'));  //retornamos la vista que se encontrara en la carpeta usuario  y su fichero que se llamara index.blade.php
  //   }                                                 //en el index se mostrara la tabla con los datos locahst:8000/usuario
  //                                                     //DESPUES SE ENVIA LA INFORMACION PARA ESO , COMPACT y le mandamos la informacion a la vista en la variable users
                                                      //despues nos vamos a la vista  index.blade.php donde haremos un recorrido con foreach

// CON AJAX PAGINACION
      public function index(Request $request) //añadimos el request
        {
            $users = User::paginate(10);
            if($request->ajax()){ //SI EL request ES MEDIANTE AJAX
                return response()->json(view('usuario.users',compact('users'))->render()); //enviamos la respuesta con el parchall que hemos creado que seria el users.blade.php, despues mandamos el metodo render
            }
            return view('usuario.index',compact('users'));
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //ACA MOSTRARA EL FORMULARIO PARA CREAR EL RECURSO, crearemos un usuario
        return view('usuario.create'); //hacemos referencia a la carpeta usuario que esta en vistas y a su fichero llamado create que es create.blade.php
    }


    /**
     * Store a newly created resource in storage.
     *Almacena un recurso recién creado en el almacenamiento
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

      // public function store(Request $request) //estaba solo request antes de usar las validaciones con las validacionesse cambian hacen referencia al modelo USER  EN EL STORE
                              //significa almacenar, ver en la ducuemntacion con el Requests que en la documentacion en laraevel es la informacion que no es lanzanda, es importante para almacenar
                              //UserCreateRequest esta en paqiete de los Requests que se crea para las validaciones
    public function store(UserCreateRequest $request)
    {
      //esta parte crea usuarios alamacena los datos  store es almacenar - almacena los usuarios
      //OPTIMIZANDO EL PROYECTO
      /*

        // return "estamos en el store del usario controller";
            // \Cinema\User::create([     //HACEMOS USO DEL NAMESPACE PARA SALIR Y USAR EL MODELO USER Y NOS VAMOS AL METODO CREATE PARA CREAR USUARIO - el create es por default
            User::create([     ///ARRIBA YA PUSIMOS USAR EL NAMESPACE Y EL MODELO USUARIO por eso ya no usamos el namespace solo hacemos referencia al modelo
           'name'=> $request['name'],     //NAME EMAIL Y PASSWORD, SON LOS QUE SE PUEDE USAR VIENDO EL MODELO USER, despues se le iguala con los formularios del create.blade.php
           'email'=> $request['email'],   //los nombres tiene que ser igual de la base de datos y los formularios de las vistas
           'password'=> $request['password'], //ya esta incriptando en el metodo setPasswordAttribute en el modelo User.
          //  'password'=> bcrypt($request['password']), //encriptamos la contraseña en laravel
           // return "Usuario Registrado"; //nos dice si se registro el usuario y no retorna
         ]);
*/

//ENCRIPTAMOS LA CONTRASEÑA POR LA RESTABLECER NO PUEDE ay interferencia, el anterior tambm funciona asi Y DE ADELANTE TOMA MAS OPTIMIZADO EL CODIGO
                User::create([
                  'name'=> $request['name'],
                  'email'=> $request['email'],
                  'password'=> bcrypt($request['password']), //encriptamos la contraseña en laravel

                ]);

                Session::flash('message','Usuario creado Correctamente');
                return Redirect::to('/usuario');
/*
          User::create($request->all());   //asi optimizamos de la parte de arriba el codigo seleccionado todo
                                                                               //usamos sus paquetes ponemos para usar Session y Redirect
          Session::flash('message','Usuario creado Correctamente'); //HACEMOS ENVIAR EL MENSAJE DE CONFIRMACION DE REGISTRADO correctamente
          return Redirect::to('/usuario'); //redireciona al index usuario igual que el anerior son dos formas de escribir
*/
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
       $user = User::find($id); //creamos una variable usuario que sera igual al modelo USUARIO donde encontremos al usuario con este id (FIND es encontrar)
       return view('usuario.edit',['user'=>$user]); //y retornamos una vista donde se encuentra en la carpeta usuario fichero edit, a la cual
                                                    //tenemos que pasarle el usuario correspondiente, le mandamos al user y lo salvamos al user la variable
                                                    //al formulario edit le pasamos la informacion del usuario encontrado por su id para que lo use
      // return view('usuario.edit',compact('user')); //ES LO MISMO PASAR EL user usando el compacto que manda todo el valor
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id) //request es solicitud - de actulizar em este caso por el id del usuario
      public function update(UserUpdateRequest $request, $id) //POR LAS VALIDACIONES camniamos EL request por UserUpdateRequest ya que aca usaremos las actualizaciones y nos debearrojar el error aca
    {
        //creamos las funciones para que pueda ser actualizado, falta ENCRIPTAR la contraseña por el restablecer email

        $user = User::find($id);  //buscamos al usuario , vamos encotnrar el id del modelo USER //creamos una variable usuario que sera igual al modelo USER donde encontremos con este id (FIND es encontrar)
        $user->fill($request->all()); //almacenamos la actualizacion del usaurio, el metodo FILL significa llenar a todo que es ALL, DONDE PASAMOS EL REQUEST AL all //vamos a rellenar el elemento
        $user->save(); //DESPUES LO GUARDAMOS EL USUARIO-save es guardar default de Laravel

        Session::flash('message','Usuario Editado Correctamente'); //aca para que aparezca el mensaje en la variable Session desde aca cuando se actualice el usuario
        return Redirect::to('/usuario'); //retornamos al usuario al index
          //no olvinarnos poner las librerias en la aprte de arriba lo qe usaremos seesion y Redirect
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //aca basicamente destruiremos el recurso
    public function destroy($id)
    {
      //User::destroy($id);  //hacemos referencia al modelo USER destroy y le pasamos el id que estamos recibiendo
      //Session::flash('message','Usuario Eliminado Correctamente'); //aca para que aparezca el mensaje en la variable Session desde aca cuando se elimine el usuario
      //return Redirect::to('/usuario'); //retornamos al usuario al index

      //CAMBIAMOS POR EL softDeletes
      $user = User::find($id); //creamos la variable usuario que es igual a User donde buscamos conforme al ID que recibamos
                               //buscamos al usuario , vamos encotnrar el id del modelo USER
      $user->delete(); //y hacemos referencia al metodo delete
      Session::flash('message','Usuario Eliminado Correctamente'); //aca para que aparezca el mensaje en la variable Session desde aca cuando se elimine el usuario
      return Redirect::to('/usuario'); //retornamos al usuario al index
    }
}
