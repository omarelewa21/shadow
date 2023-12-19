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
        Schema::dropIfExists('testimonial_stats');
        Schema::create('testimonial_stats', function (Blueprint $table) {
            $table->id();
            $table->string('stat_name');
            $table->unsignedTinyInteger('stat_value');
            $table->boolean('add_plus_sign')->default(false);
            $table->boolean('add_k_char')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_stats');
        Schema::create('testimonial_stats', function (Blueprint $table) {
            $table->id();
            $table->string('stat_name');
            $table->string('stat_value');
            $table->timestamps();
        });
    }
};
