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
        DB::table('offices')->where('id', 1)->update([
//            'id' => 1,
            'name' => 'Las Vegas',
            'street_one' => '6029 S Fort Apache Rd',
            'street_two' => 'Suite 130',
            'city' => 'Las Vegas',
            'state' => 'Nevada',
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
            'latitude' => '36.079172'
        ]);
        DB::table('offices')->where('id', 2)->update([
//            'id' => 2,
            'name' => 'Sacramento',
            'street_one' => '1100 S Melody Ln',
            'street_two' => 'Suite 144',
            'city' => 'Roseville',
            'state' => 'California',
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
            'latitude' => '38.7252926'
        ]);
        DB::table('offices')->where('id', 3)->update([
//                'id' => 3,
            'name' => 'San Diego',
            'street_one' => '5752 Oberlin Dr.',
            'street_two' => 'Suite 201',
            'city' => 'San Diego',
            'state' => 'California',
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
            'latitude' => '32.8933181'
        ]);
    }
}
