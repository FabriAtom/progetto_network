<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // recupero categorie dal database
        // metodo pulck genera array vuoto, recupera colonna id e pusha in array
        $categoryIds = Category::All()->pluck('id');

        for ($i=0; $i < 50; $i++) { 
            $post = new Post();
            $post->title = $faker->words( rand(1,3), true );
            $post->content = $faker->paragraphs( rand(2,5), true );
            $post->slug = Str::slug($post->title);
            $post->category_id = $faker->randomElement($categoryIds);

            $post->save();
        }
    }
}
