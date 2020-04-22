<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', '50')->unique();
            $table->string('url', '75')->nullable();
            $table->string('uri', '75')->unique();
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
        Schema::dropIfExists('navitems');
    }
}
