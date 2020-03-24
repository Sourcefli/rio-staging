<?php

use Illuminate\Database\Seeder;

class RelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('manager_office')->insert([
//            //Manager IDs
//                // ==> Don = 1
//                // ==> Admin = 2
//                // ==> Stephen = 3
//            //Office IDs
//                // ==> Vegas = 1
//                // ==> Sacramento = 2
//                // ==> San Diego = 3
//            [
//                'id' => 1,
//                "manager_id" => 1,
//                "office_id" => 1
//            ],
//            [
//                'id' => 2,
//                "manager_id" => 1,
//                "office_id" => 2
//            ],
//            [
//                'id' => 3,
//                "manager_id" => 1,
//                "office_id" => 3
//            ],
//            [
//                'id' => 4,
//                "manager_id" => 2,
//                "office_id" => 1
//            ],
//            [
//                'id' => 5,
//                "manager_id" => 2,
//                "office_id" => 2
//            ],
//            [
//                'id' => 6,
//                "manager_id" => 2,
//                "office_id" => 3
//            ],
//            [
//                'id' => 7,
//                "manager_id" => 3,
//                "office_id" => 2
//            ]
//        ]);
//
//        DB::table('manager_team')->insert([
//            //Manager IDs
//            // ==> Don = 1
//            // ==> Admin = 2
//            // ==> Stephen = 3
//            //Team IDs
//            // ==> Vegas Mgmt = 1
//            // ==> Sacramento Mgmt = 2
//            // ==> San Diego Mgmt = 3
//            // ==> Vegas Agents = 4
//            // ==> Sacramento Agents = 5
//            // ==> San Diego Agent = 6
//            [
//                'id' => 1,
//                "manager_id" => 1,
//                "team_id" => 1
//            ],
//            [
//                'id' => 2,
//                "manager_id" => 1,
//                "team_id" => 2
//            ],
//            [
//                'id' => 3,
//                "manager_id" => 1,
//                "team_id" => 3
//            ],
//            [
//                'id' => 4,
//                "manager_id" => 2,
//                "team_id" => 1
//            ],
//            [
//                'id' => 5,
//                "manager_id" => 2,
//                "team_id" => 2
//            ],
//            [
//                'id' => 6,
//                "manager_id" => 2,
//                "team_id" => 3
//            ],
//            [
//                'id' => 7,
//                "manager_id" => 3,
//                "team_id" => 2
//            ]
//        ]);
//
//        DB::table('agent_manager')->insert([
//            //Manager IDs
//                // ==> Don = 1
//                // ==> Admin = 2
//                // ==> Stephen = 3
//
//            //Agent IDs
//                // ==> Rich S = 1
//                // ==> Shawn B = 2
//                // ==> Russ A = 3
//                // ==> Shawn L = 4
//                // ==> Rich F = 5
//                // ==> Monica C = 6
//                // ==> Richard E = 7
//
//            //Rich S Managers
//            [
//                'id' => 1,
//                "manager_id" => 1,
//                "agent_id" => 1
//            ],
//            [
//                'id' => 2,
//                "manager_id" => 2,
//                "agent_id" => 1
//            ],
//
//            //Shawn B Managers
//            [
//                'id' => 3,
//                "manager_id" => 1,
//                "agent_id" => 2
//            ],
//            [
//                'id' => 4,
//                "manager_id" => 2,
//                "agent_id" => 2
//            ],
//
//            //Russ A Managers
//            [
//                'id' => 5,
//                "manager_id" => 1,
//                "agent_id" => 3
//            ],
//            [
//                'id' => 6,
//                "manager_id" => 2,
//                "agent_id" => 3
//            ],
//
//            //Shawn L Managers
//            [
//                'id' => 7,
//                "manager_id" => 1,
//                "agent_id" => 4
//            ],
//            [
//                'id' => 8,
//                "manager_id" => 2,
//                "agent_id" => 4
//            ],
//
//            //Rich F Managers
//            [
//                'id' => 9,
//                "manager_id" => 1,
//                "agent_id" => 5
//            ],
//            [
//                'id' => 10,
//                "manager_id" => 2,
//                "agent_id" => 5
//            ],
//
//            //Monica C Managers
//            [
//                'id' => 11,
//                "manager_id" => 1,
//                "agent_id" => 6
//            ],
//            [
//                'id' => 12,
//                "manager_id" => 2,
//                "agent_id" => 6
//            ],
//
//            //Richard E Managers
//            [
//                'id' => 13,
//                "manager_id" => 1,
//                "agent_id" => 7
//            ],
//            [
//                'id' => 14,
//                "manager_id" => 2,
//                "agent_id" => 7
//            ],
//        ]);

        DB::table('office_user')->insert([
            //Office IDs
            // ==> Vegas = 1
            // ==> Sacramento = 2
            // ==> San Diego = 3

            //User IDs
            // ==> Jon Havens = 1
            // ==> Don Havens = 2
            // ==> Rich S = 3
            // ==> Shawn B = 4
            // ==> Russ A = 5
            // ==> Shawn L = 6
            // ==> Rich F = 7
            // ==> Monica C = 8
            // ==> Richard E = 9
            // ==> Steve E = 10
            // ==> Ricky R = 11
            // ==> Admin = 12

            //Jon H Office
            [
                "id" => 1,
                "office_id" => 1,
                "user_id" => 1
            ],

            //Don H Office
            [
                "id" => 2,
                "office_id" => 1,
                "user_id" => 2
            ],

            //Rich S Office
            [
                "id" => 3,
                "office_id" => 1,
                "user_id" => 3
            ],

            //Shawn B Office
            [
                "id" => 4,
                "office_id" => 1,
                "user_id" => 4
            ],

            //Russ A Office
            [
                "id" => 5,
                "office_id" => 1,
                "user_id" => 5
            ],

            //Shawn L Office
            [
                "id" => 6,
                "office_id" => 1,
                "user_id" => 6
            ],

            //Rich F Office
            [
                "id" => 7,
                "office_id" => 1,
                "user_id" => 7
            ],

            //Monica C Office
            [
                "id" => 8,
                "office_id" => 1,
                "user_id" => 8
            ],

            //Richard E Office
            [
                "id" => 9,
                "office_id" => 1,
                "user_id" => 9
            ],

            //Steve E Office
            [
                "id" => 10,
                "office_id" => 1,
                "user_id" => 10
            ],

            //Ricky R Office
            [
                "id" => 11,
                "office_id" => 1,
                "user_id" => 11
            ],

            //Admin Office
            [
                "id" => 12,
                "office_id" => 1,
                "user_id" => 12
            ],
        ]);

        DB::table('team_user')->insert([
            //Team IDs
            // ==> Vegas Mgmt = 1
            // ==> Sacramento Mgmt = 2
            // ==> San Diego Mgmt = 3
            // ==> Vegas Agents = 4
            // ==> Sacramento Agents = 5
            // ==> San Diego Agents = 6

            //User IDs
            // ==> Jon Havens = 1
            // ==> Don Havens = 2
            // ==> Rich S = 3
            // ==> Shawn B = 4
            // ==> Russ A = 5
            // ==> Shawn L = 6
            // ==> Rich F = 7
            // ==> Monica C = 8
            // ==> Richard E = 9
            // ==> Steve E = 10
            // ==> Ricky R = 11
            // ==> Admin = 12

            //Jon H Team
            [
                'id' => 1,
                'team_id' => 1,
                'user_id' => 1
            ],

            //Don H Teams
            [
                'id' => 2,
                'team_id' => 1,
                'user_id' => 2
            ],
            [
                'id' => 3,
                'team_id' => 2,
                'user_id' => 2
            ],
            [
                'id' => 4,
                'team_id' => 3,
                'user_id' => 2
            ],

            //Rich S Teams
            [
                'id' => 5,
                'team_id' => 1,
                'user_id' => 3
            ],
            [
                'id' => 6,
                'team_id' => 4,
                'user_id' => 3
            ],

            //Shawn B Team
            [
                'id' => 7,
                'team_id' => 4,
                'user_id' => 4
            ],

            //Russ A Team
            [
                'id' => 8,
                'team_id' => 4,
                'user_id' => 5
            ],

            //Shawn L Team
            [
                'id' => 9,
                'team_id' => 4,
                'user_id' => 6
            ],

            //Rich F Team
            [
                'id' => 10,
                'team_id' => 4,
                'user_id' => 7
            ],

            //Monica C Team
            [
                'id' => 11,
                'team_id' => 4,
                'user_id' => 8
            ],

            //Richard E Team
            [
                'id' => 12,
                'team_id' => 4,
                'user_id' => 9
            ],

            //Steve E Team
            [
                'id' => 13,
                'team_id' => 2,
                'user_id' => 10
            ],

            //Ricky R Team
            [
                'id' => 14,
                'team_id' => 3,
                'user_id' => 11
            ],

            //Admin Teams
            [
                'id' => 15,
                'team_id' => 1,
                'user_id' => 12
            ],
            [
                'id' => 16,
                'team_id' => 2,
                'user_id' => 12
            ],
            [
                'id' => 17,
                'team_id' => 3,
                'user_id' => 12
            ]
        ]);
    }
}
