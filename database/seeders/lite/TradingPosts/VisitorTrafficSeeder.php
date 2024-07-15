<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorTrafficSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_visitor_traffic')->insert([
            [
                'result' => '1-2',
                'description' => 'Desierto. No parece que nadie visite este lugar. (Tirada de tamaño +0) (Tirada de delincuencia +2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Grupos. Los visitantes son la excepción, pero puede que haya algunos en las cercanías. (Tirada de tamaño +1) (Tirada de delincuencia +1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días. (Tirada de tamaño +2) (Tirada de delincuencia +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-18',
                'description' => 'Multitudes. Se ven muchas caras nuevas con frecuencia. (Tirada de tamaño +3) (Tirada de delincuencia –1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '19-20',
                'description' => 'Masas. Por todas partes hay gente nueva yendo y viniendo a todas horas. (Tirada de tamaño +4) (Tirada de delincuencia –2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
