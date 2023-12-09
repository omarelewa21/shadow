<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = \App\Models\Faq::all();
        return view('faq', compact('faqs'));
    }
}
