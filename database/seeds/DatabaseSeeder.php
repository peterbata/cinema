<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    //se llamara los Seeder en orden
         $this->call(UsersTableSeeder::class);   //comando: php artisan db:seed, se ejecutara en esete ordenel seeder
        $this->call(GenerosTableSeeder::class);  //SEGUNDO SE EJECUTA EL SEED DE GENEROS DONDE INSERTARA VALORES
    }
}
