<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public function agents() {
        return $this->hasMany(Agent::class);
    }

    public function teams() {
        return $this->hasMany(Team::class);
    }

    public function offices() {
        return $this->belongsToMany(Office::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
