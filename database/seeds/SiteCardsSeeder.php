<?php

use Illuminate\Database\Seeder;

class SiteCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        DB::table('site_cards')->insert([
            [
                "title" => "One-Stop Medicare Shop",
                "pages" => "services",
                "html_title" => "Comprehensive Medicare <\br> Store",
                "html_body" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 style-alt center",
                "image_classes" => "fbox-photo",
                "body_div_classes" => "fbox-content",
                "href" => "/service-details?title=medicare-services",
                "image_src" => "img/sections/opt-medicare-service-two.jpg",
                "fake_image_src" => "image/photo-md-f.jpg"
            ],
            [
                "title" => "Final Expense Solutions",
                "pages" => "services",
                "html_title" => "Final Expense <\br> Solutions",
                "html_body" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 center",
                "image_classes" => "fbox-photo",
                "body_div_classes" => "fbox-content",
                "href" => "/service-details?title=final-expenses",
                "image_src" => "img/sections/opt-burial-protection.jpg",
                "fake_image_src" => "image/photo-md-f.jpg"
            ],
            [
                "title" => "Income Planning And Protection",
                "pages" => "services",
                "html_title" => "Income Planning <\br> And Protection",
                "html_body" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 style-alt center",
                "image_classes" => "fbox-photo",
                "body_div_classes" => "fbox-content",
                "href" => "/service-details?title=income-protection",
                "image_src" => "img/sections/opt-asset-protection-two.png",
                "fake_image_src" => "image/photo-md-f.jpg"
            ],
            [
                "title" => "Dental And Vision Comparisons",
                "pages" => "services",
                "html_title" => "Dental And <\br> Vision Comparisons",
                "html_body" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 center",
                "image_classes" => "fbox-photo",
                "body_div_classes" => "fbox-content",
                "href" => "/service-details?title=dental-vision",
                "image_src" => "img/sections/opt-dentist-service.png",
                "fake_image_src" => "image/photo-md-f.jpg"
            ]
        ]);


        DB::table('site_cards')->insert([
            // Row one cards on Home Page
           [
               "title" => "The Best Rates You'll Find",
               "pages" => "home",
               "section_number" => "two",
               "html_body" => "American Senior Benefits Southwest can rarely be beat by our competitors when it comes to having the best rates in the industry. We compare rates from over 150 different insurance carriers across the country to always get you the biggest bang for your buck!",
               "body_div_classes" => "image",
               "outer_div_classes" => "col-md-4 col-sm-6",
               "inner_div_classes" => "color-primary",
               "image_src" => "img/sections/opt-competitive-pricing.jpg",
           ],
            [
               "title" => "Highly Reliable Foundation",
               "pages" => "home",
               "section_number" => "two",
               "html_body" => "Our company is build upon a nationwide network of experts in the retirement industry. Since American Senior Benefits' founding in 2003, you'll find a solid background with nationally recognized services, such as the BBB and the Chamber of Commerce.",
               "body_div_classes" => "image",
               "outer_div_classes" => "col-md-4 col-sm-6",
               "inner_div_classes" => "color-primary",
               "image_src" => "img/sections/opt-great-reputation.jpg",
           ]
        ]);

        DB::table('site_cards')->insert([
            [
                "title" => "One place for all things retirement..",
                "pages" => "home",
                "section_number" => "two",
                "html_body" => "Our company is build upon a nationwide network of experts in the retirement industry. Since American Senior Benefits' founding in 2003, you'll find a solid background with nationally recognized services, such as the BBB and the Chamber of Commerce.",
                "body_div_classes" => "list-style checkmark",
                "outer_div_classes" => "col-md-4 col-sm-12",
                "inner_div_classes" => "color-primary",
                "image_src" => "img/sections/opt-great-reputation.jpg",
                "href_text" => "Learn More About Our Services",
            ]
        ]);


        /**
         * Meet Our Team Cards
         */
        DB::table('site_cards')->insert([
            //
            [
                "title" => "Rich Schlemmer",
                "pages" => "team_contact_partial",
                "section_number" => "row_one",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Shawn Bantz",
                "pages" => "team_contact_partial",
                "section_number" => "row_one",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Russ Atkins",
                "pages" => "team_contact_partial",
                "section_number" => "row_one",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Shawn Lange",
                "pages" => "team_contact_partial",
                "section_number" => "row_one",
                "outer_div_classes" => "col-lg-3 col-sm-6 col-xs-12",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Rich Finkelstein",
                "pages" => "team_contact_partial",
                "section_number" => "row_two",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Monica Crain",
                "pages" => "team_contact_partial",
                "section_number" => "row_two",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Richard Edwards",
                "pages" => "team_contact_partial",
                "section_number" => "row_two",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Tina Dubowy",
                "pages" => "team_contact_partial",
                "section_number" => "row_two",
                "outer_div_classes" => "col-lg-3 col-sm-6 col-xs-12",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Anita Warsche",
                "pages" => "team_contact_partial",
                "section_number" => "row_three",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Don Havens",
                "pages" => "team_contact_partial",
                "section_number" => "row_three",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Ricky Rogalski",
                "pages" => "team_contact_partial",
                "section_number" => "row_three",
                "outer_div_classes" => "col-lg-3 col-sm-6 res-s-bttm",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ],
            [
                "title" => "Stephen Elliott",
                "pages" => "team_contact_partial",
                "section_number" => "row_three",
                "outer_div_classes" => "col-lg-3 col-sm-6 col-xs-12",
                "inner_div_classes" => "txt-entry bg-white pd-x3 round",
            ]
        ]);

        /**
         * SERVICES Page - 2 rows, 6 cards
         */
        DB::table('site_cards')->insert([
            // Row one cards on Home Page
            [
                "title" => "Annuities",
                "pages" => "service_details",
                "section_number" => "row_one",
                "html_body" => "Steady, safe streams of income that can’t be outlived",
                "body_div_classes" => "fbox-content",
                "outer_div_classes" => "feature boxed",
                "inner_div_classes" => "fbox-over",
                "image_src" => "img/sections/opt-asset-protection-two.png",
                "image_div_classes" => "fbox-photo",
                "href" => "/annuity-services"
            ],
            [
                "title" => "Medicare 360",
                "pages" => "service_details",
                "section_number" => "row_one",
                "html_body" => "Extensive Medicare Supplement/Advantage options, including part D",
                "body_div_classes" => "fbox-content",
                "outer_div_classes" => "feature boxed",
                "inner_div_classes" => "fbox-over",
                "image_src" => "img/sections/opt-medicare-card.jpg",
                "image_div_classes" => "fbox-photo",
                "href" => "/medicare-services"
            ],
            [
                "title" => "Retirement Planning",
                "pages" => "service_details",
                "section_number" => "row_one",
                "html_body" => "We create strategies that are manageable, realistic, and beneficial. Built to stand the test of time.",
                "body_div_classes" => "fbox-content",
                "outer_div_classes" => "feature boxed",
                "inner_div_classes" => "fbox-over",
                "image_src" => "img/sections/opt-retirement-planning-two.jpg",
                "image_div_classes" => "fbox-photo",
                "href" => "/retirement-planning-services"
            ],
            [
                "title" => "Final Expense & Life",
                "pages" => "service_details",
                "section_number" => "row_two",
                "html_body" => "All final expense and life insurance options, including <em>whole life</em>, <em>Term</em>, <em>Universal Life</em>, and <em>Graded Benefits plans</em>",
                "body_div_classes" => "fbox-content",
                "outer_div_classes" => "feature boxed",
                "inner_div_classes" => "fbox-over",
                "image_src" => "img/services/sm-kid-against-glass-368x245.jpg",
                "image_div_classes" => "fbox-photo",
                "href" => "/life-insurance-services"
            ],
            [
                "title" => "Extended Care",
                "pages" => "service_details",
                "section_number" => "row_two",
                "html_body" => "Our wide ranging options for extended care benefits allow you to plan and help to mitigate the rising costs of in-home or facility-based care",
                "body_div_classes" => "fbox-content",
                "outer_div_classes" => "feature boxed",
                "inner_div_classes" => "fbox-over",
                "image_src" => "img/sections/opt-medicare-service-two.jpg",
                "image_div_classes" => "fbox-photo",
                "href" => "/extended-care-services"
            ],
            [
                "title" => "Specialized Healthcare",
                "pages" => "service_details",
                "section_number" => "row_two",
                "html_body" => "Begin planning for any gaps in coverage with <em>dental</em>, <em>vision</em>, <em>critical illness</em>, <em>disabiliy</em>, and many more benefits to choose from...",
                "body_div_classes" => "fbox-content",
                "outer_div_classes" => "feature boxed",
                "inner_div_classes" => "fbox-over",
                "image_src" => "img/sections/senior-services-healthcare.jpg",
                "image_div_classes" => "fbox-photo",
                "href" => "/specialized-healthcare-services"
            ]
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
