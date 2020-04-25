<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('webpage_data', function (Blueprint $table) {
            $table->unsignedBigInteger('image_id')->nullable();
            $table->foreign('image_id')->references('id')->on('images');
        });

        Schema::table('prospects', function (Blueprint $table) {
            $table->unsignedBigInteger('household_id')->nullable();
            $table->foreign('household_id')->references('id')->on('households');
        });

        Schema::table('prospects', function (Blueprint $table) {
            $table->unsignedBigInteger('office_id')->nullable();
            $table->foreign('office_id')->references('id')->on('offices');
        });

        Schema::table('callers', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
        });

        Schema::table('callers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('households', function(Blueprint $table) {
            $table->unsignedBigInteger('household_id')->nullable();
            $table->foreign('household_id')->references('id')->on('households');
            $table->unsignedBigInteger('office_id')->nullable();
            $table->foreign('office_id')->references('id')->on('offices');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->foreign('agent_id')->references('id')->on('agents');
            $table->unsignedBigInteger('caller_id')->nullable();
            $table->foreign('caller_id')->references('id')->on('callers');
            $table->unsignedBigInteger('prospect_id')->nullable();
            $table->foreign('prospect_id')->references('id')->on('prospects');
        });

        Schema::table('trello_accounts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });

//        Schema::table('agents', function (Blueprint $table) {
//            $table->unsignedBigInteger('trello_account_id')->nullable();
//            $table->foreign('trello_account_id')->references('id')->on('trello_accounts');
//        });
//
//        Schema::table('managers', function (Blueprint $table) {
//            $table->unsignedBigInteger('trello_account_id')->nullable();
//            $table->foreign('trello_account_id')->references('id')->on('trello_accounts');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('many', function (Blueprint $table) {
            //
        });
    }
}
