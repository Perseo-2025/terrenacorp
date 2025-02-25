<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use LimaCallaoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        $this->call(TipoInmuebleSeeder::class);
        $this->call(DivisaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(SubTipoInmuebleSeeder::class);
        $this->call(OperacionSeeder::class);

        $this->call(LimaCallaoSeeder    ::class);
        
    }
}
