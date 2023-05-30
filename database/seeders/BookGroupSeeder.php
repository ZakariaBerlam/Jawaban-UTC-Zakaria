<?php

namespace Database\Seeders;

use App\Models\BookGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        BookGroup::create([
            "imageurl"=>$faker->imageUrl(640, 480, 'animals', true),
            "groupname"=>"Fantasy for your day"
        ]);

        BookGroup::create([
            "imageurl"=>$faker->imageUrl(640, 480, 'animals', true),
            "groupname"=>"Scifi woosh"
        ]);

        BookGroup::create([
            "imageurl"=>$faker->imageUrl(640, 480, 'animals', true),
            "groupname"=>"Best book to buy"
        ]);

        BookGroup::create([
            "imageurl"=>$faker->imageUrl(640, 480, 'animals', true),
            "groupname"=>"Nice and relaxing book"
        ]);
    }
}


