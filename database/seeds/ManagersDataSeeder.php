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
                "team_id" => 4,
                "office_id" => 1
            ],
            [
                "first_name" => "Stephen",
                "last_name" => "Elliott",
                "email" => "leutts@aol.com",
                "phone" => "1 (858) 555-1212",
                "bio" => "Steve's Bio...",
                "company_role" => "Branch Sales Manager",
                "company_title" => "BSM",
                "facebook_url" => "https://facebook.com/",
                "linkedin_url" => "https://linkedin.com/",
                "qualifications" => "Management, Customer Service, Agent Resources",
                "team_id" => 4,
                "office_id" => 1
            ]
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
