<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('street_one');
            $table->string('street_two');
            $table->string('city');
            $table->string('state');
            $table->string('state_abbr');
            $table->string('zip', '6');
            $table->string('sm_image_url', '50')->nullable();
            $table->string('md_image_url', '50')->nullable();
            $table->string('lg_image_url', '50')->nullable();
            $table->string('facebook_url', '50')->nullable();
            $table->string('facebook_username', '50')->nullable();
            $table->string('linkedin_url', '50')->nullable();
            $table->string('linkedin_username', '50')->nullable();
            $table->string('twitter_url', '50')->nullable();
            $table->string('twitter_username', '50')->nullable();
            $table->string('slack_url', '50')->nullable();
            $table->json('slack_chatrooms');
            $table->string('whatsapp_url', '50')->nullable();
            $table->string('whatsapp_username', '50')->nullable();
            $table->string('whatsapp_agent_chatroom', '50')->nullable();
            $table->string('whatsapp_prospect_chatroom', '50')->nullable();
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
        Schema::dropIfExists('offices');
    }
}
