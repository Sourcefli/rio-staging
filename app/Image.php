<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** ================================================================================
     *      Class Properties
     *  ================================================================================
     *
     *
     */
//    public $src;
//    public $srcSet;


    /** ================================================================================
     *      LARAVEL KEYWORD TRAITS
     *  ================================================================================
     *
     *
     */
    protected $guarded = [];


    /** ================================================================================
     *      Constructor
     *  ================================================================================
     *
     *
     */
//    public function __construct($src, $srcSet)
//    {
//        $this->src = $src;
//        $this->srcSet = $srcSet;
//    }

    /** ================================================================================
     *      ELOQUENT RELATIONSHIPS
     *  ================================================================================
     *
     *
     */
    public function pageData() {
        return $this->belongsTo('App\WebpageData');
    }




    /** ================================================================================
     *      CLASS METHODS
     *  ================================================================================
     *
     *
     */
    public function srcSetString($image) {
        $srcSm = $image->small_src;
        $srcMd = $image->medium_src;
        $srcLg = $image->large_src;
        $srcXl = $image->xlarge_src;
        $srcSizeSm = $image->small_srcsetsize;
        $srcSizeMd = $image->medium_srcsetsize;
        $srcSizeLg = $image->large_srcsetsize;
        $srcSizeXl = $image->xlarge_srcsetsize;

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
