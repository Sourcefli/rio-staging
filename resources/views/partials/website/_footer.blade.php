@php
    $hqData = config('sourcefli.companyData.hqData');
    $config = config('sourcefli.responsiveImagesData.ImgSizes');
    $footer = config('sourcefli.siteData.footer');
    $links = config('sourcefli.siteData.footer.serviceLinks');
    $social = config('sourcefli.siteData');
    $nav = config('sourcefli.siteData');
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
                            <ul class="menu">
                                <li><a href="{!! $links["diversify"]["uri"] !!}">{!! $links["diversify"]["name"] !!}</a></li>
                                <li><a href="{!! $links["burial"]["uri"] !!}">{!! $links["burial"]["name"] !!}</a></li>
                                <li><a href="{!! $links["unexpected"]["uri"] !!}">{!! $links["unexpected"]["name"] !!}</a></li>
                                <li><a href="{!! $links["medicare"]["uri"] !!}">{!! $links["medicare"]["name"] !!}</a></li>
                                <li><a href="{!! $links["wise"]["uri"] !!}">{!! $links["wise"]["name"] !!}</a></li>
                                <li><a href="{!! $links["investments"]["uri"] !!}">{!! $links["investments"]["name"] !!}</a></li>
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
                                @foreach ($nav["nav"]["items"] as $navItem)
                                    <li>
                                        <a href="{{ $navItem["uri"] }}">{{ $navItem["title"] }}</a>
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
                                <li>{{ $hqData["serviceAreas"]["nv"] }}</li>
                                <li>{{ $hqData["serviceAreas"]["sac"] }}</li>
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
                            <ul class="contact-info">
                                <li><span>Toll Free</span>: {{ $hqData["tollFree"] }}</li>
                                <li><span>Phone</span>: {{ $hqData["phone"] }}</li>
                                <li><span>Fax</span>: {{ $hqData["fax"] }}</li>
                                <li>{{ $hqData["streetOne"] }} {{ $hqData["streetTwo"] }}<br>
                                    {{ $hqData["cszip"] }}</li>
                            </ul>
                            <ul class="social social-v2">
                                <li><a href="{{ $social["facebook"]["url"] }}"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                <li><a href="{{ $social["twitter"]["url"] }}"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                                <li><a href="{{ $social["linkedIn"]["url"] }}"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>

            </div><!-- Widget Row -->

        </div>
    </div>
</div>
