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

    public function agents() {
        return $this->hasMany(Agent::class);
    }

    public function managers() {
        return $this->hasMany(Manager::class);
    }

    public function teams() {
        return $this->hasMany(Office::class);
    }

//    public function members() {
//        $agents = Agent::where('team_id', $this->id)->get();
//        $managers = Manager::where('team_id', $this->id)->get();
//        return collect($agents, $managers);
//    }
}
