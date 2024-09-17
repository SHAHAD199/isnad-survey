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
        Schema::create('earth_links', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100);
            $table->string('phone', 100);
            $table->string('email', 100)->unique();
            $table->foreignId('region_id')->constrained()->onDelete('cascade');
            $table->string('city', 100);
            $table->tinyInteger('family_number');
            $table->string('profession', 100);
            $table->foreignId('complex_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('academic_achievement');
            $table->tinyInteger('marital_status');
            $table->tinyInteger('best_payment');
            $table->tinyInteger('estate_type');
            $table->tinyInteger('area');
            $table->string('location');
            $table->tinyInteger('purchase_purpose');
            $table->tinyInteger('payment_budget');
            $table->tinyInteger('budget');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earth_links');
    }
};
