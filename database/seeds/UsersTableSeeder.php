<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //los seeders sirve para insertar datos a la BD
      //comando: php artisan db:seed, se inicializa de acuerdo al orden que pongamos en el DatabaseSeeder ahi lo descomentamos y cuando ponemos este comando este seeder se ejecutara

          DB::table('users')->insert([
             'name' => 'Brayan Murphy Crespo Espinoza',
             'email' => 'BrayanMurphyC@gmail.com',
             'password' => bcrypt('admin'),
         ]);

        //usamos los factories, en la carpeta de factories configuramos par a que usuar genere aleatoriamente, hacer para las demas tablas lo mismo

       factory(Cinema\User::class, 99)->create(); //crea usuario de forma aleatoria se usa el factori app cambiar por nombre del namespace

//COMANDOS depues de migrar la tabla:

    //comando: php artisan db:seed,
    //o si queremos que todo se refreque, sera igual que liminar y cargar nuevamente y poner los session_decode
  //comando: php artisan migrate:refresh --seed
}
}
