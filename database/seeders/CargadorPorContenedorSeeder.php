<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargadorPorContenedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargador_por_contenedor')->insert([
            'contenedor_id' => 1,
            'cargamento_id' => 1,
            'toneladas' => 15,
            'activo' => true,
            'origen' => 'Origen de prueba 1',
            'destino' => 'Destino de prueba 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargador_por_contenedor')->insert([
            'contenedor_id' => 2,
            'cargamento_id' => 2,
            'toneladas' => 20,
            'activo' => false,
            'origen' => 'Origen de prueba 2',
            'destino' => 'Destino de prueba 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargador_por_contenedor')->insert([
            'contenedor_id' => 3,
            'cargamento_id' => 3,
            'toneladas' => 20,
            'activo' => false,
            'origen' => 'Origen de prueba 3',
            'destino' => 'Destino de prueba 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargador_por_contenedor')->insert([
            'contenedor_id' => 4,
            'cargamento_id' => 4,
            'toneladas' => 20,
            'activo' => false,
            'origen' => 'Origen de prueba 4',
            'destino' => 'Destino de prueba 4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargador_por_contenedor')->insert([
            'contenedor_id' => 5,
            'cargamento_id' =>5,
            'toneladas' => 20,
            'activo' => false,
            'origen' => 'Origen de prueba 5',
            'destino' => 'Destino de prueba 5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
