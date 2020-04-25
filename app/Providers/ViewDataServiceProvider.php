<?php

namespace App\Providers;

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

        //Shared with specific views
        View::composer(
            ['contact', 'get-a-quote'], 'App\Http\View\Composers\AgentDataComposer'
        );
        View::composer(
            ['contact', 'get-a-quote'], 'App\Http\View\Composers\TeamDetailsComposer'
        );
        View::composer(
            '*', 'App\Http\View\Composers\SidebarComposer'
        );
        View::composer(
            '*', 'App\Http\View\Composers\FooterComposer'
        );
        View::composer(
            '*', 'App\Http\View\Composers\CarrierDataComposer'
        );
    }
}
