<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperacionSeeder extends Seeder
{
    public function run()
    {
        $operaciones = ['Venta', 'Alquiler', 'Venta/Alquiler'];

        foreach ($operaciones as $operacion) {
            DB::table('operacions')->updateOrInsert(
                ['tipo' => $operacion],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }

        $this->command->info('✔ Operaciones insertadas correctamente.');
    }
}
