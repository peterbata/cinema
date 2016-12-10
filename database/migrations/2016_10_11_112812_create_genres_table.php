<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('genres', function(Blueprint $table) {
          $table->increments('id');
          $table->string('genre'); //solo llevara un atributo que sera el genero
          $table->timestamps(); //siemrpe queda es la estructura de las migraciones muestran las modificaciones las fechas es el TIMESTAMPs  create y update
                              //mirar cuando se hace defrente sin migraciones BD se debe crear igual
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
             Schema::drop('genres');
    }
}
