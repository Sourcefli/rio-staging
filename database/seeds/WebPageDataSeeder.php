<?php

use Illuminate\Database\Seeder;

class WebPageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('webpage_data')->insert([

            /**
             * ABOUT PAGE data
             */
            [
                "pagename" => 'about',
                "category" => 'banner',
                "heading" => 'A “People First” philosophy',
                "subheading" => "At American Senior Benefits we are dedicated to serving those in need of insurance, especially seniors. We are proudly independent, answering only to our customers.",
                "type" => 'bannerData',
                "body" => ''
            ],
            [
                "pagename" => 'about',
                "category" => 'sectionHeading',
                "heading" => "The ASB Southwest Approach",
                "type" => 'heading',
            ],
            [
                "pagename" => 'about',
                "category" => 'sectionContent',
                "heading" => "Prepared",
                "type" => 'headingAndParagraph',
                "body" => "Each member of our team undergoes a thorough training process when they get started! They also have the chance to ride-along with the most experienced members of our team. This isn't always the case with other brokers so we make sure to take extra care in making all new members feel welcome and that they're being taken care of when they come on board. We also maintain weekly trainings that help to cover the wide variety of topics throughout our industry. There's a lot to learn and a lot to teach! We really love whenever we get our team together, we have a lot of fun and we all help each other to understand the more complicated topics whenever they come up!",
            ],
            [
                "pagename" => 'about',
                "category" => 'sectionContent',
                "heading" => "Informed",
                "type" => 'headingAndParagraph',
                "body" => "We go to great lengths to make sure that our team is well-informed and up-to-date on all the newest changes and regulations across the industry. Whether it be new Medicare updates, the newest and best benefits, or it's just a matter of making sure our clients are informed of any major changes, we convene on a weekly basis to cover any and all important topics that come up",
            ],
            [
                "pagename" => 'about',
                "category" => 'sectionContent',
                "heading" => "Ready To Help",
                "type" => 'headingAndParagraph',
                "body" => "Each team member brings with them years of industry experience that they share with agents and managers for a culture of teamwork and success.",
            ],

            /**
             * CLIENT RESOURCES page
             */
            [
                "pagename" => 'clientResources',
                "category" => 'banner',
                "heading" => "Commonly requested resources",
                "subheading" => "If you don't see the information you're looking for, please don't hesitate to <\a href='{{ route('contactPage') }}'>reach out to us anytime.<\/a>",
                "type" => 'bannerData',
            ],
            [
                "pagename" => 'clientResources',
                "category" => 'callToAction',
                "classes" => 'btn-link link-arrow',
                "body" => 'Get a quick quote or reach out for more information regarding any of the carriers or services you see listed throughout our site.',
                "href" => '<\a href="{{ route("getAQuotePage") }}">Get Started<\/a>',
                "type" => 'bannerCallToAction',
            ],

        ]);
    }
}
