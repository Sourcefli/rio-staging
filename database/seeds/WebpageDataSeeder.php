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

        Schema::disableForeignKeyConstraints();

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
                "html_id" => 'about-hero',
                "heading" => 'A “People First” philosophy',
                "subheading" => "At American Senior Benefits we are dedicated to serving those in need of insurance, especially seniors. We are proudly independent, answering only to our customers.",
                "type" => 'bannerData',
                "image_id" => 1,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'about',
                "category" => 'callToAction',
                "href_text" => 'Get Started',
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
                "html_id" => 'services-hero',
                "heading" => "Full Medicare Services",
                "subheading" => "Whether Medicare Advantage, Supplements, Special Needs, or anything in between... our friendly team is licensed, experienced, and well-equipped to handle any Medicare-related topic you'd like to throw at them!",
                "type" => 'bannerData',
                "image_id" => 2,
            ]
        ]);
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'services',
                "category" => 'callToAction',
                "href_text" => 'Get Started',
                "body" => 'Take advantage of over 150 different contracts we have with different carriers throughout the country...',
                "type" => 'bannerCallToAction',
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'services',
                "category" => 'sectionContent',
                "heading" => "Covering all retirement needs",
                "body" => "It is important for any agent representing American Senior Benefits to have solutions at their fingertips from the largest and most respected companies in the industry. In fact, some products are only available through us — such as a scholarship program that helps families defer the rising cost of higher education while simultaneously caring for their own financial needs.",
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
                "html_id" => 'client-resources-hero',
                "heading" => "Commonly Requested Resources",
                "subheading" => "For a full list of available carriers, and their contact information, please email us at info@retirementinsuranceoptions.com",
                "type" => 'bannerData',
                "image_id" => 4,
            ]
        ]);


        DB::table('webpage_data')->insert([
            [
                "pagename" => 'clientResources',
                "category" => 'callToAction',
                "classes" => 'btn-link link-arrow',
                "body" => 'Get a quick quote or reach out for more information regarding any of the carriers or services you see listed throughout our site.',
                "href_text" => 'Get Started',
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
                "html_id" => 'contact-hero',
                "heading" => "We'd Love To Hear From You!",
                "subheading" => "Every time we help a customer make a decision that’s right for them, it makes them – & our organization – stronger.",
                "type" => 'bannerData',
                "image_id" => 5,
            ]
        ]);


        DB::table('webpage_data')->insert([
            [
                "pagename"   => 'contact',
                "category" => 'callToAction',
                "body" => "Get multiple quotes and shop a multitiude of products, all within one request",
                "href_text" => 'Give It A Try',
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
         * QUOTES page data
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'quote',
                "category" => 'banner',
                "html_id" => 'quote-hero',
                "heading" => "Request A Quote",
                "subheading" => "Our distinct advantage is our ability to compare quotes from over 150 carriers, for any type of retirement benefit - or benefits",
                "type" => 'bannerData',
                "image_id" => 6,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename"   => 'quote',
                "category" => 'callToAction',
                "body" => "Have questions? Feel free to reach out to our team.",
                "href_text" => 'Get In Touch',
                "type" => 'bannerCallToAction',
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

        /* ============ START =======================
                SERVICE DETAILS PAGES
         ============================================= */

        /**
         * All Services Banner Data
         *
         */
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'annuity_services',
                "category" => 'banner',
                "html_id" => 'service-details-hero',
                "heading" => "Annuity Services",
                "subheading" => "Our extensive selection of fixed and fixed index annuities can help you obtain reliable and predictable income throughout your retirement",
                "type" => 'bannerData',
                "body" => 'Annuity',
                "href" => '/annuity-services',
                "image_id" => 51,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'extended_care_services',
                "category" => 'banner',
                "html_id" => 'service-details-hero',
                "heading" => "Extended Care Services",
                "subheading" => "We have access to a broad range of solutions to pay costs that Medicare won’t cover, and we can provide protection against those future expenses any of us could face. Plus, we now offer new hybrid plans that cover both life insurance and long-term care.",
                "type" => 'bannerData',
                "body" => 'Extended Care',
                "href" => '/extended-care-services',
                "image_id" => 52,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'life_insurance_services',
                "category" => 'banner',
                "html_id" => 'service-details-hero',
                "heading" => "Life Insurance Services",
                "subheading" => "We help seniors shop smart. And as we believe life insurance is important at any age, we can help our clients protect against the high costs of funeral and burial expenses … and perhaps even leave a caring legacy for those left behind.",
                "type" => 'bannerData',
                "body" => 'Life Insurance and Final Expense',
                "href" => '/life-insurance-services',
                "image_id" => 53,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'medicare_services',
                "category" => 'banner',
                "html_id" => 'service-details-hero',
                "heading" => "Medicare Services",
                "subheading" => "The plans are standardized but the costs are not and do vary from company to company. We have many carrier partnerships to help ensure our affiliated agents can determine and then present the best solution for a client’s needs … and budget.",
                "type" => 'bannerData',
                "body" => 'Medicare',
                "href" => '/medicare-services',
                "image_id" => 54,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'banner',
                "html_id" => 'service-details-hero',
                "heading" => "Retirement Planning Services",
                "subheading" => "It is never too late to begin planning for a successful retirement (or early, for that matter). We can help you get the most from your assets now and in the years ahead.",
                "type" => 'bannerData',
                "body" => 'Retirement Planning',
                "href" => '/retirement-planning-services',
                "image_id" => 55,
            ]
        ]);

        DB::table('webpage_data')->insert([
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'banner',
                "html_id" => 'service-details-hero',
                "heading" => "Specialized Healthcare Services",
                "subheading" => "As Medicare’s coverage of those needs is limited, we offer a range of solutions that address dental and vision care as well as critical issues such as hospitalization, disability, cancer, stroke and heart attack. We can help you get ahead of the uncomfortable prospect of high medical bills.",
                "type" => 'bannerData',
                "body" => 'Specialized Healthcare',
                "href" => '/specialized-planning-services',
                "image_id" => 56,
            ]
        ]);

        /** ============================================================================
         * All SERVICE DETAIL PAGES => Page Content
         * Content Sections:
         * 1. Most Common Questions
         * 2. {Service} Options With ASBsw
         * 3. Common Scenarios Where {Service} Are Ideal
         */

        /** ============================
         *  -- START --
         *  Annuity Details Page Content
         */

        // 1. Most Common Annuity Questions Section
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_common_questions',
                "heading" => "Annuity Services Question 1",
                "body" => "Annuity Services Answer 1",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_common_questions',
                "heading" => "Annuity Services Question 2",
                "body" => "Annuity Services Answer 2",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_common_questions',
                "heading" => "Annuity Services Question 3",
                "body" => "Annuity Services Answer 3",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
        ]);

        // 2. Annuity Service Options With ASBsw
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_options',
                "heading" => "Annuity Option 1",
                "body" => "Annuity Option 1",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_options',
                "heading" => "Annuity Option 2",
                "body" => "Annuity Option 2",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_options',
                "heading" => "Annuity Option 3",
                "body" => "Annuity Option 3",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
        ]);

        // 3. Common Scenarios Where An Annuity is Ideal
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_scenarios',
                "heading" => "Annuity Scenario 1",
                "body" => "Annuity Scenario 1",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_scenarios',
                "heading" => "Annuity Scenario 2",
                "body" => "Annuity Scenario 2",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
            [
                "pagename" => 'annuity_services',
                "category" => 'annuity_scenarios',
                "heading" => "Annuity Scenario 3",
                "body" => "Annuity Scenario 3",
                "type" => 'annuity_services_content',
                "href" => '/annuity-services',
            ],
        ]);


        /** ============================
         *  -- START --
         *  Extended Care Details Page Content
         */

        // 1. Most Common Extended Care Questions Section
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_common_questions',
                "heading" => "Extended Care Services Question 1",
                "body" => "Extended Care Services Answer 1",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_common_questions',
                "heading" => "Extended Care Services Question 2",
                "body" => "Extended Care Services Answer 2",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_common_questions',
                "heading" => "Extended Care Services Question 3",
                "body" => "Extended Care Services Answer 3",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
        ]);

        // 2. Extended Care Service Options With ASBsw
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_options',
                "heading" => "Extended Care Option 1",
                "body" => "Extended Care Option 1",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_options',
                "heading" => "Extended Care Option 2",
                "body" => "Extended Care Option 2",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_options',
                "heading" => "Extended Care Option 3",
                "body" => "Extended Care Option 3",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
        ]);

        // 3. Common Scenarios Where Extended Care is Ideal
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_scenarios',
                "heading" => "Extended Care Scenario 1",
                "body" => "Extended Care Scenario 1",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_scenarios',
                "heading" => "Extended Care Scenario 2",
                "body" => "Extended Care Scenario 2",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
            [
                "pagename" => 'extended_care_services',
                "category" => 'extended_care_scenarios',
                "heading" => "Extended Care Scenario 3",
                "body" => "Extended Care Scenario 3",
                "type" => 'extended_care_services_content',
                "href" => '/extended-care-services',
            ],
        ]);


        /** ============================
         *  -- START --
         *  Life Insurance Details Page Content
         */

        // 1. Most Common Life Insurance Questions Section
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_common_questions',
                "heading" => "Life Insurance Services Question 1",
                "body" => "Life Insurance Services Answer 1",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_common_questions',
                "heading" => "Life Insurance Services Question 2",
                "body" => "Life Insurance Services Answer 2",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_common_questions',
                "heading" => "Life Insurance Services Question 3",
                "body" => "Life Insurance Services Answer 3",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
        ]);

        // 2. Life Insurance Service Options With ASBsw
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_options',
                "heading" => "Life Insurance Option 1",
                "body" => "Life Insurance Option 1",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_options',
                "heading" => "Life Insurance Option 2",
                "body" => "Life Insurance Option 2",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_options',
                "heading" => "Life Insurance Option 3",
                "body" => "Life Insurance Option 3",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
        ]);

        // 3. Common Scenarios Where Life Insurance is Ideal
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_scenarios',
                "heading" => "Life Insurance Scenario 1",
                "body" => "Life Insurance Scenario 1",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_scenarios',
                "heading" => "Life Insurance Scenario 2",
                "body" => "Life Insurance Scenario 2",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
            [
                "pagename" => 'life_insurance_services',
                "category" => 'life_insurance_scenarios',
                "heading" => "Life Insurance Scenario 3",
                "body" => "Life Insurance Scenario 3",
                "type" => 'life_insurance_services_content',
                "href" => '/life-insurance-services',
            ],
        ]);


        /** ============================
         *  -- START --
         *  Medicare Details Page Content
         */

        // 1. Most Common Medicare Questions Section
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_common_questions',
                "heading" => "Medicare Services Question 1",
                "body" => "Medicare Services Answer 1",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_common_questions',
                "heading" => "Medicare Services Question 2",
                "body" => "Medicare Services Answer 2",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_common_questions',
                "heading" => "Medicare Services Question 3",
                "body" => "Medicare Services Answer 3",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
        ]);

        // 2. Medicare Service Options With ASBsw
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_options',
                "heading" => "Medicare Option 1",
                "body" => "Medicare Option 1",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_options',
                "heading" => "Medicare Option 2",
                "body" => "Medicare Option 2",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_options',
                "heading" => "Medicare Option 3",
                "body" => "Medicare Option 3",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
        ]);

        // 3. Common Scenarios Where Medicare is Ideal
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_scenarios',
                "heading" => "Medicare Scenario 1",
                "body" => "Medicare Scenario 1",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_scenarios',
                "heading" => "Medicare Scenario 2",
                "body" => "Medicare Scenario 2",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
            [
                "pagename" => 'medicare_services',
                "category" => 'medicare_scenarios',
                "heading" => "Medicare Scenario 3",
                "body" => "Medicare Scenario 3",
                "type" => 'medicare_services_content',
                "href" => '/medicare-services',
            ],
        ]);


        /** ============================
         *  -- START --
         *  Retirement Planning Details Page Content
         */

        // 1. Most Common Retirement Planning Questions Section
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_common_questions',
                "heading" => "Retirement Planning Services Question 1",
                "body" => "Retirement Planning Services Answer 1",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_common_questions',
                "heading" => "Retirement Planning Services Question 2",
                "body" => "Retirement Planning Services Answer 2",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_common_questions',
                "heading" => "Retirement Planning Services Question 3",
                "body" => "Retirement Planning Services Answer 3",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
        ]);

        // 2. Retirement Planning Service Options With ASBsw
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_options',
                "heading" => "Retirement Planning Option 1",
                "body" => "Retirement Planning Option 1",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_options',
                "heading" => "Retirement Planning Option 2",
                "body" => "Retirement Planning Option 2",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_options',
                "heading" => "Retirement Planning Option 3",
                "body" => "Retirement Planning Option 3",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
        ]);

        // 3. Common Scenarios Where Retirement Planning is Ideal
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_scenarios',
                "heading" => "Retirement Planning Scenario 1",
                "body" => "Retirement Planning Scenario 1",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_scenarios',
                "heading" => "Retirement Planning Scenario 2",
                "body" => "Retirement Planning Scenario 2",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
            [
                "pagename" => 'retirement_planning_services',
                "category" => 'retirement_planning_scenarios',
                "heading" => "Retirement Planning Scenario 3",
                "body" => "Retirement Planning Scenario 3",
                "type" => 'retirement_planning_services_content',
                "href" => '/retirement-planning-services',
            ],
        ]);


        /** ============================
         *  -- START --
         *  Specialized Healthcare Details Page Content
         */

        // 1. Most Common Specialized Healthcare Questions Section
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_common_questions',
                "heading" => "Specialized Healthcare Services Question 1",
                "body" => "Specialized Healthcare Services Answer 1",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_common_questions',
                "heading" => "Specialized Healthcare Services Question 2",
                "body" => "Specialized Healthcare Services Answer 2",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_common_questions',
                "heading" => "Specialized Healthcare Services Question 3",
                "body" => "Specialized Healthcare Services Answer 3",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
        ]);

        // 2. Specialized Healthcare Service Options With ASBsw
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_options',
                "heading" => "Specialized Healthcare Option 1",
                "body" => "Specialized Healthcare Option 1",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_options',
                "heading" => "Specialized Healthcare Option 2",
                "body" => "Specialized Healthcare Option 2",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_options',
                "heading" => "Specialized Healthcare Option 3",
                "body" => "Specialized Healthcare Option 3",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
        ]);

        // 3. Common Scenarios Where Specialized Healthcare is Ideal
        DB::table('webpage_data')->insert([
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_scenarios',
                "heading" => "Specialized Healthcare Scenario 1",
                "body" => "Specialized Healthcare Scenario 1",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_scenarios',
                "heading" => "Specialized Healthcare Scenario 2",
                "body" => "Specialized Healthcare Scenario 2",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
            [
                "pagename" => 'specialized_healthcare_services',
                "category" => 'specialized_healthcare_scenarios',
                "heading" => "Specialized Healthcare Scenario 3",
                "body" => "Specialized Healthcare Scenario 3",
                "type" => 'specialized_healthcare_services_content',
                "href" => '/specialized-healthcare-services',
            ],
        ]);


        Schema::enableForeignKeyConstraints();
    } // END run function
}
