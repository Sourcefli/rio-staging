<?php

namespace App\Http\View\Composers;

use App\Office;
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
     * The webpageData class.
     *
     * @var WebpageData
     */
    protected $webpageData;

    /**
     * Create a new profile composer.
     *
     * @param  Office  $office
     * @param  WebpageData  $webpageData
     * @return void
     */
    public function __construct(Office $office, WebpageData $webpageData)
    {
        $this->office = $office;
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

        $data = [
            'hqData' => $hqData,
            'sidebarData' => $managerStatement
        ];

//        dd($sidebarData);
        $view->with(compact(['hqData', 'managerStatement']));
    }
}
