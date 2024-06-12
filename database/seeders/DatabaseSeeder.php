<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Adress;
use App\Models\OpeningTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CantonsTableSeeder::class,
            TraductionsTableSeeder::class
        ]);
        
        User::factory(10)->create();
        Adress::factory(10)->create();
        OpeningTime::factory(10)->create();


    }
}
