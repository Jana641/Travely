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
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('user_id'); // Updated to unsigned integer
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('flight_id');
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
            $table->integer('adult_ticket');
            $table->integer('kid_ticket');
            $table->integer('child_ticket');
            $table->boolean('additional_guide');
            $table->boolean('internet');
            $table->boolean('photograph');
            $table->decimal('total_price');
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
