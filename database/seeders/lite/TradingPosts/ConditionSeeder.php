<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_condition')->insert([
            [
                'result' => '1-2',
                'description' => 'Destartalado. Parece que algunos de los edificios están a punto de venirse abajo y no hay ninguna carretera propiamente dicha, solo zonas que el tránsito ha convertido en caminos. (Tirada de riqueza de la población –6)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares. (Tirada de riqueza de la población –3)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla. (Tirada de riqueza de la población +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-18',
                'description' => 'Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos. (Tirada de riqueza de la población +3)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '19-20',
                'description' => 'Inmaculado. Las tiendas y casas están impecables, adornadas con un gusto exquisito, y los caminos son de piedras regulares y lisas. (Tirada de riqueza de la población +6)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
