<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caller extends Model
{
    protected $guarded = [];

    public function appointments() {
        return $this->hasMany('App\Appointment');
    }

    public function team() {
        return $this->belongsTo('App\Team');
    }

}
