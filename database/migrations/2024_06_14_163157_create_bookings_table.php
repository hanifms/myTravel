<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('BookingID'); // Primary key
            $table->foreignId('UserID'); // Foreign key
            $table->foreignId('PackageID'); // Foreign key
            $table->date('BookingDate');
            $table->integer('NumOfPeople');
            $table->decimal('TotalPrice', 8, 2); // Assuming a decimal type for price with precision and scale
            $table->string('BookingStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
