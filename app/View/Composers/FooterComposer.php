<?php

namespace App\Http\View\Composers;

use App\NavItem;
use App\Office;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * The office class.
     *
     * @var Office
     */
    protected $office;
    
    /**
     * The services class.
     *
     * @var NavItem
     */
    protected $navItem;

    /**
     * Create a new profile composer.
     *
     * @param  App\Office  $office
     * @param  App\NavItem  $navItem
     * @return void
     */
    public function __construct(Office $office, NavItem $navItem)
    {
        $this->office = $office;
        $this->navItem = $navItem;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $menuLinks = NavItem::where('category', 'menu')->get();
        $serviceLinks = NavItem::where('category', 'service')->get();
        $hqData = Office::where('name', 'Las Vegas')->first();

        $view->with([
            'menuLinks' => $menuLinks,
            'serviceLinks' => $serviceLinks,
            'hqData' => $hqData
        ]);
    }
}
