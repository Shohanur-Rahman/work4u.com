<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_id');
            $table->string('name');
            $table->string('submit_email')->default('work4u.consultancy@yahoo.com');
            $table->string('summary')->nullable();
            $table->text('educational_requirment')->nullable();
            $table->text('financial_requirement')->nullable();
            $table->text('documents_required')->nullable();
            $table->string('extra_title1')->nullable();
            $table->text('extra_details1')->nullable();
            $table->string('extra_title2')->nullable();
            $table->text('extra_document2')->nullable();
            $table->string('extra_title3')->nullable();
            $table->text('extra_document3')->nullable();
            $table->boolean('is_published');
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
        Schema::dropIfExists('study_offers');
    }
}
