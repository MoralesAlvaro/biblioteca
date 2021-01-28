<?php

use Illuminate\Database\Seeder;
use App\Devolucion;

class DevolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Devolucion::class, 1)->create();
    }
}
