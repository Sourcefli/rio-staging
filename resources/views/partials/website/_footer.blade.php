@php
    <!-- $hqData = config('sourcefli.companyData.hqData');
    $config = config('sourcefli.responsiveImagesData.ImgSizes');
    $links = config('sourcefli.siteData.footer.serviceLinks');
    $social = config('sourcefli.siteData');
    $nav = config('sourcefli.siteData'); -->
    
    $footer = config('sourcefli.siteData.footer');
@endphp

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
                                <li>{{ option('lv_nv') }}</li>
                                <li>{{ option('sac_ca') }}</li>
                                <li>{{ option('sd_ca') }}</li>
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
                                <img src="{{ $footer["img"]["srcLg"] }}"
                                    srcset="{{ $footer["img"]["srcsetLg"] }}"
                                    alt="{{ $hqData["fullName"] }}">
                            </div>
                            @foreach($hqData as $hq)
                                <ul class="contact-info">
                                    <li><span>Toll Free</span>: {{ $hq['toll_free_phone'] }}</li>
                                    <li><span>Phone</span>: {{ $hq['office_phone'] }}</li>
                                    <li><span>Fax</span>: {{ $hq['office_fax'] }}</li>
                                    <li>{{ $hq['street_one'] }} {{ $hq['street_two'] }}<br>
                                        {{ $hq['zip'] }}</li>
                                </ul>
                                <ul class="social social-v2">
                                    <li><a href="{{ $hq->facebook_url }}"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                    <li><a href="{{ $hq->twitter_url }}"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                                    <li><a href="{{ $hq->linkedin_url }}"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>

            </div><!-- Widget Row -->

        </div>
    </div>
</div>
