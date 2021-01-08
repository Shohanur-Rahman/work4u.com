<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyOfferApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_offer_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_id')->nullable();
            $table->string('seeker_name')->nullable();
            $table->string('seeker_email')->nullable();
            $table->string('application_subject')->nullable();
            $table->string('cv_url')->nullable();
            $table->text('application_message')->nullable();
            $table->boolean('is_approved')->nullable();
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
        Schema::dropIfExists('study_offer_applications');
    }
}
