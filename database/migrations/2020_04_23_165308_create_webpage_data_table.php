<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebpageDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webpage_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pagename');
            $table->string('category');
            $table->string('classes')->nullable(true);
            $table->string('heading')->nullable(true);
            $table->string('subheading')->nullable(true);
            $table->string('type');
            $table->text('body')->nullable(true);
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
        Schema::dropIfExists('webpage_data');
    }
}
