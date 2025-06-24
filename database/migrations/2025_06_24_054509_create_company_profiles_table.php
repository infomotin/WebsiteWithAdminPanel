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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('company_phone_primary')->nullable();
            $table->string('company_phone_secondary')->nullable();
            $table->string('company_address')->nullable();
            //logo
            $table->string('company_logo_primary')->nullable();
            $table->string('company_logo_secondary')->nullable();
            $table->string('company_logo_primary_header')->nullable();
            $table->string('company_logo_secondary_header')->nullable();
            $table->string('company_logo_primary_footer')->nullable();
            $table->string('company_logo_secondary_footer')->nullable();

            $table->string('company_website')->nullable();
            $table->string('company_description')->nullable();
            $table->string('company_vision')->nullable();
            $table->string('company_mission')->nullable();
            $table->string('company_goals')->nullable();
            $table->string('company_values')->nullable();
            //contact
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_position')->nullable();
            $table->string('contact_image')->nullable();
            //social
            $table->string('company_facebook')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_youtube')->nullable();
            //meta
            $table->string('company_meta_title')->nullable();
            $table->string('company_meta_description')->nullable();
            $table->string('company_meta_keywords')->nullable();
            //status
            $table->string('company_status');
            //footer
            $table->string('company_footer_text')->nullable();
            $table->string('company_footer_copyright')->nullable();
            $table->string('company_footer_copyright_link')->nullable();
            $table->string('company_footer_copyright_text')->nullable();
            $table->string('company_footer_copyright_text_link')->nullable();
            //foundation
            $table->string('company_foundation')->nullable();
            $table->string('company_foundation_year')->nullable();
           //


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
