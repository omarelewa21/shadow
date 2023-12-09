<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Header extends Component
{
    public Collection $services;

    public function __construct()
    {
        $this->services = \App\Models\Service::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
