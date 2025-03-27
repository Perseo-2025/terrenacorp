<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistribucionTipoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener IDs dinámicamente por nombre
        $tipoCasa = DB::table('tipo_inmuebles')->where('nombre', 'Casa')->first()->id;
        $distribucionesCasa = [
            'Sala Principal',
            'Sala de Star',
            'Comedor Principal',
            'Comedor de Diario',
            'Cocina',
            'Estudio',
            'Terraza',
            'Jardin',
            'BBQ',
            'Piscina',
            'Sotano',
            'Azotea',
            'Almacen',
            'Lavandería',
            'Cuarto de Servicio',
            'Baño de Servicio',
        ];

        foreach ($distribucionesCasa as $nombreDistribucion) {
            $distribucion = DB::table('distribucions')->where('name', $nombreDistribucion)->first();
            if ($distribucion) {
                DB::table('distribucion_tipo_inmueble')->insert([
                    'distribucion_id' => $distribucion->id,
                    'tipo_inmueble_id' => $tipoCasa,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoDepartamento = DB::table('tipo_inmuebles')->where('nombre', 'Departamento')->first()->id;
        $distribucionesDepartamento = [
            'Sala principal',
            'Sala de star',
            'Comedor principal',
            'Comedor de diario',
            'Cocina',
            'Estudio',
            'Terraza',
            'Jardín',
            'BBQ',
            'Piscina',
            'Depósito',
            'Lavanderia',
            'Almacén',
            'Cuarto de Servicio',
            'Baño de Servicio',
            'Área social',
            'Gimnasio'
        ];
        foreach ($distribucionesDepartamento as $nombreDistribucion) {
            $distribucion = DB::table('distribucions')->where('name', $nombreDistribucion)->first();
            if ($distribucion) {
                DB::table('distribucion_tipo_inmueble')->insert([
                    'distribucion_id' => $distribucion->id,
                    'tipo_inmueble_id' => $tipoDepartamento,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }


        $tipoOficina = DB::table('tipo_inmuebles')->where('nombre', 'Oficina')->first()->id;
        $distribucionesOficina = [
            'Gerencia',
            'Director',
            'Sala de Conferencia',
            'Recepción',
            'Sala de espera',
            'Kitchen',
            'Comedor',
            'Jardin',
            'Depósito'
        ];

        foreach ($distribucionesOficina as $nombreDistribucion) {
            $distribucion = DB::table('distribucions')->where('name', $nombreDistribucion)->first();
            if ($distribucion) {
                DB::table('distribucion_tipo_inmueble')->insert([
                    'distribucion_id' => $distribucion->id,
                    'tipo_inmueble_id' => $tipoOficina,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoLocal = DB::table('tipo_inmuebles')->where('nombre', 'Local')->first()->id;
        $distribucionesLocal = [
            'Gerencia',
            'Director',
            'Recpción',
            'Sala de espera',
            'Kitchen',
            'Comedor',
            'Sala de ventas',
            'Patio de maniobras',
            'Ingreso para camiones',
            'Montacargas'
        ];
        foreach ($distribucionesLocal as $nombreDistribucion) {
            $distribucion = DB::table('distribucions')->where('name', $nombreDistribucion)->first();
            if ($distribucion) {
                DB::table('distribucion_tipo_inmueble')->insert([
                    'distribucion_id' => $distribucion->id,
                    'tipo_inmueble_id' => $tipoLocal,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $tipoTerreno = DB::table('tipo_inmuebles')->where('nombre', 'Terreno')->first()->id;
        $distribucionesTerreno = [
            'Cerco Perimétrico',
            'Energía Eléctrica', 
            'Agua potable',
            'Pozo de agua'
        ];
        foreach ($distribucionesTerreno as $nombreDistribucion) {
            $distribucion = DB::table('distribucions')->where('name', $nombreDistribucion)->first();
            if ($distribucion) {
                DB::table('distribucion_tipo_inmueble')->insert([
                    'distribucion_id' => $distribucion->id,
                    'tipo_inmueble_id' => $tipoTerreno,
                    'created_at' => now(),
                ]);
            }
        }



    }


}
