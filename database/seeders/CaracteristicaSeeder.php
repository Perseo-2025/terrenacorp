<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristicaSeeder extends Seeder
{
    public function run(): void
    {
        $caracteristicas = [
            ['name' => 'Amoblado', 'slug' => 'amoblado'],
            ['name' => 'Aire acondicionado', 'slug' => 'aire-acondicionado'],
            ['name' => 'Ascensor', 'slug' => 'ascensor'],
            ['name' => 'Instalaciones para computo', 'slug' => 'instalaciones-para-computo'],
            ['name' => 'Remodelado', 'slug' => 'remodelado'],
            ['name' => 'Seguridad 24H', 'slug' => 'seguridad-24h'],
            ['name' => 'Central Telefónica', 'slug' => 'central-telefonica'],
            ['name' => 'CCS-Videovigilancia', 'slug' => 'videovigilancia'],
            ['name' => 'Escalera de Emergencia', 'slug' => 'escalera-de-emergencia'],
            ['name' => 'Carga Eléctrica', 'slug' => 'carga-electrica'],
            ['name' => 'Pozo de Tierra', 'slug' => 'pozo-de-tierra'],
            ['name' => 'Cerco Perimétrico', 'slug' => 'cerco-perimetrico'],
            ['name' => 'Material de Techo', 'slug' => 'material-de-techo'],
            ['name' => 'Energía Eléctrica', 'slug' => 'energia-electrica'],
            ['name' => 'Agua Potable', 'slug' => 'agua-potable'],
            ['name' => 'Pozo de Agua', 'slug' => 'pozo-de-agua'],
        ];
        
        

        DB::table('caracteristicas')->insert($caracteristicas);
    }
}
