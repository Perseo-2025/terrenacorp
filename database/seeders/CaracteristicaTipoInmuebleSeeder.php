<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristicaTipoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoCasa = DB::table('tipo_inmuebles')->where('nombre', 'Casa')->first()->id;
        $caracteristicasCasa = [
            'Amoblado',
            'Aire acondicionado',
            'Instalaciones para computo',
            'Remodelado',
            'Seguridad 24H'
        ];

        foreach ($caracteristicasCasa as $nombreCaracteristica) {
            $caracteristica = DB::table('caracteristicas')->where('name', $nombreCaracteristica)->first();
            if ($caracteristica) {
                DB::table('caracteristica_tipo_inmueble')->insert([
                    'caracteristica_id' => $caracteristica->id,
                    'tipo_inmueble_id' => $tipoCasa,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoDepartamento = DB::table('tipo_inmuebles')->where('nombre', 'Departamento')->first()->id;
        $caracteristicasDepartamento = [
            'Amoblado',
            'Ascensor',
            'Aire acondicionado',
            'Instalaciones para computo',
            'Central Telefónica',
            'CCS-Videovigilancia',
            'Seguridad 24H'
        ];

        foreach ($caracteristicasDepartamento as $nombreCaracteristica) {
            $caracteristica = DB::table('caracteristicas')->where('name', $nombreCaracteristica)->first();
            if ($caracteristica) {
                DB::table('caracteristica_tipo_inmueble')->insert([
                    'caracteristica_id' => $caracteristica->id,
                    'tipo_inmueble_id' => $tipoDepartamento,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoOficina = DB::table('tipo_inmuebles')->where('nombre', 'Oficina')->first()->id;
        $caracteristicasOficina = [
            'Amoblado',
            'Ascensor',
            'Escalera de Emergencia',
            'Aire acondicionado',
            'Instalaciones para computo',
            'Central Telefónica',
            'CCS-Videovigilancia',
            'Seguridad 24H',
            'Carga Eléctrica',
            'Pozo de Tierra'
        ];

        foreach ($caracteristicasOficina as $nombreCaracteristica) {
            $caracteristica = DB::table('caracteristicas')->where('name', $nombreCaracteristica)->first();
            if ($caracteristica) {
                DB::table('caracteristica_tipo_inmueble')->insert([
                    'caracteristica_id' => $caracteristica->id,
                    'tipo_inmueble_id' => $tipoOficina,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoLocal = DB::table('tipo_inmuebles')->where('nombre', 'Local')->first()->id;
        $caracteristicasLocal = [
            'Aire Acondicionado',
            'Instalaciones para computo',
            'Central Telefónica',
            'CCS-Videovigilancia',
            'Seguridad 24H',
            'Carga Eléctrica', //ojo
            'Pozo de Tierra',
            'Cerco Perimétrico',
            'Materia de Techo'
        ];    

        foreach ($caracteristicasLocal as $nombreCaracteristica) {
            $caracteristica = DB::table('caracteristicas')->where('name', $nombreCaracteristica)->first();
            if ($caracteristica) {
                DB::table('caracteristica_tipo_inmueble')->insert([
                    'caracteristica_id' => $caracteristica->id,
                    'tipo_inmueble_id' => $tipoLocal,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoTerreno = DB::table('tipo_inmuebles')->where('nombre', 'Terreno')->first()->id;
        $caracteristicasTerreno = [
            'Cerco Perimétrico',
            'Energía Eléctrica',
            'Agua Potable',
            'Pozo de Agua'
        ];    

        foreach ($caracteristicasTerreno as $nombreCaracteristica) {
            $caracteristica = DB::table('caracteristicas')->where('name', $nombreCaracteristica)->first();
            if ($caracteristica) {
                DB::table('caracteristica_tipo_inmueble')->insert([
                    'caracteristica_id' => $caracteristica->id,
                    'tipo_inmueble_id' => $tipoTerreno,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }   
        }



    }
}
