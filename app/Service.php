<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $guarded = [];

    // protected $attributes = [
    //     'slug' => $this::slugifyTitle(),
    //     'read_more_link' => $this::createReadMoreLink(),
    //     'row_num' => $this::determineRowNumber()
    // ];
    
    /**
     * ELOQUENT RELATIONSHIPS
     */
    public function offices() {
        return $this->hasMany('App\Office');
    }

    /**
     * OVERRIDING ELOQUENT METHODS
     */
    public function getRouteKeyName() {
        return 'slug';
    }

    //Add belongsToMany 'Agent' connection

}
