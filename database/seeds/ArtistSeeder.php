<?php


use App\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $artists = [

            [
                'name' => 'Franco',
                'surname' => 'Rossi',
                'nickname' => 'Picasso',
                'address' => 'via di là',
                'category' => 'Pittore',
                'email' => 'franco@gmail.com',
                'image' => NULL,
                'phone' => '3344565463',
                'cv' => NULL,
            ],
            [
                'name' => 'Giuseppe',
                'surname' => 'Bianchi',
                'nickname' => 'Canova',
                'address' => 'via di qua',
                'category' => 'Scultore',
                'email' => 'giuseppe@gmail.com',
                'image' => NULL,
                'phone' => '3343576536',
                'cv' => NULL,
            ],
            [
                'name' => 'Mattia',
                'surname' => 'Verdi',
                'nickname' => 'Toscani',
                'address' => 'via del tutto eccezzionale',
                'category' => 'Fotografo',
                'email' => 'verdi@gmail.com',
                'image' => NULL,
                'phone' => '3324765463',
                'cv' => NULL,
            ],
        ];
        
        foreach($artists as $artist) {
            $newArtist = new Artist();
            $newArtist->name = $artist['name'];
            $newArtist->surname = $artist['surname'];
            $newArtist->nickname = $artist['nickname'];
            $newArtist->address = $artist['address'];
            $newArtist->category = $artist['category'];
            $newArtist->email = $artist['email'];
            $newArtist->image = $artist['image'];
            $newArtist->phone = $artist['phone'];
            $newArtist->cv = $artist['cv'];

            $newArtist->save();
        }
    }
}