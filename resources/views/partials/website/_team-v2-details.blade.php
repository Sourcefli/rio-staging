
@php
    $teamData = config('sourcefli.asbTeam')
@endphp

<div id="contact-our-team" class="section section-contents bg-light section-pad">
    <div class="container">
        <div class="content row">

            <div class="wide-sm center">
                <h2>Reach Out To Our Team Anytime</h2>
            </div>
            <div class="gaps size-lg"></div>
            <div class="row center-md">
                <div class="col-lg-4 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["dHavens"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["dHavens"]["fullName"] }}</h5>
                        <p>
                            <span class="color-primary">P:</span> 
                            <span class="team-phone">{{ $teamData["dHavens"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span> 
                            <span class="team-email">{{ $teamData["dHavens"]["email"] }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["jLawson"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["jLawson"]["fullName"] }}</h5>
                        <p>
                            <span class="color-primary">P:</span> 
                            <span class="team-phone">{{ $teamData["jLawson"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span> 
                            <span class="team-email">{{ $teamData["jLawson"]["email"] }}</span>
                        </p>
                    </div>
                </div>
                <div class="gaps size-3x visible-sm visible-md"></div>
                <div class="col-lg-4 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rSchlemmer"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rSchlemmer"]["fullName"] }}</h5>
                        <p>
                            <span class="color-primary">P:</span> 
                            <span class="team-phone">{{ $teamData["rSchlemmer"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span> 
                            <span class="team-email">{{ $teamData["rSchlemmer"]["email"] }}</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="gaps size-md"></div>

            <div class="row center-md">
                <div class="col-lg-4 col-xs-12">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["sBantz"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["sBantz"]["fullName"] }}</h5>
                        <p>
                            <span class="color-primary">P:</span> 
                            <span class="team-phone">{{ $teamData["sBantz"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span> 
                            <span class="team-email">{{ $teamData["sBantz"]["email"] }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rAtkins"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rAtkins"]["fullName"] }}</h5>
                        <p>
                            <span class="color-primary">P:</span>
                            <span class="team-phone">{{ $teamData["rAtkins"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span>
                            <span class="team-email">{{ $teamData["rAtkins"]["email"] }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["sLange"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["sLange"]["fullName"] }}</h5>
                        <p><span class="color-primary">P:</span>
                            <span class="team-phone">{{ $teamData["sLange"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span>
                            <span class="team-email">{{ $teamData["sLange"]["email"] }}</span></p>
                    </div>
                </div>

                <div class="gaps size-md"></div>
                <div class="gaps size-3x visible-sm visible-md"></div>

                <div class="col-lg-4 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rFink"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rFink"]["fullName"] }}</h5>
                        <p><span class="color-primary">P:</span>
                            <span class="team-phone">{{ $teamData["rFink"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span>
                            <span class="team-email">{{ $teamData["rFink"]["email"] }}</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["mCrain"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["mCrain"]["fullName"] }}</h5>
                        <p><span class="color-primary">P:</span>
                            <span class="team-phone">{{ $teamData["mCrain"]["phone"] }}</span>
                            <br>
                            <span class="color-primary">E:</span>
                            <span class="team-email">{{ $teamData["mCrain"]["email"] }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>