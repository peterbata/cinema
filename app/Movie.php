<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon; //usamos esta libreria DOCUMENTACION: http://carbon.nesbot.com/
use DB;

class Movie extends Model
{
    //hacemos referencia a una tabla en el modelo muvie almacenaremos movies
    //ACA IRA LO QUE ALMACENARA EL MODELO MOVIE COMO LA TABLA DE BASE DE DATOS
    protected $table = "movies"; //es la tabla que usaremos de la base de datos

    //protected $primaryKey = ""; //si no es por default definir
    //Timestamps POR default, Eloquent crea  created_at y updated_at mirar en la base de datos, estara presente en codefistrs cuando se hace la migracion en la BD estara la fehca creada y actualizadas
    //dentro de este modelo si no queremos ponemos
    //public $timestamps = false;

    //PONEMOS NUESTRA BASE DE DATOS

    protected $fillable = ['name','path','cast','direction','duration','genre_id']; //usamos path por que es el 'camino' del archivo que gurdaremos localmente


    //CREAMOS UN MUTADOR y SUBIR EL ARCHIVOS AL LOCAL, path esta en el formulario en subir el archivo ES EL NOMBRE DEL FORMULARIO
    //path es el seleccion del archivo
    //sirve para modificar elemnetos antes de ser guardados, por ejemplo las imagenes para que no se reemplaan al tener mismo nombre
                  //  setAttribute el atributo que modifiacra sera el path por eso es setPathAttribute
    public function setPathAttribute($path){ //modificaremos el atributo path, estamos recibiendo path de la BD

    if(! empty($path)){ //El campo path no debe estar vacio para que ejecute toda esa accion
        $name = Carbon::now()->second.$path->getClientOriginalName();//CON CARBON LE ESPECIFICAMOS LA FECHA DE HOY, TOMAMOS EL SEGUNDOEN QUE ES SUBIDO Y LO CONCATENAMOS AL NOMBRE ORIGINAL DEL ARCHIVO, creamos una variable que contatenara el nombre con los segundos
        $this->attributes['path'] = $name; //hacemos referencia a path  y vamos a cambiarlo el nombre
        \Storage::disk('local')->put($name, \File::get($path)); //ACA SE HACE LA SUBIDA DEL ARCHIVO, especificamos el local y mediante el metodo put vamos a almacenar nuestro archivo, recibe el nombre y el archivo que vamos a subir que es el path
      }
      }
//
    //   public function setPathAttribute($path){
    //
    //     if(!empty($path)){
    //         /* Para Actualizar Imagen */
    //         if(!empty($this->attributes['path'])){
    //             \Storage::delete($this->attributes['path']);
    //         }
    //         $this->attributes['path] = Carbon::now()>second.$path>getClientOriginalName();
    //         $name = Carbon::now()>second.$path>getClientOriginalName();
    //         \Storage::disk('local')->put($name, \File::get($path));
    //     }
    // }

//USAREMOS PARA LEER LOS ARCHIVOS EN EL INDEX, de aca pasamos al MovieController al metodo index
//creamos el METODO MoviesConsult PARA LLEVAR LA CONSULTA, obtenemos la pelicula con el genero que le CORRESPONDIENTE

    public static function MoviesConsult(){
    		return DB::table('movies') //usamos la tabla movies
    			->join('genres','genres.id','=','movies.genre_id')//creamos un join con la tabla generos , donde el id de la tabla generos sea igual al 'movies.genre_id
    			->select('movies.*', 'genres.genre')//seleccionamos todos los campos de la tabla movies y solo seleccionar el genero de la tabla genero
    			->get(); //solo obtenemos la consulta
    	}
}
