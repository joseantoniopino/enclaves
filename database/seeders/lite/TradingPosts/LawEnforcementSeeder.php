<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LawEnforcementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_law_enforcement')->insert([
            [
                'result' => '1-2',
                'description' => 'Ninguna. Esto podría ser bueno o malo, según a quién se le pregunte. Mientras no haya problemas será positivo, pero si los habitantes deciden linchar a alguien por un delito menor no lo será tanto. (Tirada de delincuencia –8)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Sheriff. Un sheriff y su ayudante mantienen el orden. (Tirada de delincuencia –4)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Pequeña guardia local: Un sheriff, su ayudante y un puñado de voluntarios que forman una guardia simbólica. (Tirada de delincuencia +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-18',
                'description' => 'Bien equipadas. La presencia de las fuerzas del orden es muy habitual. (Tirada de delincuencia +4)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '19-20',
                'description' => 'Presencia abrumadora. En espacios públicos las fuerzas del orden están siempre cerca. (Tirada de delincuencia +8)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
