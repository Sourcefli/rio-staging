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

    public function agents() {
        return $this->hasMany(Agent::class);
    }

    public function managers() {
        return $this->hasMany(Manager::class);
    }

    public function teams() {
        return $this->belongsTo(Team::class);
    }

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }

    public function csZip() {
        $hq = $this->where('id', 1)->get();
        return "{$hq->city}, {$hq->state} {$hq->zip}";
    }


}
