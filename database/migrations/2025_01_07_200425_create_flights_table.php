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
        Schema::create('flights', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('name');
            $table->string('short_description');
            $table->integer('guests');
            $table->decimal('price');
            $table->string('duration');
            $table->integer('rate');
            $table->string('long_description');
            $table->longText('highlights'); 
            $table->string('image')->nullable(); 
            $table->date('departure_date'); 
            $table->date('return_date'); 
            $table->time('departure_time');
            $table->json('media_gallery')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
