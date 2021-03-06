
<div id="contact-our-team" class="section section-contents bg-light section-pad">
    <div class="container" style="margin-bottom: 60px">

        <!-- START LOOPING -->
        <!-- END LOOPING -->
        <div class="content row">

            <div class="wide-sm center">
                <h2>The Team @ ASB Southwest</h2>
            </div>

                @foreach($agents as $agent)
                    <?php
                    $i = $loop->iteration;
                    $oddLoop = $i % 4;
                    if($loop->iteration === 1 || $oddLoop === 1) {
                        //Varying Content on each loop
                        echo '<div class="gaps size-lg"></div>
                                <div class="row center-md">';
                    }
                    if($oddLoop === 3) {
                        //Varying Content on each loop
                        echo '<div class="gaps size-3x visible-sm visible-md"></div>';
                    }
                    ?>

                        <div class="{{ $teamCardsData[$loop->index]['outer_div_classes'] }}">
                            <div class="{{ $teamCardsData[$loop->index]['inner_div_classes'] }}">
                                <h6 class="heading-sm ucap color-primary">
                                    {{ $agent->qualifications }}
                                </h6>
                                <h5>{{ $agent->first_name }} {{ $agent->last_name }}</h5>
                                <p>
                                    <small class="team-phone">{{ $agent->company_role }}</small>
                                    <br>
                                    <span class="color-primary">
                                        <a href="mailto:{{ $agent->email }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $agent->first_name }} An Email</a>
                                    </span>
                                </p>
                            </div>
                        </div>

                    <?php
                    $oddLoop = $i % 4;
                    if($oddLoop === 0) {
                        //Closing Div for => '<div class="row center-md">'...which wraps each row (4 cards per row)
                        echo '</div>';
                    }
                    $i++;
                    ?>

                    @endforeach

        </div>
    </div>
</div>

{{--                    @if($loop->iteration === 3)--}}
{{--                        <div class="gaps size-3x visible-sm visible-md"></div>--}}
{{--                        <div class="col-lg-3 col-sm-6 res-s-bttm">--}}
{{--                            <div class="txt-entry bg-white pd-x3 round">--}}
{{--                                <h6 class="heading-sm ucap color-primary">--}}
{{--                                    {{ $agent->qualifications }}--}}
{{--                                </h6>--}}
{{--                                <h5>{{ $agent->first_name }} {{ $agent->last_name }}</h5>--}}
{{--                                <p>--}}
{{--                                    <small class="team-phone">{{ $agent->company_role }}</small>--}}
{{--                                    <br>--}}
{{--                                    <span class="color-primary">--}}
{{--                                        <a href="mailto:{{ $agent->email }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $agent->first_name }} An Email</a>--}}
{{--                                    </span>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @else--}}
{{--                        <div class="col-lg-3 col-sm-6 res-s-bttm">--}}
{{--                            <div class="txt-entry bg-white pd-x3 round">--}}
{{--                                <h6 class="heading-sm ucap color-primary">--}}
{{--                                    {{ $agent->qualifications }}--}}
{{--                                </h6>--}}
{{--                                <h5>{{ $agent->first_name }} {{ $agent->last_name }}</h5>--}}
{{--                                <p>--}}
{{--                                    <small class="team-phone">{{ $agent->company_role }}</small>--}}
{{--                                    <br>--}}
{{--                                    <span class="color-primary">--}}
{{--                                        <a href="mailto:{{ $agent->email }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $agent->first_name }} An Email</a>--}}
{{--                                    </span>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @break($loop->iteration === 4)--}}
{{--                @endforeach--}}

{{--                <div class="gaps size-md"></div>--}}
{{--                <div class="row center-md">--}}

{{--                @foreach($agents as $agent)--}}
{{--                    @if($loop->iteration === 5)--}}
{{--                        <div class="gaps size-3x visible-sm visible-md"></div>--}}
{{--                        <div class="col-lg-3 col-sm-6 res-s-bttm">--}}
{{--                            <div class="txt-entry bg-white pd-x3 round">--}}
{{--                                <h6 class="heading-sm ucap color-primary">--}}
{{--                                    {{ $agent->qualifications }}--}}
{{--                                </h6>--}}
{{--                                <h5>{{ $agent->first_name }} {{ $agent->last_name }}</h5>--}}
{{--                                <p>--}}
{{--                                    <small class="team-phone">{{ $agent->company_role }}</small>--}}
{{--                                    <br>--}}
{{--                                    <span class="color-primary">--}}
{{--                                        <a href="mailto:{{ $agent->email }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $agent->first_name }} An Email</a>--}}
{{--                                    </span>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @elseif ($loop->iteration > 5)--}}
{{--                        <div class="col-lg-3 col-sm-6 res-s-bttm">--}}
{{--                            <div class="txt-entry bg-white pd-x3 round">--}}
{{--                                <h6 class="heading-sm ucap color-primary">--}}
{{--                                    {{ $agent->qualifications }}--}}
{{--                                </h6>--}}
{{--                                <h5>{{ $agent->first_name }} {{ $agent->last_name }}</h5>--}}
{{--                                <p>--}}
{{--                                    <small class="team-phone">{{ $agent->company_role }}</small>--}}
{{--                                    <br>--}}
{{--                                    <span class="color-primary">--}}
{{--                                        <a href="mailto:{{ $agent->email }}" target="_blank"><i class="fa fa-send-o"></i> Send {{ $agent->first_name }} An Email</a>--}}
{{--                                    </span>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @break($loop->iteration === 9)--}}
{{--                </div>--}}
{{--            </div>--}}
