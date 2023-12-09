<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = \App\Models\PortfolioProject::all();
        return view('portfolio', compact('projects'));
    }
}
