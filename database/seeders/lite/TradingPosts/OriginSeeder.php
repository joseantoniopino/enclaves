<?php

namespace Database\Seeders\lite\TradingPosts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tp_origin')->insert([
            [
                'result' => '1',
                'description' => 'Accidental. El puesto comercial se creó por accidente, por ejemplo, después de que se averiase o perdiese una caravana. Las medidas que se tomaron para remediar el accidente acabaron dando lugar al puesto comercial.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '2',
                'description' => 'Empresa comercial. Un emprendedor adinerado decidió fundar un puesto comercial.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '3',
                'description' => 'Cruce de caminos. El puesto comercial está en la intersección de varias de las principales rutas de comercio.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '4',
                'description' => 'Puesto militar. El puesto comercial se construyó en las ruinas de una antigua fortaleza o torre de guardia. Estas estructuras llevaban mucho tiempo abandonadas o los habitantes de la zona decidieron reutilizarlas.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '5',
                'description' => 'Tierra de nadie. El puesto comercial se ha establecido en una zona neutral, donde los ejércitos pueden comprar mercancías sin adentrarse en terreno enemigo.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '6',
                'description' => 'Nativo. Alguien de la zona fundó el puesto comercial tras considerar que el comercio con la gente que pasaba por la zona tenía potencial.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '7',
                'description' => 'Parada nocturna. Originalmente el puesto comercial era una casa de gran tamaño que ofrecía estancias de una noche a viajeros cansados. El lugar pronto evolucionó como respuesta a la creciente demanda de alojamiento.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'result' => '8',
                'description' => 'Experto en naturaleza. El puesto comercial fue fundado por un trampero, un cazador o un guía, que estableció un campamento para ayudar a quienes viajasen por la zona.',
                'has_options' => false,
                'has_modifiers' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
