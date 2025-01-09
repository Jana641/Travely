<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            'id' => 1,
            'name' => 'Italy',
            'short_description' => 'Explore the beaches and temples of Bali.',
            'guests' => 100,
            'price' => 1200.00,
            'duration' => '7 Days',
            'rate' => 4.5,
            'long_description' => 'Experience the beauty of Bali with guided tours, cultural activities, and luxurious accommodations.',
            'highlights' => json_encode(['Beach Resort', 'Temple Visits', 'Waterfalls']),
            'image' => 'images/resources/destinations/italy.jpg',
            'departure_date' => '2025-02-15',
            'return_date' => '2025-02-22',
            'departure_time' => '08:00',
            'media_gallery' => json_encode(['images/resources/destinations/venice-romance-italy.jpg', 'images/resources/destinations/roma-pizza-rome.jpg']),
           
        ]);
        
        DB::table('flights')->insert([
            'id' => 2,
            'name' => 'Dubai',
            'short_description' => 'Discover the glamour and modern wonders of Dubai.',
            'guests' => 150,
            'price' => 1800.00,
            'duration' => '5 Days',
            'rate' => 4.7,
            'long_description' => 'Experience the luxurious lifestyle of Dubai with visits to iconic landmarks,shopping malls, and cultural heritage sites .',
            'highlights' => json_encode(['Burj Khalifa', 'Desert Safari', 'Luxury Shopping']),
            'image' => 'images/resources/destinations/dubai.jpg',
            'departure_date' => '2025-03-01',
            'return_date' => '2025-03-06',
            'departure_time' => '10:00',
            'media_gallery' => json_encode(['images/resources/destinations/dubai-desert.jpg', 'images/resources/destinations/doha-flights.jpg']),
           
        ]);

        DB::table('flights')->insert([
            'id' => 3,
            'name' =>'Australia',
            'short_description' => 'Explore the natural wonders and vibrant cities of Australia.',
            'guests' => 120,
            'price' => 2200.00,
            'duration' => '10 Days',
            'rate' => 4.9,
            'long_description' => 'Experience the stunning landscapes,unique wildlife, and iconic landmarks of Australia,including the Great Barrier Reef and Sydney Opera House.',
            'highlights' => json_encode(['Great Barrier Reef', 'Sydney Opera House', 'Kangaroo Encounters']),
            'image' => 'images/resources/destinations/australia.jpg',
            'departure_date' => '2025-04-10',
            'return_date' => '2025-04-20',
            'departure_time' => '09:00',
            'media_gallery' => json_encode(['images/resources/destinations/australia-flights.jpg', 'images/resources/destinations/austria-skiing.jpg']),
        ]);

        DB::table('flights')->insert([
            'id' => 4,
            'name' => 'Istanbul',
            'short_description' => 'Experience the rich history and vibrant culture of Istanbul.',
            'guests' => 100,
            'price' => 1500.00,
            'duration' => '7 Days',
            'rate' => 4.8,
            'long_description' => 'Discover the historic charm of Istanbul with visits to iconic landmarks, bustling bazaars, and a scenic Bosphorus cruise.',
            'highlights' => json_encode(['Hagia Sophia', 'Grand Bazaar', 'Bosphorus Cruise']),
            'image' => 'images/resources/destinations/istanbul-city.jpg',
            'departure_date' => '2025-05-05',
            'return_date' => '2025-05-12',
            'departure_time' => '08:30',
            'media_gallery' => json_encode(['images/resources/destinations/istanbul-cruise-tour.jpg', 'images/resources/destinations/istanbul-food-market-activity.jpg']),
        ]);
        
        DB::table('flights')->insert([
            'id' => 5,
            'name' => 'Maldives',
            'short_description' => 'Relax in the tropical paradise of the Maldives.',
            'guests' => 50,
            'price' => 2500.00,
            'duration' => '5 Days',
            'rate' => 4.9,
            'long_description' => 'Escape to the Maldives and enjoy pristine beaches, crystal-clear waters, and luxurious overwater villas with world-class amenities.',
            'highlights' => json_encode(['Overwater Villas', 'Snorkeling and Diving', 'Private Beaches']),
            'image' => 'images/resources/destinations/maldives.jpg',
            'departure_date' => '2025-06-10',
            'return_date' => '2025-06-15',
            'departure_time' => '10:00',
            'media_gallery' => json_encode(['images/resources/destinations/maldives.jpg', 'images/resources/destinations/maldives-hotel.jpg']),
        ]);
        
        DB::table('flights')->insert([
            'id' => 6,
            'name' => 'New York',
            'short_description' => 'Discover the energy and iconic landmarks of New York City.',
            'guests' => 200,
            'price' => 3000.00,
            'duration' => '7 Days',
            'rate' => 4.7,
            'long_description' => 'Explore the vibrant streets of New York City, visit world-famous landmarks, experience Broadway, and enjoy fine dining and shopping.',
            'highlights' => json_encode(['Statue of Liberty', 'Times Square', 'Central Park']),
            'image' => 'images/resources/destinations/newyork.jpg',
            'departure_date' => '2025-07-01',
            'return_date' => '2025-07-08',
            'departure_time' => '09:00',
            'media_gallery' => json_encode(['images/resources/destinations/newyork-cruise.jpg', 'images/resources/destinations/newyork.jpg']),
        ]);
        
        DB::table('flights')->insert([
            'id' => 7,
            'name' => 'Germany',
            'short_description' => 'Experience the rich history and culture of Germany.',
            'guests' => 150,
            'price' => 2500.00,
            'duration' => '8 Days',
            'rate' => 4.8,
            'long_description' => 'Explore the historical landmarks of Berlin, enjoy scenic bike rides in the countryside, and savor traditional German cuisine.',
            'highlights' => json_encode(['Brandenburg Gate', 'Berlin Wall', 'Bavarian Alps']),
            'image' => 'images/resources/destinations/berlin.jpg',
            'departure_date' => '2025-07-01',
            'return_date' => '2025-07-08',
            'departure_time' => '09:00',
            'media_gallery' => json_encode(['images/resources/destinations/germany-flight.jpg', 'images/resources/destinations/borga-mountain-bike.jpg']),
        ]);

        DB::table('flights')->insert([
            'id' => 8,
            'name' => 'Egypt',
            'short_description' => 'Discover the ancient wonders and vibrant culture of Egypt.',
            'guests' => 200,
            'price' => 2000.00,
            'duration' => '7 Days',
            'rate' => 4.9,
            'long_description' => 'Embark on a journey through the land of the Pharaohs, visiting iconic landmarks like the Great Pyramids of Giza, exploring the Nile River, and experiencing traditional Egyptian cuisine.',
            'highlights' => json_encode(['Great Pyramids', 'Nile River Cruise', 'Khan el-Khalili Bazaar']),
            'image' => 'images/resources/destinations/egypt.jpg',
            'departure_date' => '2025-07-15',
            'return_date' => '2025-07-22',
            'departure_time' => '08:00',
            'media_gallery' => json_encode(['images/resources/destinations/giza.jpg', 'images/resources/destinations/luxor-temple.jpg']),
        ]);
        DB::table('flights')->insert([
            'id' => 9,
            'name' => 'Morocco',
            'short_description' => 'Experience the captivating charm and vibrant markets of Morocco.',
            'guests' => 150,
            'price' => 1800.00,
            'duration' => '6 Days',
            'rate' => 4.7,
            'long_description' => 'Immerse yourself in the culture of Morocco by exploring its stunning landscapes, historic medinas, and unique culinary delights. Visit iconic landmarks like Chefchaouen, Marrakech, and the Sahara Desert.',
            'highlights' => json_encode(['Chefchaouen', 'Marrakech Souks', 'Sahara Desert Adventure']),
            'image' => 'images/resources/destinations/morocco.jpg',
            'departure_date' => '2025-08-01',
            'return_date' => '2025-08-07',
            'departure_time' => '09:30',
            'media_gallery' => json_encode(['images/resources/destinations/rainy-chefchaouen-morocco.jpg', 'images/resources/destinations/morocco-city.jpg']),
        ]);
        
        DB::table('flights')->insert([
            'id' => 10,
            'name' => 'United Kingdom',
            'short_description' => 'Explore the historic landmarks and vibrant culture of the UK.',
            'guests' => 150,
            'price' => 2500.00,
            'duration' => '7 Days',
            'rate' => 4.8,
            'long_description' => 'Discover the rich history, stunning landscapes, and cultural attractions of the United Kingdom. Visit iconic landmarks such as Buckingham Palace, Stonehenge, and the Lake District. Experience traditional British cuisine and bustling city life.',
            'highlights' => json_encode(['Buckingham Palace', 'Stonehenge', 'Lake District']),
            'image' => 'images/resources/destinations/uk.jpg',
            'departure_date' => '2025-08-01',
            'return_date' => '2025-08-08',
            'departure_time' => '09:30',
            'media_gallery' => json_encode(['images/resources/destinations/london.jpg', 'images/resources/destinations/uk-countryside.jpg']),
        ]);
        
    }
}
