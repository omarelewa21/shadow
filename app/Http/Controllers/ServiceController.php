<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        $allServices = Service::all();
        $companyTel = CompanyInfo::first()->company_phone;
        return view('service', compact('service', 'allServices', 'companyTel'));
    }
}
