<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categories = [];

        for ($i=0; $i < 20; $i++) { 
            $categories[] = [
                'ten_tloai' => $faker->word,
            ];
        }

        DB::table('theloai')->insert($categories);
    }
}
