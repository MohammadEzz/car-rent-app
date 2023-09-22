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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make', 255)->index('car_make_index');
            $table->string('model', 255);
            $table->year('year')->index('car_year_index');
            $table->string('class', 50)->index('car_class_index');
            $table->string('external_color', 255)->index('car_external_color_index');
            $table->string('internal_color', 255)->index('car_internal_color_index')->nullable();
            $table->string('body_type', 255)->index('car_body_index');
            $table->string('transmission_type', 255)->index('car_transmission_index');
            $table->string('seating_capacity', 255)->index('car_seating_index');
            $table->string('fuel_type', 255)->index('car_fuel_index');
            $table->string('horsepower', 10)->index('car_horsepower_index');
            $table->string('num_of_doors', 5)->index('car_doors_index');
            $table->string('num_of_cylinders', 5)->index('car_cylinders_index');
            $table->string('steering_side', 10);
            $table->bigInteger('first_kilo/mile')->unsigned();
            $table->string('plate_num', 10)->unique('car_plate_num_unique');
            $table->string('status', 50);
            $table->boolean('visible')->default(true);
            $table->boolean('deletable')->default(true);
            $table->boolean('archived')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
