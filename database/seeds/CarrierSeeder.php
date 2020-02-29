<?php

use Illuminate\Database\Seeder;
use App\Carrier;

class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carriers')->insert([
            [
                "name" => "Aetna",
                "smImg" => "img/carriers/aetna-logo-sm.jpg",
                "generalSupportPhone" => "1 (800) 872-3862",
                "customerSupportPhone" => "1 (800) 358-8749",
                "supportUrl" => "https://www.aetna.com/individuals-families/member-rights-resources/member-services.html",
                "homePageUrl" => "https://www.aetna.com/individuals-families.html"
            ],
            [
                "name" => "Cigna",
                "smImg" => "img/carriers/cigna-logo-sm.jpg",
                "generalSupport" => "1 (800) 997-1654",
                "customerSupport" => "1 (866) 459-4272",
                "supportUrl" => "https://www.cigna.com/contact-us/",
                "homePageUrl" => "https://www.cigna.com/"
            ],
            [
                "name" => "Mutual Of Omaha",
                "smImg" => "img/carriers/mutual-of-omaha-logo-sm.png",
                "generalSupport" => "1 (800) 228-7104",
                "customerSupport" => "1 (800) 775-1000",
                "supportUrl" => "https://www.mutualofomaha.com/support/phone",
                "homePageUrl" => "https://www.mutualofomaha.com"
            ],
            [
                "name" => "Transamerica",
                "smImg" => "img/carriers/transamerica-logo-sm.jpg",
                "generalSupport" => "1 (800) 797-2643",
                "customerSupport" => "1 (800) 797-2643",
                "supportUrl" => "https://www.transamerica.com/contact-us/",
                "homePageUrl" => "https://www.transamerica.com/"
            ],
            [
                "name" => "Humana",
                "smImg" => "img/carriers/humana-logo-sm.jpg",
                "generalSupport" => "1 (844) 330-7799",
                "customerSupport" => "1 (800) 457-4708",
                "supportUrl" => "https://www.humana.com/help",
                "homePageUrl" => "https://www.humana.com"
            ],
            [
                "name" => "United Healthcare",
                "smImg" => "img/carriers/united-healthcare-logo-sm.jpg",
                "generalSupport" => "1 (866) 414-1959",
                "customerSupport" => "1 (800) 523-5800",
                "supportUrl" => "https://www.uhc.com/contact-us",
                "homePageUrl" => "https://www.uhc.com/"
            ],
            [
                "name" => "AIG",
                "smImg" => "img/carriers/aig-logo-sm.jpg",
                "generalSupport" => "1 (800) 448-2542",
                "customerSupport" => "1 (800) 888-2452",
                "supportUrl" => "https://www.aig.com/individual/insurance/life/life-contact-us",
                "homePageUrl" => "https://www.aig.com/"
            ],
            [
                "name" => "Royal Neighbors of America",
                "smImg" => "img/carriers/royal-neighbors-logo-sm.jpg",
                "generalSupport" => "1 (800) 627-4762",
                "customerSupport" => "1 (800) 627-4762",
                "supportUrl" => "https://www.royalneighbors.org/about-us/contact-us",
                "homePageUrl" => "https://www.royalneighbors.org/"
            ]
        ]);

    }
}
