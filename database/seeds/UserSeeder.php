<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //'rol' => 'Admin',
            'name' => 'Biblioteca',
            'lastName' => 'Biblioteca',
            'photo' => 'http://127.0.0.1:8000/img/user.png',
            'email' => 'biblioteca@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(User::class)->create();
    }
}
