<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];

    public function prospect() {
        return $this->hasOne('App\Prospect');
    }

    public function household() {
        return $this->belongsTo('App\Household');
    }

    public function contacts() {
        return $this->hasMany('App\Contact');
    }

    public function office() {
        return $this->belongsTo('App\Office');
    }

    public function policies() {
        return $this->hasManyThrough('App\Policy', 'App\Prospect');
    }

    public function quotes() {
        return $this->hasMany('App\Quote');
    }

    public function agent() {
        return $this->hasOne('App\Agent');
    }

    public function caller() {
        return $this->hasOne('App\Caller');
    }
}
