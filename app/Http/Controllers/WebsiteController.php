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
        $sectionTwoListItems = [
            "Medicare Supplements & Advantage",
            "Final expense coverage for any health conditions",
            "Income planning and strategies",
            "Short or long term care protection",
            "Dental &amp; Vision comparisons",
        ];
        $slidesData = WebpageData::where('category', 'homeSlider')->get();
        $sectionOneCards = SiteCard::where('pages', 'home')
                                    ->where('section_number', 'one')
                                    ->get()
                                    ->toArray();
        $sectionTwoCards = SiteCard::where('pages', 'home')
                                    ->where('section_number', 'two')
                                    ->get()
                                    ->toArray();

        return view('home', compact([
            'slidesData',
            'sectionOneCards',
            'sectionTwoCards',
            'sectionTwoListItems'
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

        $servicesRowOne = Service::where('row_num', 1)->get();
        $servicesRowTwo = Service::where('row_num', 2)->get();

//        $data = [
//            'pageData',
//            'bannerData',
//            'bannerCtaData',
//            'heading' => $headingContent,
//            'servicesRowOne' => $servicesRowOne,
//            'servicesRowTwo' => $servicesRowTwo
//        ];
        return view('services', compact([
            'pageData',
            'bannerData',
            'bannerCtaData',
            'headingContent',
            'servicesRowOne',
            'servicesRowTwo'
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
        return view('get-a-quote');
    }

    /*
    *
    *   /GET => Privacy Page
    */
    public function getPrivacyPage()
    {
        return view('privacy');
    }

    //===== Service Detail Routes ======

    /*
    *
    *   /GET => Wise Retirement Page
    */
    public function getWiseRetirementPage()
    {
        return view('services.wise-retirement');
    }

    /*
    *
    *   /GET => Protected Investments Page
    */
    public function getProtectedInvestmentsPage()
    {
        return view('services.protected-investments');
    }

    /*
    *
    *   /GET => Diversify Your Nestegg Page
    */
    public function getDiversifyYourNesteggPage()
    {
        return view('services.diversify-your-nestegg');
    }

    /*
    *
    *   /GET => Expect The Unexpected Page
    */
    public function getExpectTheUnexpectedPage()
    {
        return view('services.expect-the-unexpected');
    }

    /*
    *
    *   /GET => Medicare360 Page
    */
    public function getMedicare360Page()
    {
        return view('services.medicare360');
    }

    /*
    *
    *   /GET => Burial Preperation Page
    */
    public function getBurialPreperationPage()
    {
        return view('services.burial-preperation');
    }
}
