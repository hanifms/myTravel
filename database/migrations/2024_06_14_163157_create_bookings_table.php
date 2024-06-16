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
            $table->id('bookingID');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('packageID');
            $table->date('bookingDate');
            $table->unsignedInteger('numOfPeople');
            $table->float('totalPrice',8,2);
            $table->string('bookingStatus');
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
