<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProjectWithPage;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = \App\Models\PortfolioProject::all();
        return view('portfolio', compact('projects'));
    }

    public function show(PortfolioProjectWithPage $project)
    {
        $prevProject = PortfolioProjectWithPage::when(
            $project->id == 1,
            fn ($query) => $query->whereId(PortfolioProjectWithPage::latest()->value('id')),
            fn ($query) => $query->whereId($project->id - 1)
        )->first();

        $nextProject = PortfolioProjectWithPage::when(
            $project->id == PortfolioProjectWithPage::latest()->value('id'),
            fn ($query) => $query->whereId('id', 1),
            fn ($query) => $query->whereId($project->id + 1)
        )->first();

        return view('portfolio-show', compact('project', 'prevProject', 'nextProject'));
    }
}
