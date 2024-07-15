<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnvironmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_environment')->insert([
            [
                'result' => '1',
                'description' => 'Costa. El puesto comercial está cerca de una gran masa de agua, como un lago o el océano.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '2',
                'description' => 'Bosque. El puesto comercial se encuentra entre los árboles.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3',
                'description' => 'Montañas. El puesto comercial está en un paso rocoso o en una cumbre elevada.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '4',
                'description' => 'Llanuras. El puesto comercial está en medio del campo.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '5',
                'description' => 'Río. El puesto comercial se halla cerca de un arroyo o algún curso de agua con un flujo constante.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '6',
                'description' => 'Ciénaga. El puesto comercial está en una gran zona de aguas estancadas o cerca de ella.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7',
                'description' => 'Bajo tierra. El puesto comercial se encuentra dentro de una gran red de cuevas.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '8',
                'description' => 'Valle. El puesto comercial se encuentra dentro o en el borde de una zona hundida en comparación con el paisaje que lo rodea.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '9',
                'description' => 'Tundra. El puesto comercial se encuentra en un entorno muy frío.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '10',
                'description' => 'Desierto. El puesto comercial está en un entorno árido y seco, probablemente cubierto de dunas.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
