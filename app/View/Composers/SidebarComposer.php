<?php

namespace App\Http\View\Composers;

use App\Office;
use App\SiteCard;
use App\WebpageData;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * The office class.
     *
     * @var Office
     */
    protected $office;

    /**
     * The SiteCard class.
     *
     * @var SiteCard
     */
    protected $siteCard;

    /**
     * The webpageData class.
     *
     * @var WebpageData
     */
    protected $webpageData;

    /**
     * Create a new profile composer.
     *
     * @param  Office  $office
     * @param  SiteCard  $siteCard
     * @param  WebpageData  $webpageData
     * @return void
     */
    public function __construct(Office $office,SiteCard $siteCard, WebpageData $webpageData)
    {
        $this->office = $office;
        $this->siteCard = $siteCard;
        $this->webpageData = $webpageData;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $managerStatement = WebpageData::where('category', 'owner_statement')->first();

        $hqData = DB::table('offices')
            ->where('id', 1)
            ->select("*",
                DB::raw("CONCAT(offices.city,', ',offices.state, ' ',offices.zip) AS csZip"),
                DB::raw("CONCAT(offices.days_of_operation,'\<br\>',offices.hours_of_operation) AS days_and_hours")
            )
            ->first();

        $serviceDetailsSidebarData = SiteCard::where('pages', 'service_details')->get(['title', 'href']);


        $view->with(compact([
            'hqData',
            'managerStatement',
            'serviceDetailsSidebarData'
        ]));
    }
}
