<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreContactDataToOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offices', function (Blueprint $table) {
            $table->string('office_phone', '25');
            $table->string('office_email', '50');
            $table->string('toll_free_phone', '25');
            $table->text('hours_of_operation');
            $table->text('days_of_operation');
            $table->string('website_url', '50');
            $table->string('careers_url', '50');
            $table->string('login_url', '50');
            $table->longText('office_directions');
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offices', function (Blueprint $table) {
            //
        });
    }
}
