<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //CREACION DE TABLAS EMPIEZA - CREATING TABLE EN LA DOCUMENTACION
      Schema::create('movies', function(Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          /*
           | En el video tutorial olvide agregar el Path de las imagenes xD
           */
          $table->string('path');
          $table->string('cast');
          $table->string('direction');
          $table->string('duration');
          $table->timestamps(); //siempre queda es la estructura de las migraciones para ver la fecha de modificacion mirar en los MODELOS
          //para las llaves foraneas
          //estamos asignando un genero por eso usaremos la tabla genero - requiere hacer una relacion
          //el genre_id hara referencia al genero id de la tabla generos
          $table->integer('genre_id')->unsigned();
          $table->foreign('genre_id')->references('id')->on('genres');

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('movies');
    }
}
