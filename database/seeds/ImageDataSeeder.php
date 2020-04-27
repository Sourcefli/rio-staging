<?php

use Illuminate\Database\Seeder;

class ImageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        /*
        * HERO IMAGES
        * => Seeds OK for this category!
        */
        DB::table('images')->insert([


            [
                 //WORKS OK

                'title' => 'about',
                'default_src' => 'img/heros/md-about-our-retirement-services.jpeg',
                'small_src' => 'img/heros/sm-about-our-retirement-services.jpeg',
                'medium_src' => 'img/heros/md-about-our-retirement-services.jpeg',
                'large_src' => 'img/heros/lg-about-our-retirement-services.jpeg',
                'xlarge_src' => 'img/heros/lg-about-our-retirement-services.jpeg',
                'alt_text' => 'Learn about ASB Southwest\'s retirement services',
                'category' => 'hero_images',
            ],
            [

                'title' => 'services',
                'default_src' => 'img/heros/lg-legacy-on-the-wind.png',
                'small_src' => 'img/heros/lg-legacy-on-the-wind.png',
                'medium_src' => 'img/heros/lg-legacy-on-the-wind.png',
                'large_src' => 'img/heros/lg-legacy-on-the-wind.png',
                'xlarge_src' => 'img/heros/lg-legacy-on-the-wind.png',
                'alt_text' => 'Learn about ASB Southwest\'s legacy and burial planning services',
                'category' => 'hero_images',
            ],
            [
                'title' => 'faqs',
                'default_src' => 'img/heros/lg-customer-service-department-1168x520.jpg',
                'small_src' => 'img/heros/lg-customer-service-department-1168x520.jpg',
                'medium_src' => 'img/heros/lg-customer-service-department-1168x520.jpg',
                'large_src' => 'img/heros/lg-customer-service-department-1168x520.jpg',
                'xlarge_src' => 'img/heros/lg-customer-service-department-1168x520.jpg',
                'alt_text' => 'ASB Southwest\'s most frequently asked questions',
                'category' => 'hero_images',
            ],
            [
                'title' => 'clientResources',
                'default_src' => 'img/heros/lg-caregiver-pushing-wheelchair-through-the-meadows-1920x780.jpg',
                'small_src' => 'img/heros/sm-caregiver-pushing-wheelchair-through-the-meadows.jpg',
                'medium_src' => 'img/heros/md-caregiver-pushing-wheelchair-through-the-meadows.jpg',
                'large_src' => 'img/heros/lg-caregiver-pushing-wheelchair-through-the-meadows-1920x780.jpg',
                'xlarge_src' => 'img/heros/lg-caregiver-pushing-wheelchair-through-the-meadows-1920x780.jpg',
                'alt_text' => 'ASB Southwest\'s client resources for most common questions',
                'category' => 'hero_images',
            ],
            [
                'title' => 'contact',
                'default_src' => 'img/heros/lg-family-looking-up-1919x659.jpg',
                'small_src' => 'img/heros/sm-family-looking-up-580x193.jpg',
                'medium_src' => 'img/heros/md-family-looking-up-786x270.jpg',
                'large_src' => 'img/heros/lg-family-looking-up-1919x659.jpg',
                'xlarge_src' => 'img/heros/lg-family-looking-up-1919x659.jpg',
                'alt_text' => 'Contact ASB Southwest',
                'category' => 'hero_images',
            ],
            [
                'title' => 'fallback',
                'default_src' => 'img/heros/lg-financial-well-being-with-american-senior-benefits.png',
                'small_src' => 'img/heros/lg-financial-well-being-with-american-senior-benefits.png',
                'medium_src' => 'img/heros/lg-financial-well-being-with-american-senior-benefits.png',
                'large_src' => 'img/heros/lg-financial-well-being-with-american-senior-benefits.png',
                'xlarge_src' => 'img/heros/lg-financial-well-being-with-american-senior-benefits.png',
                'alt_text' => 'Get in touch with ASB Southwest\'s offices',
                'category' => 'hero_images',
            ],

        ]);


        /*
         * SERVICES Images
         * => Seeds OK for this category!
         **/
        DB::table('images')->insert([

            [
                'title' => 'Wise Retirement',
                'default_src' => 'img/services/sm-investing-trend-chart-368x245.jpg',
                'alt_text' => 'Wise Retirement options by ASB Southwest',
                'category' => 'services_images',
            ],
            [
                'title' => 'Protected Investments',
                'default_src' => 'img/services/sm-money-saving-parent.jpg',
                'alt_text' => 'Protected Investment options by ASB Southwest',
                'category' => 'services_images',
            ],
            [
                'title' => 'Protect Your Nest Egg',
                'default_src' => 'img/services/sm-golden-eggs-diversification.jpg',
                'alt_text' => 'Protect your nest-egg by ASB Southwest',
                'category' => 'services_images',
            ],
            [
                'title' => 'Expecting The Unexpected',
                'default_src' => 'img/services/sm-multiple-decisions.jpg',
                'alt_text' => 'Learn to expect the unexpected with ASB Southwest',
                'category' => 'services_images',
            ],
            [
                'title' => 'Medicare 360',
                'default_src' => 'img/services/sm-medicare-magnified.jpg',
                'alt_text' => 'Full Medicare services with ASB Southwest',
                'category' => 'services_images',
            ],
            [
                'title' => 'Burial Preperation',
                'default_src' => 'img/services/sm-kid-against-glass-368x245.jpg',
                'alt_text' => 'Burial preperations services with ASB Southwest',
                'category' => 'services_images',
            ]
        ]);


        /*
         * AGENT Images
         * => Seeds OK for this category!
         **/
        DB::table('images')->insert([

            [
                'title' => 'Rich Schlemmer',
                'default_src' => 'img/asb_staff/rich_s.png',
                'alt_text' => 'Rich Schlemmer at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Shawn Bantz',
                'default_src' => 'img/asb_staff/shawn_b.png',
                'alt_text' => 'Shawn Bantz at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Russ Atkins',
                'default_src' => 'img/asb_staff/russ_a.png',
                'alt_text' => 'Russ Atkins at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Monica Crain',
                'default_src' => 'img/asb_staff/monica_c.png',
                'alt_text' => 'Monica Crain at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Shawn Lange',
                'default_src' => 'img/asb_staff/shawn_l.png',
                'alt_text' => 'Shawn Lange at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Rich Fink',
                'default_src' => 'img/asb_staff/rich_f.png',
                'alt_text' => 'Rich Fink at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Richard Edwards',
                'default_src' => 'img/asb_staff/richard_e.png',
                'alt_text' => 'Richard Edwards at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Ricky Rogalski',
                'default_src' => 'img/asb_staff/ricky_r.png',
                'alt_text' => 'Ricky Rogalski at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Stephen Elliott',
                'default_src' => 'img/asb_staff/stephen_e.png',
                'alt_text' => 'Stephen Elliott at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Don Havens',
                'default_src' => 'img/asb_staff/don_h.png',
                'alt_text' => 'Don Havens at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ],
            [
                'title' => 'Jonathan Havens',
                'default_src' => 'img/asb_staff/jonathan_h.png',
                'alt_text' => 'Jonathan Havens at American Senior Benefits Southwest',
                'category' => 'staff_images',
            ]
        ]);


        /*
        * OFFICE Images
        * => Seeds OK for this category!
        **/
        DB::table('images')->insert([

            [
                'title' => 'Las Vegas Office Mid-Hallway - Vert',
                'default_src' => 'img/asb_office/midhallway_vert.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Mid-Hallway - Horiz',
                'default_src' => 'img/asb_office/midhallway_horiz.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Hallway - Vert',
                'default_src' => 'img/asb_office/hallway_vert.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Hallway - Horiz',
                'default_src' => 'img/asb_office/hallway_horiz.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Front Door - Horiz',
                'default_src' => 'img/asb_office/front_door.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Front Desk - Horiz',
                'default_src' => 'img/asb_office/front_desk.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Lobby Seating',
                'default_src' => 'img/asb_office/lobby_seating.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
            [
                'title' => 'Las Vegas Office Conference Room',
                'default_src' => 'img/asb_office/conference_room.jpg',
                'alt_text' => 'Las Vegas office at American Senior Benefits Southwest',
                'category' => 'office_images',
            ],
        ]);


        /*
         * CARRIER Images
         * => Seeds OK for this category!
         **/
        DB::table('images')->insert([

            [
                'title' => 'Aetna Logo',
                'default_src' => 'img/carriers/aetna-logo-sm.jpg',
                'alt_text' => 'Aetna company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'Cigna',
                'default_src' => 'img/carriers/cigna-logo-sm.jpg',
                'alt_text' => 'Cigna company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'Mutual of Omaha Logo',
                'default_src' => 'img/carriers/mutual-of-omaha-logo-sm.png',
                'alt_text' => 'Mutual of Omaha company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'Transamerica',
                'default_src' => 'img/carriers/transamerica-logo-sm.jpg',
                'alt_text' => 'Transamerica company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'Humana',
                'default_src' => 'img/carriers/humana-logo-sm.jpg',
                'alt_text' => 'Humana company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'United Healthcare',
                'default_src' => 'img/carriers/united-healthcare-logo-sm.jpg',
                'alt_text' => 'United Healthcare company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'AIG',
                'default_src' => 'img/carriers/aig-logo-sm.jpg',
                'alt_text' => 'AIG company logo',
                'category' => 'carrier_images',
            ],
            [
                'title' => 'Royal Neighbors of America',
                'default_src' => 'img/carriers/royal-neighbors-logo-sm.jpg',
                'alt_text' => 'Royal Neighbors of America company logo',
                'category' => 'carrier_images',
            ],
        ]);


        /*
         * LOGO Images
         * => src strings were too long...migration limitation adjusted
         **/
        DB::table('images')->insert([

            [
                'title' => 'White Text Background Cursive',
                'default_src' => 'img/logos/white-version/asbsw-white-cursive-512x191.png',
                'small_src' => 'img/logos/white-version/american-senior-benefits-southwest-with-white-bg-cursive-212x72.png',
                'medium_src' => 'img/logos/white-version/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
                'large_src' => 'img/logos/white-version/asbsw-white-cursive-512x191.png',
                'xlarge_src' => 'img/logos/white-version/asbsw-white-cursive-512x191.png',
                'alt_text' => 'ASBsw Logo with cursive',
                'category' => 'logo_images',
            ],
            [
                'title' => 'White Background Blue Cursive',
                'default_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-212x72.png',
                'small_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-212x72.png',
                'medium_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
                'large_src' => 'img/logos/asbsw-cursive-512x191.png',
                'xlarge_src' => 'img/logos/asbsw-cursive-512x191.png',
                'alt_text' => 'ASBsw Logo with cursive',
                'category' => 'logo_images',
            ],
            [
                'title' => 'Integrity No Background',
                'default_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-212x72.png',
                'small_src' => 'img/logos/asb-integrity-logo@70.png',
                'medium_src' => 'img/logos/asb-integrity-logo@70.png',
                'large_src' => 'img/logos/asb-integrity-logo@300.png',
                'xlarge_src' => 'img/logos/asb-integrity-logo@300.png',
                'alt_text' => 'ASBsw Logo with Integrity logo',
                'category' => 'logo_images',
            ],
        ]);


        /*
         * CITY Images
         * => Seeds OK for this category!
         **/
        DB::table('images')->insert([

            [
                'title' => 'Vegas Flyover',
                'default_src' => 'img/city/vegas-flyover-1506x768.jpeg',
                'alt_text' => 'Flyover view of the city of Las Vegas',
                'category' => 'city_images',
            ],
            [
                'title' => 'Vegas Flyover Two',
                'default_src' => 'img/city/vegas-flyover-two-1506x1004.jpg',
                'alt_text' => 'Flyover view of the city of Las Vegas',
                'category' => 'city_images',
            ],
            [
                'title' => 'Vegas Sign',
                'default_src' => 'img/city/vegas_sign.jpg',
                'alt_text' => 'View of welcome to Las Vegas sign',
                'category' => 'city_images',
            ],
            [
                'title' => 'San Diego Harbor',
                'default_src' => 'img/city/san_diego_with_bridge.jpg',
                'alt_text' => 'View of San Diego Harbor',
                'category' => 'city_images',
            ],
            [
                'title' => 'San Diego Skyline',
                'default_src' => 'img/city/sd_skyline.jpg',
                'alt_text' => 'View of San Diego Skyline',
                'category' => 'city_images',
            ],
            [
                'title' => 'Sacramento Bridge At Night',
                'default_src' => 'img/city/sac_bridge_night.jpg',
                'alt_text' => 'View of Sacramento bridge at night',
                'category' => 'city_images',
            ],
            [
                'title' => 'Sacramento Sunset',
                'default_src' => 'img/city/sac_daytime.png',
                'alt_text' => 'View of Sacramento skyline during the sunset',
                'category' => 'city_images',
            ],
            [
                'title' => 'Sacramento Nighttime Skyline',
                'default_src' => 'img/city/sac_night_skyline.jpg',
                'alt_text' => 'View of Sacramento skyline at night',
                'category' => 'city_images',
            ]
        ]);

        /**
         * SERVICE DETAIL PAGES
         *  Hero Images
         */
        DB::table('images')->insert([

            [
                'title' => 'Annuity Services',
                'default_src' => 'img/heros/services-heros/child-piggybacking-mom-1920x520.jpg',
                'alt_text' => 'Annuity Services With American Senior Benefits Southwest',
                'category' => 'services_hero_images',
                'webpage_data_id' => 25
            ],
            [
                'title' => 'Extended Care Services',
                'default_src' => 'img/heros/services-heros/young-family-in-forest-1920x520.jpg',
                'alt_text' => 'Extended Care Services With American Senior Benefits Southwest',
                'category' => 'services_hero_images',
                'webpage_data_id' => 26
            ],
            [
                'title' => 'Life Insurance and Final Expense Services',
                'default_src' => 'img/heros/services-heros/kids-graduation-1920x520.jpg',
                'alt_text' => 'Life Insurance and Final Expense Services With American Senior Benefits Southwest',
                'category' => 'services_hero_images',
                'webpage_data_id' => 27
            ],
            [
                'title' => 'Medicare Services',
                'default_src' => 'img/heros/services-heros/newborn-laying-on-mom-1920x520.jpg',
                'alt_text' => 'Medicare Services With American Senior Benefits Southwest',
                'category' => 'services_hero_images',
                'webpage_data_id' => 28
            ],
            [
                'title' => 'Retirement Planning Services',
                'default_src' => 'img/heros/services-heros/kid-piggybacking-dad-dirt-road.webp',
                'alt_text' => 'Retirement Planning Services With American Senior Benefits Southwest',
                'category' => 'services_hero_images',
                'webpage_data_id' => 29
            ],
            [
                'title' => 'Specialized Healthcare Services',
                'default_src' => 'img/heros/services-heros/two-kids-laying-in-the-grass-1920x520.jpg',
                'alt_text' => 'RSpecialized Healthcare Services With American Senior Benefits Southwest',
                'category' => 'services_hero_images',
                'webpage_data_id' => 30
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
