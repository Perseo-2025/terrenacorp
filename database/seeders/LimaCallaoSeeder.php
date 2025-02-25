<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LimaCallaoSeeder extends Seeder
{
    public function run()
    {
        // ✅ Insertar Departamento Lima
        $limaDepartamentoId = DB::table('departamentos')->insertGetId([
            'nombre' => 'Lima',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ✅ Insertar Departamento Callao
        $callaoDepartamentoId = DB::table('departamentos')->insertGetId([
            'nombre' => 'Callao',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ================== 📍 Provincias de Lima ==================
        $provinciaLimaMetropolitanaId = DB::table('provincias')->insertGetId([
            'nombre' => 'Lima Metropolitana',
            'departamento_id' => $limaDepartamentoId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ================== 📍 Provincias de Callao ==================
        $provinciaCallaoId = DB::table('provincias')->insertGetId([
            'nombre' => 'Callao',
            'departamento_id' => $callaoDepartamentoId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ================== 📍 Distritos de Lima Metropolitana ==================
        $distritosLima = [
            'Ancón', 'Ate', 'Barranco', 'Breña', 'Carabayllo', 'Chaclacayo',
            'Chorrillos', 'Cieneguilla', 'Comas', 'El Agustino', 'Independencia',
            'Jesús María', 'La Molina', 'La Victoria', 'Lince', 'Los Olivos',
            'Lurigancho', 'Lurín', 'Magdalena del Mar', 'Miraflores', 'Pachacámac',
            'Pucusana', 'Pueblo Libre', 'Puente Piedra', 'Punta Hermosa', 'Punta Negra',
            'Rímac', 'San Bartolo', 'San Borja', 'San Isidro', 'San Juan de Lurigancho',
            'San Juan de Miraflores', 'San Luis', 'San Martín de Porres', 'San Miguel',
            'Santa Anita', 'Santa María del Mar', 'Santa Rosa', 'Santiago de Surco',
            'Surquillo', 'Villa El Salvador', 'Villa María del Triunfo'
        ];

        foreach ($distritosLima as $distrito) {
            DB::table('distritos')->insert([
                'nombre' => $distrito,
                'provincia_id' => $provinciaLimaMetropolitanaId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // ================== 📍 Distritos de Callao ==================
        $distritosCallao = [
            'Callao', 'Bellavista', 'Carmen de la Legua Reynoso', 'La Perla',
            'La Punta', 'Ventanilla', 'Mi Perú'
        ];

        foreach ($distritosCallao as $distrito) {
            DB::table('distritos')->insert([
                'nombre' => $distrito,
                'provincia_id' => $provinciaCallaoId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
