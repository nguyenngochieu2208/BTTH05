<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $authors = [];

        for ($i=0; $i < 15 ; $i++) { 
            $authors[] = [
                'ten_tgia' => $faker->name,
                'hinh_tgia' => $faker->image('public/image/tacgia', 100, 100, null, false),
            ];
        }

        DB::table('tacgia')->insert($authors);
        //
    }
}
