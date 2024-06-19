<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackage;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create()
    {
        $tour_packages = TourPackage::all();
        return view('booking_details', compact('tour_packages'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'package_id' => 'required',
            'booking_date' => 'required|date',
            'number_of_people' => 'required|numeric|min:1',
            'total_price' => 'required|numeric',
        ]);

        // Create a new Booking instance
        $booking = new Booking();
        $booking->packageId = $validatedData['package_id'];
        $booking->bookingDate = $validatedData['booking_date'];
        $booking->numOfPeople = $validatedData['number_of_people'];
        $booking->totalPrice = $validatedData['total_price'];
        $booking->bookingStatus = 'pending';

        $booking->userId = Auth::id();

        // Save the booking
        $booking->save();

        // Optionally, you can return a response or redirect
        return redirect()->route('booking.create')->with('success', 'Booking created successfully!');
    }
}

