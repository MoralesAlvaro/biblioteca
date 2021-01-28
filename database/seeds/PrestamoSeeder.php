<?php

use Illuminate\Database\Seeder;
use App\Prestamo;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Prestamo::class, 1)->create();
    }
}
