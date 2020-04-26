<?php

namespace App\Http\Controllers;

//use App\Carrier;
use App\Service;
use App\WebpageData;
use App\SiteCard;
use App\StaticData\CompanyData;
use App\StaticData\HomePage;
use Appstract\Options\Option;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    /*
    *
    *  /GET => Home Page
    */
    public function getHomePage()
    {
        $sectionOneListItems = [
            "Medicare Supplements & Advantage",
            "Final expense coverage for any health conditions",
            "Income planning and strategies",
            "Short or long term care protection",
            "Dental &amp; Vision comparisons",
        ];
        $slidesData = WebpageData::where('category', 'homeSlider')->get();

        $sectionOneCards = SiteCard::where('pages', 'home')
                                    ->where('section_number', 'two')
                                    ->get()
                                    ->toArray();

        return view('home', compact([
            'slidesData',
            'sectionOneCards',
            'sectionOneListItems'
        ]));

    }

    /*
    *
    *   /GET => About Page
    */
    public function getAboutPage()
    {
        $pageData = WebpageData::where('pagename', 'about')->get();

        //To be Included with all pages but the HOME page
        $bannerData = $pageData->where('category', 'banner')->first();
        $bannerCtaData = $pageData->where('category', 'callToAction')->first();

        $sectionOneHeading = $pageData->where('category', 'sectionHeading')->first();
        $sectionOneContent = WebpageData::where('pagename', 'about')->where('category', 'sectionOneContent')->get();
        $sectionTwoContent = WebpageData::where('pagename', 'about')->where('category', 'sectionTwoContent')->get();

        return view('about', compact([
            'pageData',
            'bannerData',
            'bannerCtaData',
            'sectionOneHeading',
            'sectionOneContent',
            'sectionTwoContent'
        ]));
    }

    /*
    *
    *   /GET => Services Page
    */
    public function getServicesPage()
    {

        $pageData = WebpageData::where('pagename', 'services')->get();

        //To be Included with all pages but the HOME page
        $bannerData = $pageData->where('category', 'banner')->first();
        $bannerCtaData = $pageData->where('category', 'callToAction')->first();

        $headingContent = $pageData->where('category', 'sectionContent')->first();

        // OLD Version - Cards with link
//        $servicesRowOne = Service::where('row_num', 1)->get();
//        $servicesRowTwo = Service::where('row_num', 2)->get();

        //New Version - Cards with image background and text overwrite
        $rowOneCards = SiteCard::where('pages', 'services')
            ->where('section_number', 'row_one')
            ->get()
            ->toArray();

        $rowTwoCards = SiteCard::where('pages', 'services')
            ->where('section_number', 'row_two')
            ->get()
            ->toArray();

        return view('services', compact([
            'pageData',
            'bannerData',
            'bannerCtaData',
            'headingContent',
//            'servicesRowOne',
//            'servicesRowTwo',
            'rowOneCards',
            'rowTwoCards'
        ]));
    }

    /*
    *
    *   /GET => Client Resources Page
    */
    public function getClientResourcesPage()
    {
        $pageData = WebpageData::where('pagename', 'clientResources')->get();

        //To be Included with all pages but the HOME page
        $bannerData = $pageData->where('category', 'banner')->first();
        $bannerCtaData = $pageData->where('category', 'callToAction')->first();


        return view('client-resources', compact([
            'pageData',
            'bannerData',
            'bannerCtaData',
        ]));
    }

    /*
    *
    *   /GET => Blog Page
    */
    public function getBlogPage()
    {
        return view('blog-tmpl');
    }

    /*
    *
    *   /GET => Contact Page
    */
    public function getContactPage()
    {
        $pageData = WebpageData::where('pagename', 'contact')->get();

        //To be Included with all pages but the HOME page
        $bannerData = $pageData->where('category', 'banner')->first();
        $bannerCtaData = $pageData->where('category', 'callToAction')->first();

        return view('contact', compact([
            'pageData',
            'bannerData',
            'bannerCtaData',
        ]));
    }

    /*
    *
    *   /GET => Get A Quote Page
    */
    public function getGetAQuotePage()
    {
        $pageData = WebpageData::where('pagename', 'quote')->get();

        //To be Included with all pages but the HOME page
        $bannerData = $pageData->where('category', 'banner')->first();
        $bannerCtaData = $pageData->where('category', 'callToAction')->first();

        return view('get-a-quote', compact([
            'bannerData',
            'bannerCtaData',
        ]));
    }

    /*
    *
    *   /GET => Privacy Page
    */
    public function getPrivacyPage()
    {
        return view('privacy');
    }

}
