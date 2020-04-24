<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    public function prospects() {
        return $this->belongsTo('App\Prospect');
    }

    public function appointments() {
        return $this->hasMany('App\Appointment');
    }

    public function contacts() {
        return $this->hasMany('App\Contact');
    }

    public function quotes() {
        return $this->hasManyThrough('App\Quote', 'App\Prospect');
    }

    public function policies() {
        return $this->hasMany('App\Policy');
    }
}
