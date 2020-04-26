<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OfficesDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Prepare data for JSON column type
         *
         */
        $slackChatrooms = [
            'everybody' => 'asbsw-everybody',
            'logos' => 'asbsw-logos',
            'marketing-media' => 'asbsw-marketing-media',
            'management-team' => 'asbsw-mgmt-team',
            'fb-ads-fe' => 'fb-ads-final-expense',
            'fb-ads-medicare' => 'fb-ads-medicare',
            'community' => 'asbsw-community-chat'
        ];
        $slackroomsAsJson = json_encode($slackChatrooms);


        /**
         * Disable FK Constraints
         */
        Schema::disableForeignKeyConstraints();



        /**
         * SAVE TO DATABASE
         */
        DB::table('offices')->insert([
            'id' => 1,
            'name' => 'Las Vegas',
            'street_one' => '6029 S Fort Apache Rd',
            'street_two' => 'Suite 130',
            'city' => 'Las Vegas',
            'state' => 'Nevada',
            'state_abbr' => 'NV',
            'zip' => '89148',
            'sm_image_url' => 'https://retirementinsuranceoptions.com',
            'md_image_url' => 'https://retirementinsuranceoptions.com',
            'lg_image_url' => 'https://retirementinsuranceoptions.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'office_phone' => '1 (702) 529-4410',
            'office_fax' => '1 (702) 463-7645',
            'office_email' => 'info@retirementinsuranceoptions.com',
            'toll_free_phone' => '1 (888) 601-3580',
            'hours_of_operation' => '9:00am to 5:00pm',
            'days_of_operation' => 'Monday to Friday',
            'website_url' => 'https://retirementinsuranceoptions.com',
            'careers_url' => 'https://asbsouthwestcareers.com',
            'login_url' => 'https://login.retirementinsuranceoptions.com',
            'office_directions' => 'To be determined',
            'longitude' => '-115.2995027',
            'latitude' => '36.079172',
            'facebook_url' => 'https://www.facebook.com/AmericanSeniorBenefitsSW/',
            'facebook_username' => '@AmericanSeniorBenefitsSW',
            'facebook_icon' => 'fa fa-facebook',
            'linkedin_url' => 'https://www.linkedin.com/company/retirement-insurance-options/',
            'linkedin_username' => 'American Senior Benefits Southwest',
            'linkedin_icon' => 'fa fa-linkedin',
            'twitter_url' => 'https://twitter.com/RetirementInsu1',
            'twitter_username' => 'RetirementInsu1',
            'twitter_icon' => 'fa fa-twitter',
            'slack_url' => 'https://asbsw.slack.com/',
            'slack_chatrooms' => $slackroomsAsJson,
            'whatsapp_url' => '',
            'whatsapp_agent_chatroom' => '',
            'whatsapp_prospect_chatroom' => ''
        ]);
        DB::table('offices')->insert([
           'id' => 2,
            'name' => 'Sacramento',
            'street_one' => '1100 S Melody Ln',
            'street_two' => 'Suite 144',
            'city' => 'Roseville',
            'state' => 'California',
            'state_abbr' => 'CA',
            'zip' => '95678',
            'sm_image_url' => 'https://retirementinsuranceoptions.com',
            'md_image_url' => 'https://retirementinsuranceoptions.com',
            'lg_image_url' => 'https://retirementinsuranceoptions.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'office_phone' => '1 (858) 205-1177',
            'office_fax' => '1 (858) 205-1178',
            'office_email' => 'info@retirementinsuranceoptions.com',
            'toll_free_phone' => '1 (888) 601-3580',
            'hours_of_operation' => '9:00am to 5:00pm',
            'days_of_operation' => 'Monday to Friday',
            'website_url' => 'https://retirementinsuranceoptions.com',
            'careers_url' => 'https://asbsouthwestcareers.com',
            'login_url' => 'https://login.retirementinsuranceoptions.com',
            'office_directions' => 'To be determined',
            'longitude' => '-121.2938361',
            'latitude' => '38.7252926',
            'facebook_url' => 'https://www.facebook.com/AmericanSeniorBenefitsSW/',
            'facebook_username' => '@AmericanSeniorBenefitsSW',
            'linkedin_url' => '',
            'linkedin_username' => '',
            'twitter_url' => '',
            'twitter_username' => '',
            'slack_url' => 'https://asbsw.slack.com/',
            'slack_chatrooms' => $slackroomsAsJson,
            'whatsapp_url' => '',
            'whatsapp_agent_chatroom' => '',
            'whatsapp_prospect_chatroom' => ''
        ]);
        DB::table('offices')->insert([
            'id' => 3,
            'name' => 'San Diego',
            'street_one' => '5752 Oberlin Dr.',
            'street_two' => 'Suite 201',
            'city' => 'San Diego',
            'state' => 'California',
            'state_abbr' => 'CA',
            'zip' => '92121',
            'sm_image_url' => 'https://retirementinsuranceoptions.com',
            'md_image_url' => 'https://retirementinsuranceoptions.com',
            'lg_image_url' => 'https://retirementinsuranceoptions.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'office_phone' => '1 (916) 727-6880',
            'office_fax' => '1 (702) 463-7645',
            'office_email' => 'info@retirementinsuranceoptions.com',
            'toll_free_phone' => '1 (888) 601-3580',
            'hours_of_operation' => '9:00am to 5:00pm',
            'days_of_operation' => 'Monday to Friday',
            'website_url' => 'https://retirementinsuranceoptions.com',
            'careers_url' => 'https://asbsouthwestcareers.com',
            'login_url' => 'https://login.retirementinsuranceoptions.com',
            'office_directions' => 'To be determined',
            'longitude' => '-117.1973378',
            'latitude' => '32.8933181',
            'facebook_url' => 'https://www.facebook.com/AmericanSeniorBenefitsSW/',
            'facebook_username' => '@AmericanSeniorBenefitsSW',
            'linkedin_url' => '',
            'linkedin_username' => '',
            'twitter_url' => '',
            'twitter_username' => '',
            'slack_url' => 'https://asbsw.slack.com/',
            'slack_chatrooms' => $slackroomsAsJson,
            'whatsapp_url' => '',
            'whatsapp_agent_chatroom' => '',
            'whatsapp_prospect_chatroom' => ''
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
