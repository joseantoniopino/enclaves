<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrimeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_crime')->insert([
            [
                'result' => '1-2',
                'description' => 'Constante. Las calles están llenas de delincuentes y una bolsa de monedas a la vista es casi con toda seguridad una bolsa de monedas perdida. (Tirada de encuentro urbano +4)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3-6',
                'description' => 'Habitual. La mayoría de la población está acostumbrada a oír hablar de algún suceso prácticamente todos los días. Todo el mundo conoce a alguien que ha sido víctima de un delito. (Tirada de encuentro urbano +3)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7-14',
                'description' => 'Media. De vez en cuando ocurre algún robo o algún suceso violento. Lo mejor es permanecer alerta. (Tirada de encuentro urbano +2)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '15-18',
                'description' => 'Infrecuente. Algunas personas han sido víctimas de un carterista o han oído hablar de algún robo, pero son sucesos que, cuando ocurren, llaman la atención. (Tirada de encuentro urbano +1)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '19-20',
                'description' => 'Escasa. La mayoría de habitantes del puesto comercial no han sido víctimas de ningún delito y conocen a muy poca gente que lo sea. (Tirada de encuentro urbano +0)',
                'has_options' => false,
                'has_modifiers' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
