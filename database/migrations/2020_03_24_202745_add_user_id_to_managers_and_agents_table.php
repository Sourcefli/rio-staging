<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToManagersAndAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //    Schema::table('agents', function (Blueprint $table) {
    //        $table->unsignedBigInteger('user_id')->nullable();

    //        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    //    });

       Schema::table('managers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Schema::table('managers', function (Blueprint $table) {
        //     $table->unsignedBigInteger('manager_id')->nullable();

        //     $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
        });

        Schema::table('managers', function (Blueprint $table) {
            $table->dropForeign('manager_id');
            $table->dropColumn('manager_id');
        });
    }
}
