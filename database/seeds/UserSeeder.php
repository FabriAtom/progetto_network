<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Hash;
use App\Category;
use Faker\Generator as Faker;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $category = Category::all()->pluck('id');


        // foreach($artists as $artist) {
        //     $newArtist = new Artist();
        //     $newArtist->name = $artist['name'];
        //     $newArtist->surname = $artist['surname'];
        //     $newArtist->nickname = $artist['nickname'];
        //     $newArtist->address = $artist['address'];
        //     $newArtist->category = $artist['category'];
        //     $newArtist->email = $artist['email'];
        //     $newArtist->image = $artist['image'];
        //     $newArtist->phone = $artist['phone'];
        //     $newArtist->cv = $artist['cv'];
        //     $newArtist->save();
            

        for ($i = 0; $i < 50; $i++) {
            $new_artist = new User();
            $new_artist->name = $faker->firstName();
            $new_artist->surname = $faker->unique()->lastName();
            $new_artist->address = $faker->address();
            $new_artist->email = $new_artist->name . $new_artist->surname . rand(0, 50) . '@gmail.com';
            $new_artist->password = Hash::make('KGPARTNERS');
            $new_artist->phone = $faker->phoneNumber();

            $new_artist->save();
        }
    }
}