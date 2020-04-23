<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarded = [
        'started_on',
        'team_id'
    ];

    public function team() {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function managers() {
        return $this->belongsToMany(Manager::class);
    }

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function office() {
        return $this->belongsTo(Office::class, 'office_id');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
