<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = factory::create();
        $i;

        for ($i = 1; $i <= 10; $i++){
            $posts [] = [
                'title' => $faker->title,
                'excerpt' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                'image' => $faker->imageUrl($width =550, $height = 400),
                'content' => $faker->paragraphs($nb = 5, $asText = true),
                'author_id' => mt_rand(1,10)
                
            ];
        }

        DB::table("posts")->insert($posts);
    }
}
