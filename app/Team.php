<?php

namespace App;

use App\Agent;
use App\Manager;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [
//        'name',
        'created_at',
        'updated_at'
    ];

    public function users() {
        return $this->belongsToMany('App\User', 'team_user');
    }

    public function agents() {
        return $this->belongsToMany('App\Agent', 'agent_team');
    }

    //Add Managers to (agent) Team data... e.g. manager_id of 1 with team_id of 4
    public function managers() {
        return $this->belongsToMany('App\Manager', 'manager_team');
    }

    //Add 'service_team' table to DB, then seed
    public function services() {
        return $this->belongsToMany('App\Service', 'service_team');
    }

//    public function members() {
//        $agents = Agent::where('team_id', $this->id)->get();
//        $managers = Manager::where('team_id', $this->id)->get();
//        return collect($agents, $managers);
//    }
}
