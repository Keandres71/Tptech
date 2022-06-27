<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Usuario admin',
            'apellido' => 'apellido admin',
            'email' => 'admin@hotmail.com',
            'fecha_nac' => '2022-06-26',
            'password' => Hash::make('12345678'),
        ])->assignRole('usuario.admin');

        User::create([
            'name' => 'Usuario empleado',
            'apellido' => 'apellido empleado',
            'email' => 'empleado@hotmail.com',
            'fecha_nac' => '2022-06-26',
            'password' => Hash::make('12345678'),
        ])->assignRole('usuario.empleado');

        User::create([
            'name' => 'Usuario cliente',
            'apellido' => 'apellido cliente',
            'email' => 'cliente@hotmail.com',
            'fecha_nac' => '2022-06-26',
            'password' => Hash::make('12345678'),
        ])->assignRole('usuario.cliente');
    }
}
