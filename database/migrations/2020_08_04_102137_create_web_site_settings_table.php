<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('web_site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('about_us')->nullable();
            $table->string('company_address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('company_email')->nullable();
            $table->string('office_time')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkdin_link')->nullable();
            $table->string('important_news')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('support_numbers')->nullable(); 
            $table->string('admin_email')->nullable();
            $table->string('website_title')->nullable();
            $table->string('website_tag')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('google_analytics_id')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->text('terms_conditions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_site_settings');
    }
}
