<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\HomePageIcon;
use App\Models\HomeSlider;
use App\Models\PortfolioProject;
use App\Models\PortfolioProjectWithPage;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\TestimonialStats;

class HomeController extends Controller
{
    public function home()
    {
        $stats = TestimonialStats::all();
        $projects = PortfolioProjectWithPage
            ::selectRaw("
                home_banner as banner,
                home_title as title,
                CONCAT('/portfolio/',id)  as link
            ")
            ->union(PortfolioProject::select('banner', 'title', 'link'))
            ->get();
        $testimonials = Testimonial::limit(3)->get();
        $team = TeamMember::where('fixed_in_about_page', true)->limit(4)->get();
        $services = Service::limit(4)->get();
        $sliders = HomeSlider::all();
        $companyInfo = CompanyInfo::select('home_page_service_image', 'home_page_youtube_link')->first();
        $galleryIcons = HomePageIcon::inRandomOrder()->get();
        return view('home', compact('stats', 'projects', 'testimonials', 'team', 'services', 'sliders', 'companyInfo', 'galleryIcons'));
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
}
