<?php

use Illuminate\Database\Seeder;

class AgentAndManagerUserIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        /*
         *
         * Update MANAGERS table with user_id
         */

        //Don H
        DB::table('managers')->updateOrInsert(
            ['id' => 1],
            ['user_id' => 2]
        );

        //Admin Account
        DB::table('managers')->updateOrInsert(
            ['id' => 2],
            ['user_id' => 12]
        );

        //Steve E Account
        DB::table('managers')->updateOrInsert(
            ['id' => 3],
            ['user_id' => 10]
        );

        /*
         *
         * Update AGENTS table with user_id
         */
        //Rich S
        DB::table('agents')->updateOrInsert(
            ['id' => 1],
            ['user_id' => 3]
        );

        //Shawn B
        DB::table('agents')->updateOrInsert(
            ['id' => 2],
            ['user_id' => 4]
        );

        //Russ A
        DB::table('agents')->updateOrInsert(
            ['id' => 3],
            ['user_id' => 5]
        );

        //Shawn L
        DB::table('agents')->updateOrInsert(
            ['id' => 4],
            ['user_id' => 6]
        );

        //Rich F
        DB::table('agents')->updateOrInsert(
            ['id' => 5],
            ['user_id' => 7]
        );

        //Monica C
        DB::table('agents')->updateOrInsert(
            ['id' => 6],
            ['user_id' => 8]
        );

        //Richard E
        DB::table('agents')->updateOrInsert(
            ['id' => 7],
            ['user_id' => 9]
        );

        Schema::enableForeignKeyConstraints();
    }
}
