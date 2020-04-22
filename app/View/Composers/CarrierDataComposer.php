<?php

namespace App\Http\View\Composers;

use App\Carrier;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CarrierDataComposer
{
    /**
     * The Carrier class.
     *
     * @var Carrier
     */
    protected $carrier;

    /**
     * Create a new profile composer.
     *
     * @param  Carrier  $carrier
     * @return void
     */
    public function __construct(Carrier $carrier)
    {
        $this->Carrier = $carrier;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $carriers = Carrier::get();

        $view->with('carriers', $carriers);
    }
}
