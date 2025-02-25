<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array de divisas
        $divisas = [
            ['tipo' => '(Soles)S/.', 'created_at' => now(), 'updated_at' => now()],
            ['tipo' => '(Dólares)$', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserción masiva en la tabla 'divisas'
        DB::table('divisas')->insert($divisas);
    }
}
