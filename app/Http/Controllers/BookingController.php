<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackage;

class BookingController extends Controller
{
    public function create($id)
    {
        $tour_package = TourPackage::findOrFail($id);
        return view('booking.create', compact('tour_package'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'packageId' => 'required|exists:tour_packages,id',
            'bookingDate' => 'required|date',
            'numberOfPeople' => 'required|integer|min=1',
            'totalPrice' => 'required|numeric|min:0',
        ]);

        Booking::create([
            'packageId' => $request->package_id,
            'bookingDate' => $request->booking_date,
            'numberOfPeople' => $request->number_of_people,
            'totalPrice' => $request->total_price,
        ]);

        return redirect()->route('packages')->with('success', 'Booking created successfully');
    }
}
