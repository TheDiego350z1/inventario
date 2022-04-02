<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


// Importación de Modelos
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Llamamos a la clase de los seeders
        $this->call(RoleSeeder::class);

        // $this->call(UserSeeder::class);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
            'remember_token' => Str::random(10),
        ])->assignRole('admin');
    }
}
