<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargamentos')->insert([
            'nombre' => 'Cargamento 1',
            'carga_controlada' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargamentos')->insert([
            'nombre' => 'Cargamento 2',
            'carga_controlada' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargamentos')->insert([
            'nombre' => 'Cargamento 3',
            'carga_controlada' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargamentos')->insert([
            'nombre' => 'Cargamento 4',
            'carga_controlada' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cargamentos')->insert([
            'nombre' => 'Cargamento 5',
            'carga_controlada' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    
}
