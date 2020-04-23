<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedSmallInteger('asb_id')->nullable(true);
            $table->string('email')->unique();
            $table->string('phone', '14')->unique();
            $table->longText('bio')->nullable(true);
            $table->string('company_role')->nullable(true);
            $table->string('company_title');
            $table->string('facebook_url')->nullable(true);
            $table->string('linkedin_url')->nullable(true);
            $table->string('qualifications')->nullable(true);
            $table->string('sm_image_url')->nullable(true);
            $table->string('md_image_url')->nullable(true);
            $table->string('lg_image_url')->nullable(true);
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
        Schema::dropIfExists('managers');
    }
}
