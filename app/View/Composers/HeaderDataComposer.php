<?php

namespace App\Http\View\Composers;

use App\Image;
use App\NavItem;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HeaderDataComposer
{
    /**
     * The office class.
     *
     * @var NavItem
     */
    protected $navItem;

    /**
     * The image class.
     *
     * @var Image
     */
    protected $image;

    /**
     * Create a new profile composer.
     *
     * @param Image $image
     * @param NavItem $navItem
     */
    public function __construct(Image $image, NavItem $navItem)
    {
        $this->image = $image;
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
        $headerLogo = Image::where('title','White Background Blue Cursive')->first();
        $links = NavItem::where('category', 'menu')->get();

        //dd($headerData);

        $view->with(compact(['headerLogo', 'links']));
    }
}
