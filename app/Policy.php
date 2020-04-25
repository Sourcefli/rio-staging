<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $guarded = [];

    public function prospect() {
        return $this->belongsTo('App\Prospect');
    }

    public function carrier() {
        return $this->belongsTo('App\Carrier');
    }

    public function agent() {
        return $this->belongsTo('App\Agent');
    }

    public function office() {
        return $this->belongsTo('App\Office');
    }

    public function managers() {
        return $this->belongsToMany('App\Manager');
    }

    public function household() {
        return $this->belongsTo('App\Household');
    }

    public function appointment() {
        return $this->belongsTo('App\Appointment');
    }
}
