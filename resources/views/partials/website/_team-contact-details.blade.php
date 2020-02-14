
@php
    $teamData = config('sourcefli.asbTeam')
@endphp

<div id="contact-our-team" class="section section-contents bg-light section-pad">
    <div class="container">
        <div class="content row">

            <div class="wide-sm center">
                <h2>The Team @ ASB Southwest</h2>
            </div>
            <div class="gaps size-lg"></div>
            <div class="row center-md">
                <div class="col-lg-3 col-sm-6 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["management"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["management"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["management"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["management"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["management"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rEdwards"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rEdwards"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["rEdwards"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["rEdwards"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["rEdwards"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="gaps size-3x visible-sm visible-md"></div>
                <div class="col-lg-3 col-sm-6 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rSchlemmer"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rSchlemmer"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["rSchlemmer"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["rSchlemmer"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["rSchlemmer"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["sBantz"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["sBantz"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["sBantz"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["sBantz"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["sBantz"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="gaps size-md"></div>
            <div class="row center-md">
                <div class="col-lg-3 col-sm-6 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rAtkins"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rAtkins"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["rAtkins"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["rAtkins"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["rAtkins"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["sLange"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["sLange"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["sLange"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["sLange"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["sLange"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="gaps size-3x visible-sm visible-md"></div>
                <div class="col-lg-3 col-sm-6 res-s-bttm">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["rFink"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["rFink"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["rFink"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["rFink"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["rFink"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="txt-entry bg-white pd-x3 round">
                        <h6 class="heading-sm ucap color-primary">
                            {{ $teamData["mCrain"]["qualifications"] }}
                        </h6>
                        <h5>{{ $teamData["mCrain"]["fullName"] }}</h5>
                        <p>
                            <small class="team-phone">{{ $teamData["mCrain"]["role"] }}</small>
                            <br>
                            <span class="color-primary">
                                <a href="mailto:{{ $teamData["mCrain"]["email"] }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $teamData["mCrain"]["first"] }} An Email</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
