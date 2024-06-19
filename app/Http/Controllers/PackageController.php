<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $tour_packages = TourPackage::all();
        return view('packages', compact('tour_packages'));
    }

    public function show($id)
    {
        $tour_packages = TourPackage::findOrFail($id);
        return view('package_details', compact('tour_package'));
    }
}
