<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    public function srcSetString() {
        $srcSm = $this->small_src;
        $srcMd = $this->medium_src;
        $srcLg = $this->large_src;
        $srcXl = $this->xlarge_src;
        $srcSizeSm = $this->small_srcsetsize;
        $srcSizeMd = $this->medium_srcsetsize;
        $srcSizeLg = $this->large_srcsetsize;
        $srcSizeXl = $this->xlarge_srcsetsize;

        $srcSetSm = $srcSm. " " .$srcSizeSm;
        $srcSetMd = $srcMd. " " .$srcSizeMd;
        $srcSetLg = $srcLg. " " .$srcSizeLg;
        $srcSetXl = $srcXl. " " .$srcSizeXl;

        return [
            'sm' => $srcSetSm,
            'md' => $srcSetMd,
            'lg' => $srcSetLg,
            'xl' => $srcSetXl
        ];

    }

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
