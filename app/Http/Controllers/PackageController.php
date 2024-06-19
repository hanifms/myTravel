<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackage;

class PackageController extends Controller
{
    public function index()
    {
        $tourPackages = TourPackage::all();
        return view('packages', compact('tourPackages'));
    }

    public function show($id)
    {
        $tourPackages = TourPackage::findOrFail($id);
        return view('package_details', compact('tourPackages'));
    }
}
