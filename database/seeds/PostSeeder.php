<?php

use App\Category;
use App\Post;
use App\User;
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

        $users = User::all()->pluck('id');
        $categoryIds = Category::All()->pluck('id');
        $userIds = User::All()->pluck('id');

        foreach($users as $user_id) {

            for ($i=0; $i < 30; $i++) { 
                
                $new_post = new Post();
                $new_post->user_id = $user_id;
                $new_post->title = $faker->words( rand(1,3), true );
                $new_post->content = $faker->paragraphs( rand(1,2), true );

                // $new_post->image = $faker->imageUrl(640, 480, 'animals', true);

                $new_post->slug = Str::slug($new_post->title);
                $new_post->category_id = $faker->randomElement($categoryIds);
                $new_post->user_id = $faker->randomElement($userIds);

                $new_post->save();
            }
        }




        // recupero categorie dal database
        // metodo pulck genera array vuoto, recupera colonna id e pusha in array
        // $user = User::All()->pluck('id');

        // for ($i=0; $i < 50; $i++) { 
        //     $post = new Post();
        //     $post->title = $faker->words( rand(1,3), true );
        //     $post->image = $faker->image();
        //     $post->content = $faker->paragraphs( rand(1,2), true );
        //     $post->slug = Str::slug($post->title);
        //     $post->category_id = $faker->randomElement($categoryIds);
        //     // $post->user_id = $user;
        //     $post->user_id = $faker->randomElement($userIds);



        //     $post->save();
        // }

        // $users = User::all();

        // // cicliamo i profili 
        // foreach($user as $users) {
        // // per ogni profilo generiamo dei post(opere) random
        //     $random = rand(1,5);

        //     for ($i=0; $i < $random; $i++) {
                
                
        //         $post = new Post();
        //         $post->user_id = $user->id;
        //         $post->title = $faker->randomTitle();
        //         $post->image = $faker->image(null, 640, 480);
        //         $post->content = $faker->paragraphs( rand(1,2), true );
        //         $post->slug = Str::slug($post->title);

        //         $post->save();
        //     }

        // }
    }
}
