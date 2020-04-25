<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $guarded = [];

    public function household() {
        return $this->belongsTo('App\Household');
    }

    public function contacts() {
        return $this->hasMany('App\Contact');
    }

    public function appointments() {
        return $this->hasManyThrough('App\Appointment', 'App\Household');
    }

    public function quotes() {
        return $this->hasMany('App\Quote');
    }

    public function agents() {
        return $this->belongsToMany('App\Agent');
    }

    public function carriers() {
        return $this->hasManyThrough('App\Carrier', 'App\Policy');
    }

    public function office() {
        return $this->belongsTo('App\Office');
    }
}
