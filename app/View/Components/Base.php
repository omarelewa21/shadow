<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    public array $appName;

    public function __construct(public string $title)
    {
        $this->appName = str_split(config('app.name'));
    }

    public function render(): View|Closure|string
    {
        return view('components.base');
    }
}
