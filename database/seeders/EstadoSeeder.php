<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array de estados
        $estados = [
            ['tipo' => 'Vigente', 'created_at' => now(), 'updated_at' => now()],
            ['tipo' => 'Vendido', 'created_at' => now(), 'updated_at' => now()],
            ['tipo' => 'Alquilado', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserción masiva en la tabla 'estados'
        DB::table('estados')->insert($estados);
    }
}
