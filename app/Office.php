<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class Office extends Model
{
    use Geographical;

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    //ok
    public function agents() {
        return $this->hasMany('App\Agent');
    }

    //ok
    public function managers() {
        return $this->belongsToMany('App\Manager', 'manager_office');
    }

    //ok
    public function teams() {
        return $this->hasMany('App\Team');
    }

    // add 'belongsToMany' with a 'office_service' join table
    public function services() {
        return $this->hasMany('App\Service', 'id');
    }

    // add 'belongsToMany' with a 'office_user' join table
    public function users() {
        return $this->hasMany(User::class);
    }


}
