<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('pages');
            $table->string('section_number')->nullable(true);
            $table->string('html_title', '255')->nullable(true);
            $table->text('html_body')->nullable(true);
            $table->string('body_div_classes')->nullable(true);
            $table->string('outer_div_classes')->nullable(true);
            $table->string('inner_div_classes')->nullable(true);
            $table->string('image_classes')->nullable(true);
            $table->string('image_div_classes')->nullable(true);
            $table->string('href')->nullable(true);
            $table->string('href_text')->nullable(true);
            $table->string('image_src')->nullable(true);
            $table->string('fake_image_src')->nullable(true);
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
        Schema::dropIfExists('site_cards');
    }
}
