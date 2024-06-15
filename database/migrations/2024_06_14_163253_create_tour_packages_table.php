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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id('PackageID'); // Primary key
            $table->string('PackageName');
            $table->text('Description'); // Changed to text type
            $table->decimal('Price', 8, 2); // Assuming a decimal type for price with precision and scale
            $table->integer('Duration'); // Assuming integer for duration in days
            $table->text('Itinerary'); // Corrected spelling and changed to text type
            $table->boolean('AvailabilityStatus'); // Corrected spelling
            $table->timestamps(); // To track creation and update times
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
