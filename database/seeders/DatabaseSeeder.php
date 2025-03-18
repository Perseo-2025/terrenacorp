<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(TipoInmuebleSeeder::class);
        $this->call(DivisaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(SubTipoInmuebleSeeder::class);
        $this->call(OperacionSeeder::class);
        $this->call(LimaCallaoSeeder::class); 
    }
}
