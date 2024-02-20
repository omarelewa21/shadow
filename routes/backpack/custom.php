<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('company-info', 'CompanyInfoCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('team-member', 'TeamMemberCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('testimonial', 'TestimonialCrudController');
    Route::crud('testimonial-stats', 'TestimonialStatsCrudController');
    Route::crud('portfolio-project', 'PortfolioProjectCrudController');
    Route::crud('about-us', 'AboutUsCrudController');
    Route::crud('home-slider', 'HomeSliderCrudController');
    Route::crud('home-page-icon', 'HomePageIconCrudController');
    Route::crud('portfolio-project-with-page', 'PortfolioProjectWithPageCrudController');
    Route::crud('portfolio-project-images', 'PortfolioProjectImagesCrudController');
}); // this should be the absolute last line of this file