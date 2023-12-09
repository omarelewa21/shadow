<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\PortfolioProject;
use App\Models\TeamMember;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        $projects = PortfolioProject::limit(5)->get();
        $teamMembers = TeamMember::where('fixed_in_about_page', 1)->limit(3)->get();
        return view('about-us', compact('aboutUs', 'projects', 'teamMembers'));
    }
}
