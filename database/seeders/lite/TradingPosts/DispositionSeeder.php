<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispositionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_disposition')->insert([
            [
                'result' => '1-2',
                'description' => 'Hostil. Los habitantes se muestran poco amigables y lo más probable es que hagan sentirse incómodos a los forasteros, ya sea mostrándose fríos, pasivo-agresivos o incluso violentos.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Antipática. A los habitantes no les importan mucho los visitantes y los miran con desprecio, miedo o sospecha.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Neutral. Los habitantes son distantes o incluso cerrados, pero pueden ser simpáticos si se les llega a conocer.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-18',
                'description' => 'Amistosa. Los habitantes suelen ser amistosos, acogedores y poco propensos a ofenderse.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '19-20',
                'description' => 'Abierta. Los habitantes disfrutan de la presencia de los visitantes y esto se refleja en su cultura. Todo el mundo es bienvenido.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
