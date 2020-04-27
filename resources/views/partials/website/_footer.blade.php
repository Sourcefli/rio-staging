
<div class="footer-widget section-pad-md">
    <div class="container">
        <div class="row">
            <div class="widget-row row">
                <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer wgs-menu">
                        <h5 class="wgs-title">Our Services</h5>
                        <div class="wgs-content">
                            <ul>
                            @foreach($serviceLinks as $serviceLink)
                                <li><a href="{{ $serviceLink->uri }}">{{ $serviceLink->title }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer wgs-menu">
                        <h5 class="wgs-title">Quick Links</h5>
                        <div class="wgs-content">
                            <ul class="menu">
                                @foreach ($menuLinks as $menuLink)
                                    <li>
                                        <a href="{{ $menuLink->uri }}">{{ $menuLink->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer">
                        <h5 class="wgs-title">Proudly Serving</h5>
                        <div class="wgs-content">
                            <ul>
                                @foreach($locations as $location)
                                    <li>{{ $location->city }}, {{ $location->state_abbr }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- #End Widget -->
                </div>
                <div class="footer-col col-md-3 col-sm-6">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer">
                        <div class="wgs-content">
                            <div class="footer-logo">
                                <img src="{{ $logo->default_src }}"
                                    srcset="{{ $logo->small_src }} {{ $logo->small_srcsetsize }},
                                            {{ $logo->medium_src }} {{ $logo->medium_srcsetsize }},
                                            {{ $logo->large_src }} {{ $logo->large_srcsetsize }},
                                            {{ $logo->xlarge_src }} {{ $logo->xlarge_srcsetsize }}"
                                     sizes="{{ $logo->small_srcsetsize }},
                                            {{ $logo->medium_srcsetsize }},
                                            {{ $logo->large_srcsetsize }},
                                            {{ $logo->xlarge_srcsetsize }}"
                                    alt="{{ $logo->alt_text }}">
                            </div>
                            <ul class="contact-info">
                                <li><span>Toll Free</span>: {{ $hqData->toll_free_phone }}</li>
                                <li><span>Phone</span>: {{ $hqData->office_phone }}</li>
                                <li><span>Fax</span>: {{ $hqData->office_fax }}</li>
                                <li>{{ $hqData->street_one }} {{ $hqData->street_two }}<br>
                                {{$hqData->city}}, {{$hqData->state}} {{ $hqData->zip }}</li>
                            </ul>
                            <ul class="social social-v2">
                                <li><a href="{{ $hqData->facebook_url }}"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                <li><a href="{{ $hqData->twitter_url }}"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                                <li><a href="{{ $hqData->linkedin_url }}"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>

            </div><!-- Widget Row -->

        </div>
    </div>
</div>
