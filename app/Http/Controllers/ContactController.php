<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\CompanyInfo;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $companyInfo = CompanyInfo::first();
        return view('contact', compact('companyInfo'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'subject' => 'required|min:3|max:255',
            'message' => 'required|min:3|max:500',
        ]);

        $companyInfo = CompanyInfo::first();

        Mail::to($companyInfo->company_email)->send(new ContactUs($data));

        return response()->json([
            'status'    => true, 
            'message'   => 'Your message has been sent successfully. We will contact you soon.'
        ]);
    }
}
