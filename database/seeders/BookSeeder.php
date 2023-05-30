<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create("id_ID");
        Book::create([
            "book_group_id"=>mt_rand(1,4),
            "bookname"=>$faker->sentence(),
            "bookdescription"=>$faker->sentence(),
            "highlight"=>1,
            "waktuupdate"=>$faker->date(),
            "imageurl"=>$faker->imageUrl(640, 480, 'animals', true)
        ]);

        for ($i=0; $i < 11; $i++) {
            Book::create([
                "book_group_id"=>mt_rand(1,4),
                "bookname"=>$faker->sentence(),
                "bookdescription"=>$faker->sentence(),
                "highlight"=>0,
                "waktuupdate"=>$faker->date(),
                "imageurl"=>$faker->imageUrl(640, 480, 'animals', true)
            ]);
        }
    }
}
