<?php

use Illuminate\Database\Seeder;
use App\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Estudiante::class, 25)->create();
    }
}
