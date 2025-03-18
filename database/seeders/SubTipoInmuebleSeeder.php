<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubTipoInmuebleSeeder extends Seeder
{
    public function run()
    {
        // Obtener IDs de tipos de inmuebles desde la tabla tipo_inmuebles
        $tipos = DB::table('tipo_inmuebles')->pluck('id', 'nombre');

        // Verificar que los tipos necesarios existen en la base de datos
        $tiposNecesarios = ['Casa', 'Departamento', 'Oficina', 'Local', 'Terreno'];
        foreach ($tiposNecesarios as $tipo) {
            if (!isset($tipos[$tipo])) {
                $this->command->error("⚠ El tipo de inmueble '{$tipo}' no existe en la base de datos.");
            }
        }

        // Lista de subtipos a insertar (sin Comercial)
        $subtipos = [
            // ✅ Para Casa
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'Urbanización'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'Condominio'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'Rústico'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'De Campo'],
            ['tipo_inmueble_id' => $tipos['Casa'] ?? null, 'nombre' => 'De Playa'],

            // ✅ Para Departamento
            ['tipo_inmueble_id' => $tipos['Departamento'] ?? null, 'nombre' => 'Flat'],
            ['tipo_inmueble_id' => $tipos['Departamento'] ?? null, 'nombre' => 'Dúplex'],
            ['tipo_inmueble_id' => $tipos['Departamento'] ?? null, 'nombre' => 'Tríplex'],

            // ✅ Para Oficina
            ['tipo_inmueble_id' => $tipos['Oficina'] ?? null, 'nombre' => 'Coworking'],
            ['tipo_inmueble_id' => $tipos['Oficina'] ?? null, 'nombre' => 'Oficina Privada'],
            ['tipo_inmueble_id' => $tipos['Oficina'] ?? null, 'nombre' => 'Centro de Negocios'],

            // ✅ Para Local
            ['tipo_inmueble_id' => $tipos['Local'] ?? null, 'nombre' => 'Comercial'],
            ['tipo_inmueble_id' => $tipos['Local'] ?? null, 'nombre' => 'Industrial'],
            ['tipo_inmueble_id' => $tipos['Local'] ?? null, 'nombre' => 'Tienda Minorista'],

            // ✅ Para Terreno
            ['tipo_inmueble_id' => $tipos['Terreno'] ?? null, 'nombre' => 'Residencial'],
            ['tipo_inmueble_id' => $tipos['Terreno'] ?? null, 'nombre' => 'Agrícola'],
        ];

        // Insertar solo si el tipo_inmueble_id existe
        foreach ($subtipos as $subtipo) {
            if ($subtipo['tipo_inmueble_id'] !== null) { // Evitar insertar si el ID es NULL
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
