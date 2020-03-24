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
        return $this->belongsTo('App\Team');
    }

    public function managers() {
        return $this->belongsToMany('App\Manager');
    }

    public function services() {
        return $this->hasMany('App\Service');
    }

    public function office() {
        return $this->belongsTo('App\Office');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
