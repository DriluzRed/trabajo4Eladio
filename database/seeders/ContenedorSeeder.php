<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContenedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('contenedores')->insert([
                'codigo' => 'COD-00' . $i,
                'descripcion' => 'Descripción del contenedor ' . $i,
                'capacidad' => rand(1000, 5000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
