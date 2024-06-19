<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show($id)
    {
        $Review = Review::findOrFail($id);
        return view('review.show', compact('review'));
    }
}
