<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopulationWealthSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_population_wealth')->insert([
            [
                'result' => '1-2',
                'description' => 'Sin recursos. La mayoría de la población carece de los recursos más básicos para sobrevivir. (Tirada de delincuencia –4) (Tirada de calidad –2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Empobrecida. Aproximadamente la mitad de la población tiene dificultades para sobrevivir. (Tirada de delincuencia –2) (Tirada de calidad –1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Media. La mayoría de la población tiene lo suficiente para vivir una vida modesta. (Tirada de delincuencia +0) (Tirada de calidad +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-17',
                'description' => 'Próspera. La mayoría de población tiene lo necesario para vivir una buena vida y entre ellos una cantidad no desdeñable vive cómodamente. (Tirada de delincuencia –1) (Tirada de calidad +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '18-19',
                'description' => 'Pudiente. Casi todos los habitantes viven cómodamente, unos cuantos consiguen vivir bien y algunos tienen vidas muy prósperas. (Tirada de delincuencia –2) (Tirada de calidad +2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '20',
                'description' => 'Acaudalada. Casi todos los habitantes viven cómodamente y una porción significante vive rodeada de lujo. (Tirada de delincuencia –4) (Tirada de calidad +3)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
