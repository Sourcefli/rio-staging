<?php

namespace App\Providers;

use App\Carrier;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //Shared with all views
        $carriers = Carrier::get();
        View::share('carriers', $carriers);

        //Shared with specific views
        View::composer(
            'contact', 'App\Http\View\Composers\SidebarComposer'
        );
    }
}
