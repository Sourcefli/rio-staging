<?php

namespace App\StaticData;

class HomePage {

    public static function threeCardSection() {


        option([

            /* HOME PAGE
             *
             * SECTION 1 => Three Column Cards
            */

            //Card One
            "home_cardOneTitle" => "Planning and Advice",
            "home_cardOneSummary" => "Extensive options and carriers so you can choose what works for you",
            "home_cardOneImg" => "img/sections/opt-medicare-card.jpg",

            //Card Two
            "home_cardTwoTitle" => "Products & Benefits",
            "home_cardTwoSummary" => "Get answers face-to-face, from someone you know and trust",
            "home_cardTwoImg" => "img/sections/opt-retirement-savings.jpg",

            //Card Three
            "home_cardThreeTitle" => "Tools & Advice",
            "home_cardThreeSummary" => "Powerful calculations, decades of experience, and a full a support team",
            "home_cardThreeImg" => "img/sections/opt-income-protection.png",

            "test" => "123",
        ]);
    }

}
