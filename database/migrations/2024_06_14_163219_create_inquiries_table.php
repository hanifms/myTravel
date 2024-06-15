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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id('InquiryID'); // Primary key
            $table->foreignId('UserID'); // Foreign key
            $table->foreignId('PackageID'); // Foreign key
            $table->string('InquiryMessage');
            $table->date('InquiryDate');
            $table->string('InquiryStatus');
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
