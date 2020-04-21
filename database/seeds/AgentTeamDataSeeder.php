<?php

use Illuminate\Database\Seeder;

class AgentTeamDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agent_team')->insert([
            [
                'agent_id' => 1,
                'team_id' => 4
            ],
            [
                'agent_id' => 2,
                'team_id' => 4
            ],
            [
                'agent_id' => 3,
                'team_id' => 4
            ],
            [
                'agent_id' => 4,
                'team_id' => 4
            ],
            [
                'agent_id' => 5,
                'team_id' => 4
            ],
            [
                'agent_id' => 6,
                'team_id' => 4
            ],
            [
                'agent_id' => 7,
                'team_id' => 4
            ]
        ]);
    }
}
