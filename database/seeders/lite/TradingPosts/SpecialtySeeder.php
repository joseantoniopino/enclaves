<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_specialty')->insert([
            [
                'result' => '1',
                'description' => 'Métodos de envío atípicos. A este puesto comercial se lo conoce por su forma única y efectiva de transportar mercancías.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '2',
                'description' => 'Comida y bebida. Al puesto comercial se lo conoce por [d6]: 1-3: Una comida excepcional 4-6: Gran surtido de bebidas variadas y de buena calidad',
                'has_options' => true,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3',
                'description' => 'Hospitalidad. La posada principal es de gran calidad y ofrece un servicio excelente, habitaciones cómodas y buena comida. (Si haces una tirada para saber la calidad de la posada utilizando la tabla de Calidad del paso 3, ignora los resultados que le atribuirían la calidad «pobre»).',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '4',
                'description' => 'Información. Este puesto comercial es famoso por ser una buena fuente de información. Aunque las personas aquí no lo saben todo, existen muchas posibilidades de encontrarse con rumores verídicos, sabiduría tradicional, noticias o algún detalle interesante.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '5',
                'description' => 'Contactos. El puesto comercial es famoso por contar con gente que sabe encontrar cosas. Si no tienen (o no saben) lo que estás buscando, te pueden recomendar a alguien.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '6',
                'description' => 'Contratistas sin escrúpulos. Este puesto comercial es famoso por tener gente que puede hacer cualquier cosa si hay suficiente dinero de por medio. Lugar gratuito (servicio): Mercenarios [tira 1d10]: 1: Brutos y matones 2: Agentes clandestinos 3: Arqueros y honderos 4: Escribas y administrativos 5: Guías y rastreadores 6: Caravaneros y monturas 7: Académicos arcanos 8: Mercenarios mágicos 9: Orientación sacerdotal 10: Manos de la divinidad',
                'has_options' => true,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
