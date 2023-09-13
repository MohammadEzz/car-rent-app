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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('nationality', 50);
            $table->string('phone_num', 20)->nullable();
            $table->string('mopile_num_1', 20);
            $table->string('mopile_num_2', 20)->nullable();
            $table->string('email')->unique('customer_email_UK');
            $table->string('gender', 10);
            $table->date('birth_of_date');
            $table->string('residency_state', 100);
            $table->bigInteger('personal_photo')->unsigned()->nullable();
            $table->bigInteger('ID_image')->unsigned()->nullable();
            $table->bigInteger('passport_image')->unsigned()->nullable();
            $table->text('address');
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
