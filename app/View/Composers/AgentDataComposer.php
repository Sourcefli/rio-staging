<?php

namespace App\Http\View\Composers;

use App\Agent;
use App\Manager;
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
     * The agent class.
     *
     * @var Manager
     */
    protected $manager;

    /**
     * Create a new profile composer.
     *
     * @param  App\Agent  $agent
     * @param  App\Manager  $manager
     * @return void
     */
    public function __construct(Agent $agent,Manager $manager)
    {
        $this->agent = $agent;
        $this->manager = $manager;
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
        $managers = Manager::where('first_name', '!=', 'None')->get();

        $combined = $agents->concat($managers);

        // dd($agents);
        $view->with('agents', $combined);
    }
}
