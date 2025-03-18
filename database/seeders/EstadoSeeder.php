<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    public function run()
    {
        $estados = ['Vigente', 'Vendido', 'Alquilado'];

        foreach ($estados as $estado) {
            DB::table('estados')->updateOrInsert(
                ['tipo' => $estado],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }

        $this->command->info('✔ Estados insertados correctamente.');
    }
}
