<?php

namespace Database\Seeders;
use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Post::create([
                'category_id' => $faker->randomElement([1, 2, 22, 23, 24]),
                'sub_category' => $faker->words(3, true),  // Generating a random sub-category name
                'sub_category_id' => $faker->numberBetween(1, 6),
                'title' => $title = $faker->sentence(6),
                'slug' => Str::slug($title),
                'keywords' => implode(', ', $faker->words(5)),
                'thumbnail' => 'postimage.jpg',
                'meta_description' => $faker->sentence(20),
                'description' => $faker->paragraphs(3, true),
                'visibility' => 'public',
                'country' => $faker->country,
                'date' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            ]);
        }
    }
}
