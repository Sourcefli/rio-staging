<?php

use Illuminate\Database\Seeder;

class WebsiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        option(['home-cardOneImg' => 'img/sections/opt-income-protection.png']);
    }
}
