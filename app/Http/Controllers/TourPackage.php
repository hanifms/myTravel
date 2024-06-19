<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function show($id)
    {
        $tourPackage = TourPackage::findOrFail($id);
        return view('tour-packages.show', compact('package'));
    }
}

