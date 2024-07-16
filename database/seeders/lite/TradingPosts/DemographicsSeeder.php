<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemographicsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_demographics')->insert([
            [
                'result' => '1-5',
                'description' => 'Solo una. 100 % de una misma raza.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '6-10',
                'description' => 'Solo dos. 60 % de la raza principal y 40 % de la raza secundaria.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '10-14',
                'description' => 'Distribución normal. 50 % de la raza principal, 25 % de la raza secundaria, 15 % de la raza terciaria y 10 % de otras razas.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-17',
                'description' => 'Distribución amplia. 20 % de la raza principal. Las demás están bastante bien representadas.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '18-19',
                'description' => 'Contraste. 80 % de la raza principal y 20 % de la raza secundaria.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '20',
                'description' => 'Cambiante. No hay una distribución fija ni predomina ninguna raza.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
