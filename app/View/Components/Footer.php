<?php

namespace App\View\Components;

use App\Models\CompanyInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public CompanyInfo $companyInfo;

    public function __construct()
    {
        $this->companyInfo = CompanyInfo::first();
    }

    public function render(): View
    {
        return view('components.footer');
    }
}
