<?php

namespace App\Http\View\Composers;

use App\Image;
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
     * The image class.
     *
     * @var Image
     */
    protected $image;

    /**
     * The services class.
     *
     * @var NavItem
     */
    protected $navItem;

    /**
     * Create a new profile composer.
     *
     * @param Image $image
     * @param NavItem $navItem
     * @param Office $office
     */
    public function __construct(Image $image, NavItem $navItem, Office $office)
    {
        $this->image = $image;
        $this->navItem = $navItem;
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
        //Logo Src Data
        $logo = Image::find(40);
        $logoSrcSetSize = $logo->srcSetString();
        $lg = $logoSrcSetSize['lg'];
        $logoSrcData = [
            'src' => $logo->large_src,
            'srcset' => $lg
        ];

        //Menu Links Data
        $menuLinks = NavItem::where('category', 'menu')->get();

        //Services Links Data
        $serviceLinks = NavItem::where('category', 'service')->get();

        //HQ Contact Data
        $hqData = Office::find(1);

        //Locations Data
        $locations = Office::get();

        $view->with([
            'menuLinks' => $menuLinks,
            'serviceLinks' => $serviceLinks,
            'hqData' => $hqData,
            'logoSrcData' => $logoSrcData,
            'locations' => $locations
        ]);
    }
}
