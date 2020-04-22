<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', '50');
            $table->string('default_src', '80')->unique();
            $table->string('default_srcset', '80')->default('(min-width: 769px) 456px');

            $table->string('small_src', '80')->nullable();
            $table->string('small_srcset', '80')->default('(max-width: 560px) 212px');

            $table->string('medium_src', '80')->nullable();
            $table->string('medium_srcset', '80')->default('(max-width: 768px) 326px');

            $table->string('large_src', '80')->nullable();
            $table->string('large_srcset', '80')->default('(min-width: 769px) 456px');

            $table->text('alt_text');
            $table->text('description')->nullable();
            $table->text('image_copy')->nullable();
            $table->enum('category', ['menu', 'service', 'blog', 'staff', 'location', 'carrier', 'product', 'other'])->default('other');
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
        Schema::dropIfExists('images');
    }
}
