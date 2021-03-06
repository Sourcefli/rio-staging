<?php

namespace App\StaticData;

class BlogPage
{

    public static function bannerData()
    {

        option([
            "blog_banner_heading" => "A “People First” philosophy",
            "blog_banner_subheading" => "At American Senior Benefits we are dedicated to serving those in need of insurance, especially seniors. We are proudly independent, answering only to our customers.",
        ]);

    }

    public static function bannerCtaData()
    {

        option([
            "blog_cta_text" => "",
            "blog_cta_link" => "",
        ]);

    }

    public static function sectionOne()
    {

        option([

            "blog_section1_heading" => "The ASB Southwest Approach",

            "blog_section1_paragraph1_title" => "Prepared",
            "blog_section1_paragraph1_paragraph" => "Each member of our team undergoes a thorough training process when they get started! They also have the chance to ride-along with the most experienced members of our team. This isn't always the case with other brokers so we make sure to take extra care in making all new members feel welcome and that they're being taken care of when they come on board. We also maintain weekly trainings that help to cover the wide variety of topics throughout our industry. There's a lot to learn and a lot to teach! We really love whenever we get our team together, we have a lot of fun and we all help each other to understand the more complicated topics whenever they come up!",

            "blog_section1_paragraph2_title" => "Informed",
            "blog_section1_paragraph2_paragraph" => "We go to great lengths to make sure that our team is well-informed and up-to-date on all the newest changes and regulations across the industry. Whether it be new Medicare updates, the newest and best benefits, or it's just a matter of making sure our clients are informed of any major changes, we convene on a weekly basis to cover any and all important topics that come up",

            "blog_section1_paragraph3_title" => "Eager To Help",
            "blog_section1_paragraph3_paragraph" => "",
        ]);

    }


}
