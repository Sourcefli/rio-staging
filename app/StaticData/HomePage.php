<?php

namespace App\StaticData;

class HomePage {

    public static function sectionOne() {


        option([

            /* HOME PAGE
             *
             * SECTION 1
            */

            //Column 1 => Card One
            "home_section1_colOneTitle" => "Planning and Advice",
            "home_section1_colOneSummary" => "Extensive options and carriers so you can choose what works for you",
            "home_section1_colOneImg" => "img/sections/opt-asset-protection-two.png",

            //Column 2 => Card Two
            "home_section1_colTwoTitle" => "Products & Benefits",
            "home_section1_colTwoSummary" => "Get answers face-to-face, from someone you know and trust",
            "home_section1_colTwoImg" => "img/sections/opt-medicare-card.jpg",

            //Column 3 => Card Three
            "home_section1_colThreeTitle" => "Tools & Advice",
            "home_section1_colThreeSummary" => "Powerful calculations, decades of experience, and a full a support team",
            "home_section1_colThreeImg" => "img/sections/opt-retirement-planning-two.jpg",


        ]);

    }

    public static function sectionTwo() {


        option([

            /* HOME PAGE
             *
             * SECTION 2
            */

            //Column 1 => Card With Text Beneath
            "home_section2_colOneTitle" => "The Best Rates You'll Find",
            "home_section2_colOneSummary" => "American Senior Benefits Southwest can rarely be beat by our competitors when it comes to having the best rates in the industry. We compare rates from over 150 different insurance carriers across the country to always get you the biggest bang for your buck!",
            "home_section2_colOneImg" => "img/sections/opt-competitive-pricing.jpg",

            //Column 2 => Card With Text Beneath
            "home_section2_colTwoTitle" => "Highly Reliable Foundation",
            "home_section2_colTwoSummary" => "Our company is build upon a nationwide network of experts in the retirement industry. Since American Senior Benefits' founding in 2003, you'll find a solid background with nationally recognized services, such as the BBB and the Chamber of Commerce.",
            "home_section2_colTwoImg" => "img/sections/opt-great-reputation.jpg",

            //Column 3 => Text with CTA button beneath
            "home_section2_colThreeTitle" => "One place for all things retirement..",

            //List Items
            "home_section2_colThreeListItemOne" => "Medicare Supplements & Advantage",
            "home_section2_colThreeListItemTwo" => "Final expense coverage for any health conditions",
            "home_section2_colThreeListItemThree" => "Income planning and strategies",
            "home_section2_colThreeListItemFour" => "Short or long term care protection",
            "home_section2_colThreeListItemFive" => "Dental &amp; Vision comparisons",

            "home_section2_cta" => "Learn More About Our Services",
            "home_section2_ctaUrl" => "/services",
        ]);

    }

}
