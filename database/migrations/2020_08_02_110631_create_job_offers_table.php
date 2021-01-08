<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_published')->nullable(); 
            $table->string('name')->nullable();
            $table->string('submit_email')->default('work4u.consultancy@yahoo.com');
            $table->string('hot_job_title')->nullable();
            $table->boolean('is_mid_level')->nullable();
            $table->boolean('is_entry_level')->nullable();
            $table->boolean('is_top_level')->nullable();
            $table->string('company_name')->nullable();
            $table->string('experience_required')->nullable();
            $table->integer('no_of_vacancy')->nullable();
            $table->date('deadline_date')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('salary_range')->nullable();
            $table->text('job_context')->nullable();
            $table->text('special_instruction')->nullable();
            $table->text('apply_procedure')->nullable();
            $table->text('job_responsibility')->nullable();
            $table->text('aditional_salary_info')->nullable();
            $table->text('educational_requirment')->nullable();
            $table->text('company_information')->nullable();
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
        Schema::dropIfExists('job_offers');
    }
}
