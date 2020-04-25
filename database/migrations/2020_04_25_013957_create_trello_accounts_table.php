<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrelloAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trello_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('trello_user_id');
            $table->json('boards');
            $table->json('lists');
            $table->json('cards');
            $table->json('checklists');
            $table->json('checklist_items');
            $table->json('webhooks');
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
        Schema::dropIfExists('trello_accounts');
    }
}
