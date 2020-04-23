<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedSmallInteger('asb_id')->nullable();
            $table->string('email')->unique();
            $table->string('phone', '14')->unique()->nullable();
            $table->longText('bio')->nullable();
            $table->dateTime('started_on')->nullable();
            $table->string('company_role')->nullable();
            $table->string('company_title')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('sm_image_url')->nullable();
            $table->string('md_image_url')->nullable();
            $table->string('lg_image_url')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
