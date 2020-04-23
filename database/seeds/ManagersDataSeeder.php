<?php

use Illuminate\Database\Seeder;

class ManagersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('managers')->insert([
            [
                "first_name" => "Don",
                "last_name" => "Havens",
                "asb_id" => 255,
                "email" => "donald.havens@gmail.com",
                "phone" => "1 (702) 529-4118",
                "bio" => "Don Havens Bio...",
                "company_role" => "Regional Sales Manager",
                "company_title" => "RSM",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Management, Agent Resources",
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "None",
                "last_name" => "Available",
                "email" => "admin@retirementinsuranceoptions.com",
                "phone" => "1 (702) 529-4410",
                "bio" => "Admins Bio...",
                "company_role" => "Regional Administrator",
                "company_title" => "Admin",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Management, Customer Service, Agent Resources",
                "user_id" => 2,
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Stephen",
                "last_name" => "Elliott",
                "asb_id" => 6638,
                "email" => "leutts@aol.com",
                "phone" => "1 (858) 555-1212",
                "bio" => "Steve's Bio...",
                "company_role" => "Branch Sales Manager",
                "company_title" => "BSM",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Management, Customer Service, Agent Resources",
                "user_id" => 10,
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Ricky",
                "last_name" => "Rogalski",
                "asb_id" => 6801,
                "email" => "rroga21@gmail.com",
                "phone" => "1 (619) 301-9363",
                "bio" => "Rick R Bio...",
                "company_role" => "Branch Sales Manager",
                "company_title" => "BSM",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Management, Agent Resources",
                "user_id" => 11,
                "team_id" => 3,
                "office_id" => 3
            ]
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
