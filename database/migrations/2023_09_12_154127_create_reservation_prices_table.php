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
        Schema::create('reservation_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('hourly')->nullable();
            $table->integer('daily')->nullable();
            $table->integer('weekly')->nullable();
            $table->integer('monthly')->nullable();
            $table->integer('yearly')->nullable();
            $table->foreignId('car_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_prices');
    }
};
