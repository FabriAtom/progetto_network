<?php

use Faker\Generator as Faker;
use App\Post;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 50; $i++) { 
            $post = new Post();
            $post->title = $faker->words( rand(1,3), true );
            $post->content = $faker->paragraphs( rand(5,10), true );
            $post->slug = str_replace(' ','-',$post->title);

            $post->save();
        }
    }
}
