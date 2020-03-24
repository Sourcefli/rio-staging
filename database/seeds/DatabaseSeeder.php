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
             OfficesDataSeeder::class
             //TeamDataSeeder::class,
             //CarrierSeeder::class,
             //WebsiteDataSeeder::class,
             //ServicesDataSeeder::class,
             //AgentsDataSeeder::class,
//             ManagersDataSeeder::class
         ]);
    }
}
