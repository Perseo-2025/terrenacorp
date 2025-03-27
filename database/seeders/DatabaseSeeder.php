<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
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
        $this->call(DistribucionSeeder::class);
        $this->call(DistribucionTipoInmuebleSeeder::class);
        $this->call(CaracteristicaSeeder::class);
        $this->call(CaracteristicaTipoInmuebleSeeder::class);
    }
}
