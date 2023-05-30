<?php

namespace Database\Seeders;

use App\Models\CategoryTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryTime::create([
            "lama"=>"Long Read"
        ]);

        CategoryTime::create([
            "lama"=>"Medium Read"
        ]);

        CategoryTime::create([
            "lama"=>"Quick Read"
        ]);
    }
}
