<?php

use Illuminate\Database\Seeder;

class WebpageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //FROM HERO - TO BE USED AS A BANNER ITEM or SERVICE DETAILS ITEM...
        //$headingTwo = "Risk Free Retirement Strategies";
        //$subheadingTwo = "Achieving a relaxing and comfortable retirement can be an art - and for some, a nail-bitting rollercoaster. This is generally from bad advice or the misinformation that's advertised so often. Talk face-to-face with someone who's accountable to what they say to you and avoid these pitfalls with your nestegg.";


        /**
         * HOME PAGE data
         */

        /** =========================================================
         *  Home Page Slides
         *  Slide 1
         */

        DB::table('webpage_data')->insert([
            //Home hero, slide one
            [
                "pagename" => 'home',
                "category" => 'homeSlider',
                'html_id' => 'responsiveHeroOne',
                "heading" => "Full Medicare Services",
                "subheading" => "Whether Medicare Advantage, Supplements, Special Needs, or anything in between - you can throw it all at us!",
                "classes" => 'banner-text al-left pos-left light',
                "type" => 'bannerData'
            ]
        ]);

        /** =========================================================
         *  Slide 2
         */
        DB::table('webpage_data')->insert([
            //Home hero, slide two
            [
                "pagename" => 'home',
                'html_id' => 'responsiveHeroTwo',
                "category" => 'homeSlider',
                "heading" => "Risk Free Retirement Strategies",
                "subheading" => "Full financial planning and advisement services to help hit your goals and mitigate your financial risk.",
                "classes" => 'banner-text al-left pos-right light',
                "type" => 'bannerData'
            ]
        ]);

        /** =========================================================
         *  Slide 2
         */
        DB::table('webpage_data')->insert([
            //Home hero, slide two
            [
                "pagename" => 'home',
                'html_id' => 'responsiveHeroThree',
                "category" => 'homeSlider',
                "heading" => "Full Service Retirement Agency",
                "subheading" => "Whether retired or not, you still gain to access over 150 different insurance providers in one place. We do the shopping for you!",
                "classes" => 'banner-text al-left pos-left light',
                "type" => 'bannerData'
            ]
        ]);

        /**
         * ABOUT PAGE data
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'banner',
                "heading" => 'A “People First” philosophy',
                "subheading" => "At American Senior Benefits we are dedicated to serving those in need of insurance, especially seniors. We are proudly independent, answering only to our customers.",
                "type" => 'bannerData',
                "body" => ''
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'callToAction',
                "body" => 'Affordable and effective solutions that span the entirety of the retirement industry.',
                "type" => 'bannerCallToAction',
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'sectionHeading',
                "heading" => "The ASB Southwest Approach",
                "type" => 'heading',
                "body" => '',
            ]
        ]);
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'sectionOneContent',
                "heading" => "Prepared",
                "type" => 'headingAndParagraph',
                "body" => "Each member of our team undergoes a thorough training process when they get started! They also have the chance to ride-along with the most experienced members of our team. This isn't always the case with other brokers so we make sure to take extra care in making all new members feel welcome and that they're being taken care of when they come on board. We also maintain weekly trainings that help to cover the wide variety of topics throughout our industry. There's a lot to learn and a lot to teach! We really love whenever we get our team together, we have a lot of fun and we all help each other to understand the more complicated topics whenever they come up!",
            ]
        ]);
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'sectionOneContent',
                "heading" => "Informed",
                "type" => 'headingAndParagraph',
                "body" => "We go to great lengths to make sure that our team is well-informed and up-to-date on all the newest changes and regulations across the industry. Whether it be new Medicare updates, the newest and best benefits, or it's just a matter of making sure our clients are informed of any major changes, we convene on a weekly basis to cover any and all important topics that come up",
            ]
        ]);
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'sectionOneContent',
                "heading" => "Ready To Help",
                "type" => 'headingAndParagraph',
                "body" => "Each team member brings with them years of industry experience that they share with agents and managers for a culture of teamwork and success.",
            ]
        ]);

        //About Page => Section two items
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'sectionTwoContent',
                "type" => 'headingAndParagraph',
                "heading" => "Meet Our Team",
                "body" => "We attract the highest level of quality professionals in part due to our hybrid approach – agents enjoy the training and support of a dedicated company with the breadth of products available to independent agents.",
                "href" => "/contact#contact-our-team",
                "href_text" => "More Details",
            ],
            [
                "pagename" => 'about',
                "category" => 'sectionTwoContent',
                "type" => 'headingAndParagraph',
                "heading" => "The ASB Experience",
                "body" => "At a time when it’s hard to distinguish one insurance company from another, American Senior Benefits (ASB) is unique in the industry. We're dedicated to making insurance decisions easier, more informed, and highly personalized for our clients.",
                "href" => "/the-asb-experience",
                "href_text" => "Learn More",
            ],
            [
                "pagename" => 'about',
                "category" => 'sectionTwoContent',
                "type" => 'headingAndParagraph',
                "heading" => "Diverse Resources",
                "body" => "It’s a household name only if it works in your house. That’s why American Senior Benefits selectively partners with highly rated companies that have a demonstrated track record of success within the senior market. Today, we have more than 150 carrier relationships that help us create a best-in-class product portfolio that addresses virtually every customer’s insurance and financial needs.",
                "href" => "/services",
                "href_text" => "View Our Services",
            ]
        ]);

        /**
         * SERVICES page
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'services',
                "category" => 'banner',
                "heading" => "Full Medicare Services",
                "subheading" => "Whether Medicare Advantage, Supplements, Special Needs, or anything in between... our friendly team is licensed, experienced, and well-equipped to handle any Medicare-related topic you'd like to throw at them!",
                "type" => 'bannerData',
            ]
        ]);
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'services',
                "category" => 'callToAction',
                "body" => 'Take advantage of over 150 different contracts we have with different carriers throughout the country...',
                "type" => 'bannerCallToAction',
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'services',
                "category" => 'sectionContent',
                "heading" => "Covering all retirement needs",
                "body" => "It is important for any agent representing American Senior Benefits to have at their fingertips solutions from the largest and most respected companies in the industry. In fact, some products are only available through us — such as a scholarship program that helps families defer the rising cost of higher education while simultaneously caring for their own financial needs.",
                "type" => 'headingAndParagraph',
            ]
        ]);


        /**
         * CLIENT RESOURCES page
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'clientResources',
                "category" => 'banner',
                "heading" => "Commonly requested resources",
                "subheading" => "If you don't see the information you're looking for, please don't hesitate to <\a href='{{ route('contactPage') }}'>reach out to us anytime.<\/a>",
                "type" => 'bannerData',
            ]
        ]);


        DB::table('webpage_data')->insert([
            [
                "pagename" => 'clientResources',
                "category" => 'callToAction',
                "classes" => 'btn-link link-arrow',
                "body" => 'Get a quick quote or reach out for more information regarding any of the carriers or services you see listed throughout our site.',
                "href" => '<\a href="{{ route("getAQuotePage") }}">Get Started<\/a>',
                "type" => 'bannerCallToAction',
            ]

        ]);


        /**
         * CONTACT page data
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'contact',
                "category" => 'banner',
                "heading" => "A “People First” philosophy",
                "subheading" => "TBD",
                "type" => 'bannerData',
            ]
        ]);


        DB::table('webpage_data')->insert([
            [
                "pagename" => 'contact',
                "category" => 'callToAction',
                "body" => "Get multiple quotes and shop a multitiude of products, all within one request",
                "href" => '<\a href="{{ route("getAQuotePage") }}">Try It Out<\/a>',
                "type" => 'bannerCallToAction',
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'contact',
                "category" => 'sectionHeading',
                "heading" => "The ASB Southwest Approach",
                "type" => 'heading',
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'contact',
                "category" => 'sectionContent',
                "heading" => "Prepared",
                "type" => 'headingAndParagraph',
                "body" => "Each member of our team undergoes a thorough training process when they get started! They also have the chance to ride-along with the most experienced members of our team. This isn't always the case with other brokers so we make sure to take extra care in making all new members feel welcome and that they're being taken care of when they come on board. We also maintain weekly trainings that help to cover the wide variety of topics throughout our industry. There's a lot to learn and a lot to teach! We really love whenever we get our team together, we have a lot of fun and we all help each other to understand the more complicated topics whenever they come up!",
            ]
        ]);

        /**
         * SIDEBAR-Main data
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'sidebar_main',
                "category" => 'owner_statement',
                "heading" => "An Open Letter To Our Website Visitors",
                "body" => "I've enjoyed 26 years of successful experience in the Insurance industry, and 16 of those years in a management capacity, including the last 11 years in a Branch and/or Regional Manager role. This experience has provided me the opportunity to assist countless clients with the peace of mind that comes with knowing that they and their families are protected. In addition, my experience and management skills have helped to build many successful careers based on the same integrity and client focus vital to the quality service that every client deserves. I am married to my wonderful wife Barbie, and I have four grown Sons, and TEN wonderful grandchildren.",
                "type" => 'sidebarData',
            ]
        ]);


    } // END run function
}
