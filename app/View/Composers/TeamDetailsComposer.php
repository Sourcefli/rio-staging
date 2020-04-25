<?php

namespace App\Http\View\Composers;

use App\SiteCard;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TeamDetailsComposer
{
    /**
     * The agent class.
     *
     * @var SiteCard
     */
    protected $card;

    /**
     * Create a new profile composer.
     *
     * @param  App\SiteCard  $card
     * @return void
     */
    public function __construct(SiteCard $card)
    {
        $this->card = $card;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $teamCardsData = SiteCard::where('pages', 'team_contact_partial')->get()->toArray();

        $view->with('teamCardsData', $teamCardsData);
    }
}
