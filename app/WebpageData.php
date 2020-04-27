<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class WebpageData extends Model
{

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

    /** ================================================================================
     *      CLASS METHODS
     *  ================================================================================
     *
     *
     */
    public function serviceDetailsContent($pageName) {
        $serviceName = Str::before($pageName, '_service');
        $categoryString = $serviceName. '_common_questions';

        $bannerData = $this->where(
            [
                'pagename' => $pageName,
                'category' => 'banner'
            ]
        )->first();

        $commonQuestionsData = $this->where(
            [
                'pagename' => $pageName,
                'category' => $serviceName. '_common_questions'
            ]
        )->get();

        $serviceOptionsData = $this->where(
            [
                'pagename' => $pageName,
                'category' => $serviceName. '_options'
            ]
        )->get();

        $serviceScenariosData = $this->where(
            [
                'pagename' => $pageName,
                'category' => $serviceName. '_scenarios'
            ]
        )->get();

        $path = $this->where('pagename', $pageName)->first(['href']);

        return compact([
            'bannerData',
            'commonQuestionsData',
            'serviceOptionsData',
            'serviceScenariosData',
            'path'
        ]);
    }



    /** ================================================================================
     *      ELOQUENT RELATIONSHIPS
     *  ================================================================================
     *
     *
     */
    public function image() {
        return $this->belongsTo('App\Image');
    }

}
