<?php

use App\Models\CompanyInfo;
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
        Schema::create('company_info', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_phone');
            $table->string('company_email');
            $table->text('company_logo');
            $table->string('company_facebook')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_pinterest')->nullable();
            $table->string('company_github')->nullable();
            $table->text('company_map_iframe');
        });

        CompanyInfo::create([
            'company_name'      => 'Company Name',
            'company_address'   => 'Company Address',
            'company_phone'     => 'Company Phone',
            'company_email'     => 'Company Email',
            'company_logo'      => 'Company Logo',
            'company_map_iframe'=> '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d854.5115264375648!2d31.408714000000003!3d31.052816!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d5d25cddb71%3A0xa2c1ce881b8ce3d2!2sContact%20Mansoura!5e0!3m2!1sen!2seg!4v1701771024645!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_info');
    }
};
