<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//INSERTAMOS LOS GENEROS CON SEEDS
    public function run()
    {
      DB::table('genres')->insert([
         'genre' => 'Drama',
             ]);

      DB::table('genres')->insert([
          'genre' => 'Acción',
             ]);
  DB::table('genres')->insert([
      'genre' => 'Caricatura',
      ]);

      DB::table('genres')->insert([
         'genre' => 'Comedia',
             ]);

      DB::table('genres')->insert([
          'genre' => 'Gangsters',
             ]);

      DB::table('genres')->insert([
            'genre' => 'Terror',
            ]);
            DB::table('genres')->insert([
               'genre' => 'Artes marciales',
                   ]);

            DB::table('genres')->insert([
                'genre' => 'Música',
                   ]);

            DB::table('genres')->insert([
                  'genre' => 'Aventuras',
                  ]);
      // factory(Cinema\Genre::class, 100)->create(); //falta generar su factory en la carpeta factories, para que genere aleatoriamente



      }
}
