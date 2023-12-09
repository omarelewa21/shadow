<?php

namespace App\Http\Controllers;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = \App\Models\Testimonial::all();
        $testimonialStats = \App\Models\TestimonialStats::all();
        return view('testimonials', compact('testimonials', 'testimonialStats'));
    }
}
