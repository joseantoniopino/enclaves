<?php

namespace Database\Seeders\lite;

use Database\Seeders\lite\TradingPosts\AgeSeeder;
use Database\Seeders\lite\TradingPosts\ConditionSeeder;
use Database\Seeders\lite\TradingPosts\CrimeSeeder;
use Database\Seeders\lite\TradingPosts\DemographicsSeeder;
use Database\Seeders\lite\TradingPosts\DispositionSeeder;
use Database\Seeders\lite\TradingPosts\EnvironmentSeeder;
use Database\Seeders\lite\TradingPosts\LawEnforcementSeeder;
use Database\Seeders\lite\TradingPosts\LeadershipSeeder;
use Database\Seeders\lite\TradingPosts\OriginSeeder;
use Database\Seeders\lite\TradingPosts\PopulationWealthSeeder;
use Database\Seeders\lite\TradingPosts\ResidentPopulationSeeder;
use Database\Seeders\lite\TradingPosts\SizeSeeder;
use Database\Seeders\lite\TradingPosts\SpecialtySeeder;
use Database\Seeders\lite\TradingPosts\VisitorTrafficSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            OriginSeeder::class,
            SpecialtySeeder::class,
            AgeSeeder::class,
            ConditionSeeder::class,
            VisitorTrafficSeeder::class,
            SizeSeeder::class,
            EnvironmentSeeder::class,
            ResidentPopulationSeeder::class,
            DemographicsSeeder::class,
            DispositionSeeder::class,
            LawEnforcementSeeder::class,
            LeadershipSeeder::class,
            PopulationWealthSeeder::class,
            CrimeSeeder::class,
        ]);
    }
}
