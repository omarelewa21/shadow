<?php

namespace App\View\Components;

use App\Models\CompanyInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    public array $appName;
    public CompanyInfo $companyInfo;

    public function __construct(public string $title)
    {
        $this->companyInfo = CompanyInfo::first();
        $this->appName = str_split($this->companyInfo->company_name);
    }

    public function render(): View|Closure|string
    {
        return view('components.base');
    }
}
