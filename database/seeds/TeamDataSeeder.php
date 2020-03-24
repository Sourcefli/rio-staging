<?php

use Illuminate\Database\Seeder;

class TeamDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('teams')->insert([
            [
                'id' => 1,
                'name' => 'Las Vegas Management',
                'location' => 'Las Vegas',
                'office_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Sacramento Management',
                'location' => 'Sacramento',
                'office_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'San Diego Management',
                'location' => 'San Diego',
                'office_id' => 3
            ],
            [
                'id' => 4,
                'name' => 'Las Vegas Agents',
                'location' => 'Las Vegas',
                'office_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Sacramento Agents',
                'location' => 'Sacramento',
                'office_id' => 2
            ],
            [
                'id' => 6,
                'name' => 'San Diego Agents',
                'location' => 'San Diego',
                'office_id' => 3
            ]
        ]);
    }
}
