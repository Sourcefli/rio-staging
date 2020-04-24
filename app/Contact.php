<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function household() {
        return $this->belongsTo('App\Household');
    }

    public function prospect() {
        return $this->belongsTo('App\Prospect');
    }

}
