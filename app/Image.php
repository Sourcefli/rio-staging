<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'alt_text' => 'American Senior Benefits Southwest',
        'default_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
        'small_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
        'medium_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
        'large_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
        'xlarge_src' => 'img/logos/american-senior-benefits-southwest-with-white-bg-cursive-300x107.png',
        'small_srcsetsize' => '(max-width: 560px) 212px',
        'medium_srcsetsize' => '(max-width: 768px) 326px',
        'large_srcsetsize' => '(min-width: 769px) 456px',
        'xlarge_srcsetsize' => '(min-width: 769px) 456px'
    ];
}
