<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllPivotTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('managers', function (Blueprint $table) {
//            $table->dropForeign('managers_office_id_foreign');
//            $table->dropForeign('managers_team_id_foreign');
//            $table->dropColumn(['team_id', 'office_id']);
//        });

        Schema::create('manager_office', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('office_id');
            $table->timestamps();

            $table->unique(['manager_id', 'office_id']);

            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
        });

        Schema::create('manager_team', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            $table->unique(['manager_id', 'team_id']);

            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });

        Schema::create('agent_manager', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('manager_id');
            $table->timestamps();

            $table->unique(['agent_id', 'manager_id']);

            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
        });

        Schema::create('office_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->unique(['office_id', 'user_id']);

            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('team_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->unique(['team_id', 'user_id']);

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_pivot_tables');
    }
}
