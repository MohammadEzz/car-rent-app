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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('option_type');
            $table->string('option_value');
            $table->bigInteger('parent')->unsigned()->default(0);
            $table->string('group', 50)->nullable();
            $table->string('icon')->nullable();
            $table->boolean('editable')->default(false);
            $table->boolean('deletable')->default(true);
            $table->boolean('visible')->default(true);
            $table->smallInteger('order')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
