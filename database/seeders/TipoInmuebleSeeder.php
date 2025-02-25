<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lista de tipos de inmuebles
        $tipos = [
            ['nombre' => 'Casa', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Departamento', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Oficina', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Local', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Terreno', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserción masiva
        DB::table('tipo_inmuebles')->insert($tipos);
    }
}
