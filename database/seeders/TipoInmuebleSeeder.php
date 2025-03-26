<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoInmuebleSeeder extends Seeder
{
    public function run()
    {
        $tipos = ['Casa', 'Departamento', 'Oficina', 'Local', 'Terreno'];

        $ids = []; // Guardar IDs de tipos de inmueble

        foreach ($tipos as $tipo) {
            $id = DB::table('tipo_inmuebles')->updateOrInsert(
                ['nombre' => $tipo],
                ['created_at' => now(), 'updated_at' => now()]
            );

            // Guardar el ID recién insertado o existente
            $ids[$tipo] = DB::table('tipo_inmuebles')->where('nombre', $tipo)->value('id');
        }

        $this->command->info('✔ Tipos de inmueble insertados correctamente.');

        return $ids; // Devolver IDs para usarlos en otro seeder
    }
}

