<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $posts = [];

        for ($i=0; $i < 100; $i++) { 
            $posts[]= [
                'tieude' => $faker->sentence(5),
                'ten_bhat' => $faker->word,
                'ma_tloai' => $faker->numberBetween(1, 20),
                'tomtat' => $faker->paragraph(2),
                'noidung' => $faker->text,
                'ma_tgia' => $faker->numberBetween(1, 15),
                'ngayviet' => $faker->dateTime,
                'hinhanh' => $faker->image('public/image/tacgia', 100, 100, null, false),
            ];
        }

        DB::table('baiviet')->insert($posts);
    }
}
