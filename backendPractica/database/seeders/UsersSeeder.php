<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Juan',
            'lastName' => 'Perez',
            'email' => 'juan@correo.com',
            'country' => 'Chile',
            'summary' => 'Buenas tardes, soy Juan']
        ]);

        DB::table('frameworks')->insert([
            ['name' => 'Laravel',
            'level' => 'Avanzado',
            'year' => '2015',
            'user_id' => 1],
            ['name' => 'Vue',
            'level' => 'Avanzado',
            'year' => '2016',
            'user_id' => 1],
            ['name' => 'Angular',
            'level' => 'Intermedio',
            'year' => '2017',
            'user_id' => 1]
        ]);

        DB::table('hobbies')->insert([
            ['name' => 'Futbol',
            'description' => 'Jugar futbol',
            'user_id' => 1],
            ['name' => 'Basketball',
            'description' => 'Jugar basketball',
            'user_id' => 1]
        ]);
    }
}
