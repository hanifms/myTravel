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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('ReviewID'); // Primary key
            $table->foreignId('UserID'); // Foreign key
            $table->foreignId('PackageID'); // Foreign key
            $table->tinyInteger('Rating'); // Assuming rating is a small number
            $table->string('Comment');
            $table->date('ReviewDate');
            $table->timestamps(); // To track creation and update times
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
