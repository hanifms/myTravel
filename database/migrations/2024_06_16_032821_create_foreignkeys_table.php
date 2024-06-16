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
        Schema::table('feedback', function(Blueprint $table){
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('bookings', function(Blueprint $table){
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('packageID')->references('id')->on('tour_packages')->onDelete('cascade');
        });

        Schema::table('inquiries', function(Blueprint $table){
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('packageID')->references('id')->on('tour_packages')->onDelete('cascade');
        });

        Schema::table('reviews', function(Blueprint $table){
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('packageID')->references('id')->on('tour_packages')->onDelete('cascade');
        });

        Schema::table('images', function(Blueprint $table){
            $table->foreign('packageID')->references('id')->on('tour_packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feedback', function (Blueprint $table){
            $table->dropForeign(['userID']);
        });

        Schema::table('bookings', function (Blueprint $table){
            $table->dropForeign(['userID']);
            $table->dropForeign(['packageID']);
        });

        Schema::table('inquiries', function (Blueprint $table){
            $table->dropForeign(['userID']);
            $table->dropForeign(['packageID']);
        });

        Schema::table('reviews', function (Blueprint $table){
            $table->dropForeign(['userID']);
            $table->dropForeign(['packageID']);
        });

        Schema::table('images', function (Blueprint $table){
            $table->dropForeign(['packageID']);
        });
    }
};
