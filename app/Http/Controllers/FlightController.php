<?php

namespace App\Http\Controllers;
use App\Models\Flight; 
use App\Models\Testimonial;
use Illuminate\Support\Str; 

use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){
        $flights = Flight::all();
        $testimonials = Testimonial::all();
    
        return view('home', compact('flights', 'testimonials')); // ✅ Correct way
    }
    

//admin role
public function create(){

}

//admin role
public function store(Request $request){
   $flight_name = $request->input('name'); 
   $flight_short_description = $request->input('short_description'); 
   $flight_guests = $request->input('guests'); 
   $flight_price = $request->input('price'); 
   $flight_duration = $request->input('duration');
   $flight_rate = $request->input('rate');
   $flight_long_description = $request->input('long_description');
   $flight_highlights = $request->input('highlights');
   $flight_image = $request->input('image');
   $flight_departure_date = $request->input('departure_date');
   $flight_return_date= $request->input('return_date');
   $flight_departure_time= $request->input('departure_time');
   $flight_media_gallery= $request->input('media_gallery');

    if ($existingFlight) {
    // return redirect()->route('home')->with('info', 'Flight is already in the cart.');
}

Flight::create([
    'flight_name' => $flight_name,
    'flight_short_description' => $flight_short_description,
    'flight_guests' => $flight_guests,
    'flight_price' => $flight_price,
    'flight_duration' => $flight_duration,
    'flight_rate' => $flight_rate,
    'flight_long_description' => $flight_long_description,
    'flight_highlights' => $flight_highlights,
    'flight_image' => $flight_image,
    'flight_departure_date' => $flight_departure_date,
    'flight_return_date' => $flight_return_date,
    'flight_departure_time' => $flight_departure_time,
    'flight_media_gallery' => $flight_media_gallery,

]);

}

public function show(string $id){
 $flight = Flight::find($id);
//  @dd($id);

//  @dd($flight);
    return view('flightPage')->with('flight', $flight);

}
//admin role
public function edit(string $id){

}

//admin role
public function update(Request $request , string $id){
    $flight = Flight::find($id);
    $flight->name = $request->input('name'); 
    $flight->short_description = $request->input('short_description'); 
    $flight->guests = $request->input('guests'); 
    $flight->price = $request->input('price'); 
    $flight->duration = $request->input('duration');
    $flight->rate = $request->input('rate');
    $flight->long_description = $request->input('long_description');
    $flight->highlights = $request->input('highlights');
    $flight->image = $request->input('image');
    $flight->departure_date = $request->input('departure_date');
    $flight->return_date= $request->input('return_date');
    $flight->departure_time= $request->input('departure_time');
    $flight->media_gallery= $request->input('media_gallery');

    $flight->save();
    //  return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}

//admin role
public function destroy(string $id){
$flights = Flight::find($id);
$flights->Delete();
// return redirect()->route('products.index');
}

}
