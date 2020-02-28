<?php

namespace App\Http\Controllers;

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

        //Set Home Page Static Data
        HomePage::threeColumnSectionOne();
        Homepage::threeColumnSectionTwo();

        $serviceCardData = config('sourcefli.siteData.serviceCards');

        return view('home', [
            "serviceCardData" => $serviceCardData,
        ]);

    }

    /*
    *
    *   /GET => About Page
    */
    public function getAboutPage()
    {
        $serviceCardData = config('sourcefli.siteData.serviceCards');
        return view('about');
    }

    /*
    *
    *   /GET => Services Page
    */
    public function getServicesPage()
    {

        //FROM HERO - for other use...
        $headingOne = "Full Medicare Services";
        $subheadingOne = "Whether Medicare Advantage, Supplements, Special Needs, or anything in between... our friendly team is licensed, experienced, and well-equipped to handle any Medicare-related topic you'd like to throw at them!";

        //FROM HERO - for other use...
        $headingTwo = "Risk Free Retirement Strategies";
        $subheadingTwo = "Achieving a relaxing and comfortable retirement can be an art - and for some, a nail-bitting rollercoaster. This is generally from bad advice or the misinformation that's advertised so often. Talk face-to-face with someone who's accountable to what they say to you and avoid these pitfalls with your nestegg.";

        $servicesRowOne = config('sourcefli.servicesdata.servicesRowOne');
        $servicesRowTwo = config('sourcefli.servicesdata.servicesRowTwo');


        return view('services', compact(
            [
                'servicesRowOne', 'servicesRowTwo'
            ]
        ));
    }

    /*
    *
    *   /GET => Client Resources Page
    */
    public function getClientResourcesPage()
    {
        return view('client-resources');
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
        return view('contact');
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
