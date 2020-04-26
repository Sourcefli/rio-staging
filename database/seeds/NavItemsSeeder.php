<?php

use Illuminate\Database\Seeder;

class NavItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navitems')->insert([

            //Menu Items
            [
                "title" => "Home",
                "uri" => "/",
                "url" => "http://retirementinsuranceoptions.com/",
                "category" => "menu"
            ],
            [
                "title" => "About Us",
                "uri" => "/about",
                "url" => "http://retirementinsuranceoptions.com/about",
                "category" => "menu"
            ],
            [
                "title" => "Retirement Solutions",
                "uri" => "/services",
                "url" => "http://retirementinsuranceoptions.com/services",
                "category" => "menu"
            ],
            [
                "title" => "Client Resources",
                "uri" => "/client-resources",
                "url" => "http://retirementinsuranceoptions.com/client-resources",
                "category" => "menu"
            ],
            [
                "title" => "Contact",
                "uri" => "/contact",
                "url" => "http://retirementinsuranceoptions.com/contact",
                "category" => "menu"
            ],
            [
                "title" => "Get A Quote",
                "uri" => "/get-a-quote",
                "url" => "http://retirementinsuranceoptions.com/get-a-quote",
                "category" => "menu"
            ],
            [
                "title" => "Careers",
                "uri" => "https://asbsouthwestcareers.com",
                "url" => "https://asbsouthwestcareers.com",
                "category" => "menu"
            ],

            //Services Items
            [
                "title" => "Wise Retirement",
                "uri" => "/wise-retirement",
                "url" => "http://retirementinsuranceoptions.com/wise-retirement",
                "category" => "service"
            ],
            [
                "title" => "Protecting Your Investments",
                "uri" => "/protected-investments",
                "url" => "http://retirementinsuranceoptions.com/protected-investments",
                "category" => "service"
            ],
            [
                "title" => "Diverisfy Your Nest Egg",
                "uri" => "/diversify-your-nestegg",
                "url" => "http://retirementinsuranceoptions.com/diversify-your-nestegg",
                "category" => "service"
            ],
            [
                "title" => "Expect The Unexpected",
                "uri" => "/expect-the-unexpected",
                "url" => "http://retirementinsuranceoptions.com/expect-the-unexpected",
                "category" => "service"
            ],
            [
                "title" => "Medicare 360",
                "uri" => "/medicare360",
                "url" => "http://retirementinsuranceoptions.com/medicare360",
                "category" => "service"
            ],
            [
                "title" => "Burial Preperation",
                "uri" => "/burial-preperation",
                "url" => "http://retirementinsuranceoptions.com/burial-preperation",
                "category" => "service"
            ],

            //Team Items

            //Carrier Items

            //Product Items

        ]);
    }
}
