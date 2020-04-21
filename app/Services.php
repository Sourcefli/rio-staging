<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function offices() {
        return $this->hasMany('App\Office');
    }

    //Add belongsToMany 'Agent' connection

}
