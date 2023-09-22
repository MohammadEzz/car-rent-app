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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('hourly(%)')->unsigned()->default(0);
            $table->tinyInteger('daily(%)')->unsigned()->default(0);
            $table->tinyInteger('weekly(%)')->unsigned()->default(0);
            $table->tinyInteger('monthly(%)')->unsigned()->default(0);
            $table->tinyInteger('yearly(%)')->unsigned()->default(0);
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
