<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'matricula' => '20230001',
            'nombre' => 'Juan',
            'apellido_materno' => 'Pérez',
            'apellido_paterno' => 'García',
            'email' => 'juan.perez@example.com',
            'password' => bcrypt('password'),
            'telefono' => '1234567890',
            'rol' => 'alumno'
        ]);

        User::create([
            'matricula' => '20230002',
            'nombre' => 'María',
            'apellido_materno' => 'López',
            'apellido_paterno' => 'Hernández',
            'email' => 'maria.lopez@example.com',
            'password' => bcrypt('password'),
            'telefono' => '0987654321',
            'rol' => 'alumno'
        ]);

        User::create([
            'matricula' => '20230003',
            'nombre' => 'Carlos',
            'apellido_materno' => 'Sánchez',
            'apellido_paterno' => 'Martínez',
            'email' => 'carlos.sanchez@example.com',
            'password' => bcrypt('password'),
            'telefono' => '5555555555',
            'rol' => 'vigilante'
        ]);
    }
}
