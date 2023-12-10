<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\TestimonialStats;

class HomeController extends Controller
{
    public function home()
    {
        $stats = TestimonialStats::all();
        $projects = PortfolioProject::all();
        $testimonials = Testimonial::limit(3)->get();
        $team = TeamMember::where('fixed_in_about_page', true)->limit(4)->get();
        $services = Service::limit(4)->get();
        return view('home', compact('stats', 'projects', 'testimonials', 'team', 'services'));
    }
}
