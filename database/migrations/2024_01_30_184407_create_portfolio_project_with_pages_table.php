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
        Schema::create('portfolio_project_with_pages', function (Blueprint $table) {
            $table->id();
            $table->string('home_banner');
            $table->string('home_title');
            $table->string('background_banner');
            $table->string('main_banner');
            $table->string('contact_banner');
            $table->string('client_name');
            $table->string('category');
            $table->string('project_date');
            $table->text('project_overview');
            $table->string('twitter_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('behance_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_project_with_pages');
    }
};
