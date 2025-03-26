<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubTipoInmuebleSeeder extends Seeder
{
    public function run()
    {
        // Obtener IDs actualizados de la tabla
        $tipos = DB::table('tipo_inmuebles')->pluck('id', 'nombre');

        if ($tipos->isEmpty()) {
            $this->command->error("❌ No se encontraron tipos de inmueble en la base de datos. Asegúrate de ejecutar TipoInmuebleSeeder primero.");
            return;
        }

        $subtipos = [
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'Urbanización'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'Condominio'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'Rústico'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'De Campo'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'De Playa'],

            ['tipo_inmueble_id' => $tipos['Departamento'] ?? null, 'nombre' => 'Flat'],
            ['tipo_inmueble_id' => $tipos['Departamento'] ?? null, 'nombre' => 'Dúplex'],
            ['tipo_inmueble_id' => $tipos['Departamento'] ?? null, 'nombre' => 'Tríplex'],

            ['tipo_inmueble_id' => $tipos['Oficina'] ?? null, 'nombre' => 'Coworking'],
            ['tipo_inmueble_id' => $tipos['Oficina'] ?? null, 'nombre' => 'Oficina Privada'],
            ['tipo_inmueble_id' => $tipos['Oficina'] ?? null, 'nombre' => 'Centro de Negocios'],

            ['tipo_inmueble_id' => $tipos['Local'] ?? null, 'nombre' => 'Comercial'],
            ['tipo_inmueble_id' => $tipos['Local'] ?? null, 'nombre' => 'Industrial'],
            ['tipo_inmueble_id' => $tipos['Local'] ?? null, 'nombre' => 'Tienda Minorista'],

            ['tipo_inmueble_id' => $tipos['Terreno'] ?? null, 'nombre' => 'Residencial'],
            ['tipo_inmueble_id' => $tipos['Terreno'] ?? null, 'nombre' => 'Agrícola'],
        ];

        foreach ($subtipos as $subtipo) {
            if ($subtipo['tipo_inmueble_id'] !== null) {
                DB::table('sub_tipo_inmuebles')->updateOrInsert(
                    ['nombre' => $subtipo['nombre'], 'tipo_inmueble_id' => $subtipo['tipo_inmueble_id']],
                    ['created_at' => now(), 'updated_at' => now()]
                );
            } else {
                $this->command->error("⚠ No se insertó '{$subtipo['nombre']}' porque su `tipo_inmueble_id` es NULL.");
            }
        }

        $this->command->info('✔ Subtipos de inmueble insertados correctamente.');
    }
}

