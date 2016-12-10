<?php

namespace Cinema\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard; //nos brindara informacion del usuario que se encuentra logueado, lo que esta guardado
use Session; //sirve para poder enviar mensaje al usuario como las validaciones

class Admin{
    protected $auth; //CREAMOS ESTA VARIABLE Y EL CONSTRUCTOR
    public function __construct(Guard $auth)    {
      $this->auth = $auth;  //BASICAMENTE IGUALAMOS LOS VALORES TENIENDO ESTO LLEVAMOS LA VALIDACION DEL USUARIO
    }
    //auth es el MIDDDLEWARE de laravel que incorpora
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
      //aca hacemos la validacion del USUARIO CON LOS PRIVILEGIOS QUE TENDRA
      if ($this->auth->user()->id != 1) {  //ACCEDEMOS AL USUARIO Y SU ID SI NO ES SU ID = 1 NO ES EL ADMINISTRADOR ENTONCES LE ENVIAMOS UN MENSAJE ERROR DICIENDO QUE NO TIENE  PRIVILEGIOS
        Session::flash('message-errors' , 'Sin Privilegios'); //ESTO ES PARA EL MENSAJE LO INCLUIMOS EN EL INDEX BLADE DEL ADMIN EN LAS VISTAS
        return redirect()->to('admin'); //LUEGO LO REDIRIGIMOS AL ADMIN del USUARIO, nos llevara al http://localhost:8000/admin en auth que es de laravel nos redireciona al logueo
     }                                   //lo  usaremos en el UsuarioController
        return $next($request);
    }
}
