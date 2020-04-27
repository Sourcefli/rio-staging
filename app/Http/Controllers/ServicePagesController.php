<?php

namespace App\Http\Controllers;

use App\Image;
use App\WebpageData;
use Clockwork\Web\Web;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
{

    //===== Service Detail Routes ======

    /*
    *
    *   /GET => Annuity Services
    */
    public function getAnnuityServicesPage()
    {
        $pageData = new WebpageData();

        $pageContent = $pageData->serviceDetailsContent('annuity_services');

        return view('services.service-details', ['pageContent' => $pageContent]);
    }

    /*
    *
    *   /GET => Extended Care Services
    */
    public function getExtendedCareServicesPage()
    {
        $pageData = new WebpageData();
        $pageContent = $pageData->serviceDetailsContent('extended_care_services');

        return view('services.service-details', ['pageContent' => $pageContent]);
    }

    /*
    *
    *   /GET => Life Insurance Services
    */
    public function getLifeInsuranceServicesPage()
    {
        $pageData = new WebpageData();
        $pageContent = $pageData->serviceDetailsContent('life_insurance_services');

        return view('services.service-details', ['pageContent' => $pageContent]);
    }

    /*
    *
    *   /GET => Medicare Services
    */
    public function getMedicareServicesPage()
    {
        $pageData = new WebpageData();
        $pageContent = $pageData->serviceDetailsContent('medicare_services');

        return view('services.service-details', ['pageContent' => $pageContent]);
    }

    /*
    *
    *   /GET => Retirement Planning Services
    */
    public function getRetirementPlanningServicesPage()
    {
        $pageData = new WebpageData();
        $pageContent = $pageData->serviceDetailsContent('retirement_planning_services');

        return view('services.service-details', ['pageContent' => $pageContent]);
    }

    /*
    *
    *   /GET => Specialized Healthcare Services
    */
    public function getSpecializedHealthcareServicesPage()
    {
        $pageData = new WebpageData();
        $pageContent = $pageData->serviceDetailsContent('specialized_healthcare_services');

        return view('services.service-details', ['pageContent' => $pageContent]);
    }
}
