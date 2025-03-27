<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistribucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distribuciones = [
            ['name' => 'Sala Principal', 'slug' => 'sala-principal'],
            ['name' => 'Sala de Star', 'slug' => 'sala-de-star'],
            ['name' => 'Sala de Ventas', 'slug' => 'sala-de-ventas'],
            ['name' => 'Sala de Conferencia', 'slug' => 'sala-de-conferencia'],
            ['name' => 'Sala de Espera', 'slug' => 'sala-de-espera'],
            ['name' => 'Comedor Principal', 'slug' => 'comedor-principal'],
            ['name' => 'Comedor de Diario', 'slug' => 'comedor-de-diario'],
            ['name' => 'Comedor', 'slug' => 'comedor'],
            ['name' => 'Cocina', 'slug' => 'cocina'],
            ['name' => 'Kitchen', 'slug' => 'kitchen'],
            ['name' => 'Estudio', 'slug' => 'estudio'],
            ['name' => 'Terraza', 'slug' => 'terraza'],
            ['name' => 'Jardín', 'slug' => 'jardin'],
            ['name' => 'BBQ', 'slug' => 'bbq'],
            ['name' => 'Piscina', 'slug' => 'piscina'],
            ['name' => 'Sótano', 'slug' => 'sotano'],
            ['name' => 'Azotea', 'slug' => 'azotea'],
            ['name' => 'Almacén', 'slug' => 'almacen'],
            ['name' => 'Depósito', 'slug' => 'deposito'],
            ['name' => 'Lavandería', 'slug' => 'lavanderia'],
            ['name' => 'Cuarto de Servicio', 'slug' => 'cuarto-de-servicio'],
            ['name' => 'Baño de Servicio', 'slug' => 'bano-de-servicio'],
            ['name' => 'Área Social', 'slug' => 'area-social'],
            ['name' => 'Gimnasio', 'slug' => 'gimnasio'],
            ['name' => 'Gerencia', 'slug' => 'gerencia'],
            ['name' => 'Director', 'slug' => 'director'],
            ['name' => 'Recepción', 'slug' => 'recepcion'],
            ['name' => 'Patio de Maniobras', 'slug' => 'patio-de-maniobras'],
            ['name' => 'Ingreso para Camiones', 'slug' => 'ingreso-para-camiones'],
            ['name' => 'Montacargas', 'slug' => 'montacargas'],
            ['name' => 'Cerco Perimétrico', 'slug' => 'cerco-perimetrico'],
            ['name' => 'Energía Eléctrica', 'slug' => 'energia-electrica'],
            ['name' => 'Agua Potable', 'slug' => 'agua-potable'],
            ['name' => 'Pozo de Agua', 'slug' => 'pozo-de-agua'],
        ];
        

        DB::table('distribucions')->insert($distribuciones);
    }
}
