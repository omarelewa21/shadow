<?php

namespace App\View\Components;

use App\Models\AboutUs;
use App\Models\CompanyInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public CompanyInfo $companyInfo;
    public string $aboutUs;

    public function __construct()
    {
        $this->companyInfo = CompanyInfo::first();
        $this->aboutUs = AboutUs::first()->about_us_description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
