<?php

namespace App\View\Components;

use App\Models\CompanyInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class Logo extends Component
{
    public string $logoPath;

    public function __construct()
    {
        $this->logoPath = sprintf("/storage/%s", CompanyInfo::first()->company_logo) ;
    }

    public function render(): View|Closure|string
    {
        return view('components.logo');
    }
}
