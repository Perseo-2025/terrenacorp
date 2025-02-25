<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array de operaciones
        $operaciones = [
            ['tipo' => 'Venta', 'created_at' => now(), 'updated_at' => now()],
            ['tipo' => 'Alquiler', 'created_at' => now(), 'updated_at' => now()],
            ['tipo' => 'Venta/Alquiler', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserción masiva
        DB::table('operacions')->insert($operaciones);
    }
}
