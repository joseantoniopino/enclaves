<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_age')->insert([
            [
                'result' => '1-3',
                'description' => 'Reciente. El puesto comercial se ha establecido hace menos de un año. (Tirada de afluencia de visitantes –1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '4-8',
                'description' => 'Asentado. El puesto comercial lleva abierto al menos un par de años. (Tirada de afluencia de visitantes +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '9-13',
                'description' => 'Longevo. El puesto comercial se construyó hace décadas. (Tirada de afluencia de visitantes +1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '14-17',
                'description' => 'Viejo. El puesto comercial se construyó hace unos cien años. (Tirada de afluencia de visitantes +2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '18-19',
                'description' => 'Antiguo. El puesto comercial se construyó hace siglos. (Tirada de afluencia de visitantes +3)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '20',
                'description' => 'Desconocido. Nadie sabe cuánto tiempo lleva abierto este puesto comercial. (Tirada de afluencia de visitantes +4)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
