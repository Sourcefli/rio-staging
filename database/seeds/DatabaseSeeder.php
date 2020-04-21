<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             // !! Run these seed rounds independent of each other !!

             //Round 1 Seeds
            //  WebsiteDataSeeder::class,
             OfficesDataSeeder::class,
             TeamDataSeeder::class,
             CarrierSeeder::class,
             AgentsDataSeeder::class,
             ServicesDataSeeder::class,
             ManagersDataSeeder::class,
            AgentTeamDataSeeder::class,
            AgentAndManagerUserIdSeeder::class,
            UsersDataSeeder::class

         ]);
    }
}
