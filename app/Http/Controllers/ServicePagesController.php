<?php

namespace App\Http\Controllers;

use App\WebpageData;
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
        $servicesData = WebpageData
                ::where('category', 'services_banner')
                ->where('heading', 'Annuity Services')
                ->first();

        return view('services.annuity-services', compact([
            $servicesData
        ]));
    }

    /*
    *
    *   /GET => Extended Care Services
    */
    public function getExtendedCareServicesPage()
    {
        $servicesData = WebpageData
            ::where('category', 'services_banner')
            ->where('heading', 'Extended Care Services')
            ->first();

        return view('services.extended-care-services', compact([
            $servicesData
        ]));
    }

    /*
    *
    *   /GET => Life Insurance Services
    */
    public function getLifeInsuranceServicesPage()
    {
        $servicesData = WebpageData
            ::where('category', 'services_banner')
            ->where('heading', 'Life Insurance Services')
            ->first();

        return view('services.life-insurance-services', compact([
            $servicesData
        ]));
    }

    /*
    *
    *   /GET => Medicare Services
    */
    public function getMedicareServicesPage()
    {
        $servicesData = WebpageData
            ::where('category', 'services_banner')
            ->where('heading', 'Medicare Services')
            ->first();

        $path = '/medicare-services';

        return view('services.medicare-services', compact([
            'servicesData',
            'path'
        ]));
    }

    /*
    *
    *   /GET => Retirement Planning Services
    */
    public function getRetirementPlanningServicesPage()
    {
        $servicesData = WebpageData
            ::where('category', 'services_banner')
            ->where('heading', 'Retirement Planning Services')
            ->first();

        return view('services.retirement-planning-services', compact([
            $servicesData
        ]));
    }

    /*
    *
    *   /GET => Specialized Healthcare Services
    */
    public function getSpecializedHealthcareServicesPage()
    {
        $servicesData = WebpageData
            ::where('category', 'services_banner')
            ->where('heading', 'Specialized Healthcare Services')
            ->first();

        return view('services.specialized-healthcare-services', compact([
            $servicesData
        ]));
    }
}
