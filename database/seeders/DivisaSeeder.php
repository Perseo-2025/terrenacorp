<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisaSeeder extends Seeder
{
    public function run()
    {
        DB::table('divisas')->updateOrInsert(['tipo' => '(Soles)S/.'], ['created_at' => now(), 'updated_at' => now()]);
        DB::table('divisas')->updateOrInsert(['tipo' => '(Dólares)$'], ['created_at' => now(), 'updated_at' => now()]);

        $this->command->info('✔ Divisas insertadas correctamente.');
    }
}
