<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidentPopulationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_resident_population')->insert([
            [
                'result' => '1-2',
                'description' => 'Casi despoblado. Hay muchas casas y negocios vacíos. (Tirada de delincuencia +2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Solitario. Hay algunas casas y negocios vacíos. (Tirada de delincuencia +1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Equilibrado. Las casas y los negocios tienen la población adecuada. (Tirada de delincuencia +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-18',
                'description' => 'Congestionado. Es difícil moverse por el lugar, las casas y los edificios públicos suelen estar llenos. (Tirada de delincuencia –1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '19-20',
                'description' => 'Agobiante. El puesto comercial está repleto de gente y es difícil moverse por él. En los alrededores han aparecido tiendas y barrios de chabolas. (Tirada de delincuencia –2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
