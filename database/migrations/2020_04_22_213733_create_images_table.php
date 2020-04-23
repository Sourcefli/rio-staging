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
            $table->string('title');

            $table->string('default_src')->default('img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png');
            $table->string('default_srcsetsize')->default('(min-width: 769px) 456px');

            $table->string('small_src')->default('img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png');
            $table->string('small_srcsetsize')->default('(max-width: 560px) 212px');

            $table->string('medium_src')->default('img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png');
            $table->string('medium_srcsetsize')->default('(max-width: 768px) 326px');

            $table->string('large_src')->default('img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png');
            $table->string('large_srcsetsize')->default('(min-width: 769px) 456px');

            $table->string('xlarge_src')->default('img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png');
            $table->string('xlarge_srcsetsize')->default('(min-width: 769px) 456px');

            $table->text('alt_text')->nullable();
            $table->text('description')->nullable();
            $table->text('banner_text')->nullable();
            $table->enum('category', ['hero_images', 'webpage_images', 'favicon_images', 'carrier_images', 'product_images', 'services_images', 'staff_images', 'office_images', 'logo_images', 'city_images'])->default('webpage_images');
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
