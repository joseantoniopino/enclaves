<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadershipSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_leadership')->insert([
            [
                'result' => '1',
                'description' => 'Sin líder. El puesto comercial funciona sin un líder. Esta podría ser la causa de disputas sin resolver.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '2-4',
                'description' => 'Hereditario. Un líder no electo dirige el lugar gracias a su linaje.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '5-7',
                'description' => 'Monarca mercante. El mercader más rico lidera el puesto comercial.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '8-10',
                'description' => 'Organización criminal o de los bajos fondos. Un criminal o grupo de criminales controla el puesto comercial, ya sea abiertamente o en secreto.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '11-13',
                'description' => 'Oligarquía. Unos pocos individuos ejercen control sobre el puesto comercial de forma colectiva. (Lanza 1d4): 1: Mercaderes (plutocracia) 2: Magos (magocracia) 3: Sacerdotes (teocracia) 4: Otro grupo reducido',
                'has_options' => true,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '14-16',
                'description' => 'Consejo local. Los miembros más eminentes de la comunidad han sido elegidos para liderar colectivamente el puesto comercial.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '17-19',
                'description' => 'Líder único electo. Los habitantes han votado democráticamente al líder actual.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '20',
                'description' => 'Comuna anarcosindicalista. Los residentes se turnan cada semana para liderar el enclave.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
