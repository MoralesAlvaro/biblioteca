<?php

use Illuminate\Database\Seeder;
use App\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Libro::class, 25)->create();
    }
}
