<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoInmuebleSeeder extends Seeder
{
    public function run()
    {
        $tipos = ['Casa', 'Departamento', 'Oficina', 'Local', 'Terreno'];

        foreach ($tipos as $tipo) {
            DB::table('tipo_inmuebles')->updateOrInsert(
                ['nombre' => $tipo],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }

        $this->command->info('✔ Tipos de inmueble insertados correctamente.');
    }
}
