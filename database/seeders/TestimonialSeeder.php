<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'id' => 1,
            'user_name' => 'Ritchard Covey',
            'image' => 'images/resources/team/team-1.jpg',
            'feedback_message' => 'As a solo traveler, safety was paramount for me. I am grateful for the total secured travel measures implemented by this website. It gave me the confidence to explore new destinations worry-free. Can not wait for my next adventure!', 
            'rate' => 5,
        ]);

        DB::table('testimonials')->insert([
            'id' => 2,
            'user_name' => 'Tim Smith',
            'image' => 'images/resources/team/team-2.jpg',
            'feedback_message' => 'Easy booking options made planning our family vacation a joy. The website is user-friendly interface and extensive choices catered to everyones preferences, creating a memorable trip for all ages. Histly recommended for families!', 
            'rate' => 4,
        ]);

        DB::table('testimonials')->insert([
            'id' => 3,
            'user_name' => 'Michael Ford',
            'image' => 'images/resources/team/team-3.jpg',
            'feedback_message' => 'We were blown away by the service provided by this travel website. Our trip to Morocco was like a dream come trues with unique experiences and excellent accommodations. Thank you for making our vacation extraordinary!', 
            'rate' => 4,
        ]);
    
        DB::table('testimonials')->insert([
            'id' => 4,
            'user_name' => 'Mike Anderson',
            'image' => 'images/resources/team/team-4.jpg',
            'feedback_message' => 'Thank you for the fantastic experience!
The personalized itinerary and insider tips helped us discover hidden gems in Japan. Our trip would not have been the same without your expert guidance.
Highly recommend!', 
            'rate' => 5,
        ]);

        

    }
}
