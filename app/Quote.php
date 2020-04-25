<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = [];

    public function household() {
        return $this->belongsTo('App\Household');
    }

    public function prospect() {
        return $this->belongsTo('App\Prospect');
    }


}
