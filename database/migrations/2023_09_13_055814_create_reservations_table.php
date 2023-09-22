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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('car_id')->constrained();
            $table->string('reservation_type', 50);
            $table->tinyInteger('discount_value(%)')->unsigned();
            $table->tinyInteger('extra_discount_value(%)')->unsigned()->default(0);
            $table->string('discount_aggregration_type', 50);
            $table->json('additional_fees')->nullable();
            $table->timestamp('start_from');
            $table->timestamp('end_at');
            $table->string('status', 50);
            $table->foreignId('reservation_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
