<?php

namespace App\Http\View\Composers;

use App\Office;
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
     * Create a new profile composer.
     *
     * @param  Office  $office
     * @return void
     */
    public function __construct(Office $office)
    {
        $this->office = $office;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $hqData = DB::table('offices')
            ->where('id', 1)
            ->select("*",
                DB::raw("CONCAT(offices.city,', ',offices.state, ' ',offices.zip) AS csZip"),
                DB::raw("CONCAT(offices.days_of_operation,'\<br\>',offices.hours_of_operation) AS days_and_hours")
            )
            ->first();

    //    dd($hqData);
        $view->with('hqData', $hqData);
    }
}
