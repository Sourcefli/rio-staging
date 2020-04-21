<?php

use Illuminate\Database\Seeder;

class AgentsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('agents')->insert([
            [
                "first_name" => "Rich",
                "last_name" => "Schlemmer",
                "email" => "rschlemm@gmail.com",
                "phone" => "1 (702) 326-2554",
                "bio" => "Rich Schlemmers Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Certified Senior Advisor",
                "company_title" => "Agent",
                "facebook_url" => "https://facebook.com",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Income Protection",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Shawn",
                "last_name" => "Bantz",
                "email" => "shawnbantz@gmail.com",
                "phone" => "1 (402) 217-2315",
                "bio" => "Shawn Bantz Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Agent",
                "company_title" => "Agent",
                "facebook_url" => "https://facebook.com",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Income Protection",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Russel",
                "last_name" => "Atkins",
                "email" => "russatkins25@gmail.com",
                "phone" => "1 (702) 325-8805",
                "bio" => "Russel Atkins Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Agent",
                "company_title" => "Agent",
                "facebook_url" => "https://facebook.com",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Income Protection",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Shawn",
                "last_name" => "Lange",
                "email" => "shawnlange76@gmail.com",
                "phone" => "1 (702) 339-6003",
                "bio" => "Shawn Lange Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Agent",
                "company_title" => "Agent",
                "facebook_url" => "https://facebook.com",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Income Protection",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Rich",
                "last_name" => "Finkelstein",
                "email" => "richfink@yahoo.com",
                "phone" => "1 (310) 938-5345",
                "bio" => "Rich Finkelstein Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Financial Advisor",
                "company_title" => "Agent",
                "facebook_url" => "https://facebook.com",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Financial Advisor",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Monica",
                "last_name" => "Crain",
                "email" => "monicaw880@gmail.com",
                "phone" => "1 (503) 753-8056",
                "bio" => "Monica Crain Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Agent",
                "company_title" => "",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Income Protection",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Richard",
                "last_name" => "Edwards",
                "email" => "rck333@aol.com",
                "phone" => "1 (254)855-4238",
                "bio" => "Richard Edwards Bio",
                "started_on" => "2020-03-23",
                "company_role" => "Agent",
                "company_title" => "Team Member",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Life, Medicare, Income Protection",
                "team_id" => 4,
                "office_id" => 1
            ]

        ]);

        Schema::enableForeignKeyConstraints();
    }
}
