<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'packageId', 'bookingDate', 'numberOfPeople', 'totalPrice',
    ];

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class, 'packageId');
    }
}
