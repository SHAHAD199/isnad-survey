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
        Schema::create('show_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100);
            $table->string('phone', 100);
            $table->foreignId('region_id')->constrained()->onDelete('cascade');
            $table->date('visit_date');
            $table->tinyInteger('visit_number');
            $table->tinyInteger('family_number');
            $table->string('profession', 100);
            $table->tinyInteger('payment_method');
            $table->tinyInteger('recognition_method');
            $table->foreignId('complex_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_rooms');
    }
};
