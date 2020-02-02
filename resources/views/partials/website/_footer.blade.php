@php
    $hqData = config('sourcefli.companyData.hqData');
    $config = config('sourcefli.responsiveImagesData.ImgSizes');
    $footer = config('sourcefli.siteData.footer');
    $social = config('sourcefli.siteData');
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
                                <li><a href="#">Homeowner's insurance</a></li>
                                <li><a href="#">Personal Insurance</a></li>
                                <li><a href="#">Auto Insurance</a></li>
                                <li><a href="#">Commercial Insurance</a></li>
                                <li><a href="#">Life &amp; Health Insurance</a></li>
                                <li><a href="#">Renter's Insurance</a></li>
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="services.html">Client Resources</a></li>
                                <li><a href="news.html">Our Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
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