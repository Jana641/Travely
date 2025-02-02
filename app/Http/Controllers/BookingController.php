<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Flight; 
use Illuminate\Support\Str; 

class BookingController extends Controller
{
  public function index(){
    $bookings = Booking::all();
    return view('pages.bookings', ['bookings' => $bookings]);

  }  
  public function create(){

  }
  public function store(Request $request){

    

    $additional_guide_amount = 0;
    $internet_amount = 0 ;
    $photography_amount = 0;
    $flight_id = $request->input('flight_id'); 
    $flight_id = $request->input('flight_id');
    $user_id = (string) Auth::id();
    // dd($user_id);
    $flight = Flight::find($flight_id);
    
    $adult_ticket = (int) $request->input('adult_quantity', 0); 
    $kid_ticket = (int) $request->input('kid_quantity', 0); 
    $child_ticket = (int) $request->input('child_quantity', 0);
    $adult_ticket_price = 0 ;
    $kid_ticket_price = 0 ;
    $child_ticket_price = 0;

    $cb_1 = $request->input('cb-1'); 
    $cb_2 = $request->input('cb-2'); 
    $cb_3 = $request->input('cb-3'); 

    // dd($flight, $flight->price);
    if ($request->has('cb-1')) {
        $additional_guide_amount = (int) $request->input('additional_guide_price', 0);
    }
    if ($request->has('cb-2')) {
        $internet_amount = (int) $request->input('internet_price', 0);
    }
    if ($request->has('cb-3')) {
        $photography_amount = (int) $request->input('photography_price', 0);
    }

    // dd($additional_guide_amount, $internet_amount, $photography_amount);


    if ($adult_ticket > 0) {
        $adult_ticket_price = $adult_ticket * $flight->price;
    }
    if ($kid_ticket > 0) {
        $kid_ticket_price = $kid_ticket * (0.5) * $flight->price;
    }
    if ($child_ticket > 0) {
        $child_ticket_price = $child_ticket * (1 / 3) * $flight->price;
    }

    // dd($adult_ticket, $kid_ticket, $child_ticket);

    $total_price = $additional_guide_amount + $internet_amount + $photography_amount +  $adult_ticket_price + $kid_ticket_price +  $child_ticket_price;
    //    dd($user_id) ;
    try {
        Booking::create([
            'user_id' => $user_id,
            'flight_id' => $flight_id,
            'adult_ticket' => $adult_ticket,
            'kid_ticket' => $kid_ticket,
            'child_ticket' => $child_ticket,
            'additional_guide' => $additional_guide_amount,
            'internet' => $internet_amount,
            'photograph' => $photography_amount,
            'total_price' => $total_price,
        ]);
    } catch (\Exception $e) {
        // Log the exception or handle it as needed
        dd($e->getMessage());
    }
    $bookings = Booking::all();

    $bookings = Booking::with('flight')->get();
    return view('pages.bookings', compact('bookings'));
  }

  public function show(string $id){

  }

  public function edit(string $id){

  }
  public function update(Request $request , string $id){

  }

  public function destroy($id)
  {
      $booking = Booking::find($id);
  
      if ($booking) {
          $booking->delete();
      } else {
          return redirect()->route('bookings.index')->with('error', 'Booking not found.');
      }
        $bookings = Booking::all();
  
      return view('pages.bookings', ['bookings' => $bookings]);
  }
  
}
