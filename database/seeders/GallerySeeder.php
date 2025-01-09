<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            'id' => 1,
            'name' => 'India',
            'image' => 'images/resources/gallery/gallery-1.jpg',
            'description' => '280 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 2,
            'name' => 'Morocco',
            'image' => 'images/resources/gallery/gallery-2.jpg',
            'description' => '200 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 3,
            'name' => 'Istanbul',
            'image' => 'images/resources/gallery/gallery-3.jpg',
            'description' => '140 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 3,
            'name' => 'London',
            'image' => 'images/resources/gallery/gallery-4.jpg',
            'description' => '350 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 5,
            'name' => 'Cairo',
            'image' => 'images/resources/gallery/gallery-5.jpg',
            'description' => '300 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 6,
            'name' => 'Rome',
            'image' => 'images/resources/gallery/gallery-6.jpg',
            'description' => '450 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 7,
            'name' => 'Caribbean',
            'image' => 'images/resources/gallery/gallery-7.jpg',
            'description' => '170 Tour Packages', 
        ]);

        DB::table('galleries')->insert([
            'id' => 8,
            'name' => 'Greece',
            'image' => 'images/resources/gallery/gallery-8.jpg',
            'description' => '420 Tour Packages', 
        ]);
    }
}
