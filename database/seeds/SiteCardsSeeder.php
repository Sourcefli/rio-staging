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
        DB::table('site_cards')->insert([
            [
                "title" => "One-Stop Medicare Shop",
                "pages" => "services",
                "html_title" => "Comprehensive Medicare <\br> Store",
                "summary" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 style-alt center",
                "image_classes" => "fbox-photo",
                "body_classes" => "fbox-content",
                "href" => "/service-details?title=medicare-services",
                "image_src" => "img/sections/opt-medicare-service-two.jpg",
                "fake_image_src" => "image/photo-md-f.jpg"
            ],
            [
                "title" => "Final Expense Solutions",
                "pages" => "services",
                "html_title" => "Final Expense <\br> Solutions",
                "summary" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 center",
                "image_classes" => "fbox-photo",
                "body_classes" => "fbox-content",
                "href" => "/service-details?title=final-expenses",
                "image_src" => "img/sections/opt-burial-protection.jpg",
                "fake_image_src" => "image/photo-md-f.jpg"
            ],
            [
                "title" => "Income Planning And Protection",
                "pages" => "services",
                "html_title" => "Income Planning <\br> And Protection",
                "summary" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 style-alt center",
                "image_classes" => "fbox-photo",
                "body_classes" => "fbox-content",
                "href" => "/service-details?title=income-protection",
                "image_src" => "img/sections/opt-asset-protection-two.png",
                "fake_image_src" => "image/photo-md-f.jpg"
            ],
            [
                "title" => "Dental And Vision Comparisons",
                "pages" => "services",
                "html_title" => "Dental And <\br> Vision Comparisons",
                "summary" => "summary goes here...",
                "outer_div_classes" => "col-md-3 col-sm-6 col-xs-6",
                "inner_div_classes" => "feature feature-s7 center",
                "image_classes" => "fbox-photo",
                "body_classes" => "fbox-content",
                "href" => "/service-details?title=dental-vision",
                "image_src" => "img/sections/opt-dentist-service.png",
                "fake_image_src" => "image/photo-md-f.jpg"
            ]
        ]);
    }
}
