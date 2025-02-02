<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FlightController::class, 'index']);
Auth::routes();

Route::get('/home', [FlightController::class, 'index']);
Route::get('/flightPage/{id}', [App\Http\Controllers\FlightController::class, 'show']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('bookings', BookingController::class);

// Route::middleware(['auth', 'check.auth'])->group(function () {
//   // Admin routes
//   Route::resource('bookings', BookingController::class);
// });

