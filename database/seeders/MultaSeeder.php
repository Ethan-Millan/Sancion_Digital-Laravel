<?php

namespace Database\Seeders;

use App\Models\Multa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Multa::create([
            'nombre_multa' => 'Falta leve',
            'descripcion_multa' => 'Descripción de la falta leve',
            'hora_infraccion' => 10
        ]);

        Multa::create([
            'nombre_multa' => 'Falta grave',
            'descripcion_multa' => 'Descripción de la falta grave',
            'hora_infraccion' => 15
        ]);
        Multa::create([
            'nombre_multa' => 'Falta muy grave',
            'descripcion_multa' => 'Descripción de la falta muy grave',
            'hora_infraccion' => 30
        ]);
    }
}
