<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public function agents() {
        return $this->belongsToMany(Agent::class, 'agent_manager');
    }

    public function teams() {
        return $this->belongsToMany(Team::class, 'manager_team');
    }

    public function offices() {
        return $this->belongsToMany('App\Office', 'manager_office');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
