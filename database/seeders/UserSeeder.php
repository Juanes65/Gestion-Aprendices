<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Usuario',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Usuario');
    }
}
