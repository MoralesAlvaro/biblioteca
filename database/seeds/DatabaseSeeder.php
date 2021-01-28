<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Reseteando tablas
        $this->truncateTables([
            'users',
            'categorias',
            'cursos',
            'estudiantes',
            'libros',
            'prestamos',
            'devolucions',
        ]);

        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(PrestamoSeeder::class);
        //$this->call(DevolucionSeeder::class);
        
    }

    // Método para resetear tablas
    public function truncateTables(array $tables)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
