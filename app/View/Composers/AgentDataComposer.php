<?php

namespace App\Http\View\Composers;

use App\Agent;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AgentDataComposer
{
    /**
     * The agent class.
     *
     * @var Agent
     */
    protected $agent;

    /**
     * Create a new profile composer.
     *
     * @param  App\Agent  $agent
     * @return void
     */
    public function __construct(Agent $agent)
    {
        $this->agent = $agent;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $agents = Agent::get();

        // dd($agents);
        $view->with('agents', $agents);
    }
}
