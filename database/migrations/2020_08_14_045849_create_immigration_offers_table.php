<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmigrationOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immigration_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_published')->nullable();
            $table->string('submit_email')->default('work4u.consultancy@yahoo.com');  
            $table->integer('country_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('age')->nullable();
            $table->string('name')->nullable();
            $table->string('summary')->nullable();
            $table->text('educational_requirment')->nullable();
            $table->text('ielts_requirment')->nullable();
            $table->text('apply_instruction')->nullable();
            $table->string('extra_title1')->nullable();
            $table->text('extra_description1')->nullable();
            $table->string('extra_title2')->nullable();
            $table->text('extra_description2')->nullable();
            $table->string('extra_title3')->nullable();
            $table->text('extra_description3')->nullable();
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
        Schema::dropIfExists('immigration_offers');
    }
}
