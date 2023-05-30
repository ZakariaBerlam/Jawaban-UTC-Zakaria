<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        for ($i=1; $i <=12 ; $i++) {
            Detail::create([
                "book_id"=>$i,
                "author"=>$faker->name(),
                "postdate"=>$faker->date(),
                "readtime"=>mt_rand(1,3),
                "body"=>$faker->paragraph(),
                "sosmedurl"=>"https://www.youtube.com/watch?v=dQw4w9WgXcQ",
                "videourl"=>"https://www.youtube.com/watch?v=dQw4w9WgXcQ"
            ]);

        }
    }
}
