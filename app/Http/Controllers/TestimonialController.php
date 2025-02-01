<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        return view('testimonials', compact('testimonials'));
    }
    

}
