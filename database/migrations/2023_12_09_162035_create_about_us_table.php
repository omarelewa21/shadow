<?php

use App\Models\AboutUs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->string('image1');
            $table->string('image2');
            $table->text('advantage_description');
            $table->timestamps();
        });

        DB::table('about_us')->insert([
            'id' => 1,
            'banner' => 'assets/img/about-us-banner.jpg',
            'image1' => 'assets/img/about-us-1.jpg',
            'image2' => 'assets/img/about-us-2.jpg',
            'advantage_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis. Proin viverra risus a eros volutpat tempor. In quis arcu et eros porta lobortis sit amet eu leo. Praesent at facilisis libero. Sed blandit, magna id ornare facilisis, nisl justo accumsan tortor, a faucibus metus magna et risus.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
