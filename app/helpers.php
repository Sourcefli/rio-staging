<?php

/**
 *  Custom Laravel Helpers
 */

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

if (! function_exists('carbon')) {
    function carbon($parseString = null, $tz = null)
    {
        return new Carbon($parseString, $tz);
    }
}


function getHeroImg($path) {
    switch($path) {
        case "about":
            return "img/heros/lg-about-our-retirement-services.jpeg";
            break;
        case "services":
            return "img/heros/lg-legacy-on-the-wind.png";
            break;
        case "client-resources":
            return "img/heros/lg-caregiver-pushing-wheelchair-through-the-meadows-1920x780.jpg";
            break;
        case "faqs":
            return "img/heros/lg-customer-service-department-1168x520.jpg";
            break;
        case "contact":
            return "img/heros/lg-family-looking-up-1919x659.jpg";
            break;
        default:
            return "img/heros/lg-financial-well-being-with-american-senior-benefits.png";
    }
}

function getPageHeading($path) {
    switch($path) {
        case "about":
            return option('about_banner_heading');
            break;
        case "services":
            return option('services_banner_heading');
            break;
        case "client-resources":
            return option('client_resources_banner_heading');
            break;
        case "blog":
            return option('blog_banner_heading');
            break;
        case "faqs":
            return option('faqs_banner_heading');
            break;
        case "contact":
            return option('contact_banner_heading');
            break;
        default:
            return option('error_banner_heading');
    }
}

function getPageSubheading($path) {
    switch($path) {
        case "about":
            return option('about_banner_subheading');
            break;
        case "services":
            return option('services_banner_subheading');
            break;
        case "client-resources":
            return option('client_resources_banner_subheading');
            break;
        case "blog":
            return option('blog_banner_subheading');
            break;
        case "faqs":
            return option('faqs_banner_subheading');
            break;
        case "contact":
            return option('contact_banner_subheading');
            break;
        default:
            return option('error_banner_subheading');
    }
}

function createSlug($title) {
    return Str::slug($title);
}

function createReadMoreLink($title) {
    return '/' .Str::slug($title);
}

function calculateRowNumber() {
    $currentHighRowNum = DB::table('services')->pluck('row_num')->max();
    $totalInRowNum = DB::table('services')->where('row_num', $currentHighRowNum)->count();
    
    if ($totalInRowNum === 3) {
        return $currentHighRowNum + 1;
    } else {
        return $currentHighRowNum;
    }
}