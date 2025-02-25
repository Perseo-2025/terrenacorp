<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubTipoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener IDs de tipos de inmuebles desde la tabla tipo_inmuebles
        $tipos = DB::table('tipo_inmuebles')->pluck('id', 'nombre');

        $subtipos = [
            // Para Casa
            ['id_tipo_inmueble' => $tipos['Casa'] ?? null, 'nombre' => 'Urbanización', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Casa'] ?? null, 'nombre' => 'Condominio', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Casa'] ?? null, 'nombre' => 'Rústico', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Casa'] ?? null, 'nombre' => 'De Campo', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Casa'] ?? null, 'nombre' => 'De Playa', 'created_at' => now(), 'updated_at' => now()],

            // Para Departamento
            ['id_tipo_inmueble' => $tipos['Departamento'] ?? null, 'nombre' => 'Flat', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Departamento'] ?? null, 'nombre' => 'Duplex', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Departamento'] ?? null, 'nombre' => 'Triplex', 'created_at' => now(), 'updated_at' => now()],

            // Para Comercial
            ['id_tipo_inmueble' => $tipos['Comercial'] ?? null, 'nombre' => 'Edificio Empresarial', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Comercial'] ?? null, 'nombre' => 'Comercial', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Comercial'] ?? null, 'nombre' => 'Industrial', 'created_at' => now(), 'updated_at' => now()],

            // Otros
            ['id_tipo_inmueble' => $tipos['Terreno'] ?? null, 'nombre' => 'Residencial', 'created_at' => now(), 'updated_at' => now()],
            ['id_tipo_inmueble' => $tipos['Terreno'] ?? null, 'nombre' => 'Agrícola', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insertar en la tabla sub_tipo_inmuebles
        DB::table('sub_tipo_inmuebles')->insert($subtipos);
    }
}
