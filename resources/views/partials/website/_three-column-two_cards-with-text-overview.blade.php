{{--Available VARs--}}
{{--$siteCards--}}
{{--Source: Controller--}}


<div class="section section-service section-pad bdr-top">
    <div class="container">
        <div class="content row">
            <div class="wide-md center">
                <h6 class="color-primary"></h6>
            </div>
            <!-- Feature Row  -->
            <div class="row row-feature row-column feature-s5">
                @for($i = 0; $i < count($sectionOneCards); $i++)
                    @if ($i % 2 === 0)
                        <div class="col-sm-4 col-xs-12 even">
                            <!-- Feature box -->
                            <div class="{{ $sectionOneCards[$i]["outer_div_classes"] }}">
                                <a href="{{ $sectionOneCards[$i]["href"] }}">
                                    <div class="{{ $sectionOneCards[$i]["image_div_classes"] }}">
                                        <img src="{{ $sectionOneCards[$i]["image_src"] }}" alt="{{ $sectionOneCards[$i]["title"] }}">
                                    </div>
                                    <div class="{{ $sectionOneCards[$i]["inner_div_classes"] }}">
                                        <h3 class="title">{{ $sectionOneCards[$i]["title"] }}</h3>
                                        <div class="{{ $sectionOneCards[$i]["body_div_classes"] }}">
                                            <p> {{ $sectionOneCards[$i]["html_body"] }} </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Feature box -->
                        </div>
                    @else
                        <div class="col-sm-4 col-xs-12 odd">
                            <!-- Feature box -->
                            <div class="{{ $sectionOneCards[$i]["outer_div_classes"] }}">
                                <a href="{{ $sectionOneCards[$i]["href"] }}">
                                    <div class="{{ $sectionOneCards[$i]["image_div_classes"] }}">
                                        <img src="{{ $sectionOneCards[$i]["image_src"] }}" alt="{{ $sectionOneCards[$i]["title"] }}">
                                    </div>
                                    <div class="{{ $sectionOneCards[$i]["inner_div_classes"] }}">
                                        <h3 class="title">{{ $sectionOneCards[$i]["title"] }}</h3>
                                        <div class="{{ $sectionOneCards[$i]["body_div_classes"] }}">
                                            <p> {{ $sectionOneCards[$i]["html_body"] }} </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- End Feature box -->
                         </div>
                    @endif
                @endfor
            </div>
            <!-- Feature Row  #end -->
        </div>
    </div>
</div>
<!-- End Content -->
{{--                <div class="col-sm-4 col-xs-12 even">--}}
{{--                    <!-- Feature box -->--}}
{{--                    <div class="feature boxed">--}}
{{--                        <a href="#">--}}
{{--                            <div class="fbox-photo">--}}
{{--                                <img src="{{ option('home_section1_colOneImg') }}" alt="{{ option('home_section1_colOneTitle') }}">--}}
{{--                            </div>--}}
{{--                            <div class="fbox-over">--}}
{{--                                <h3 class="title">{{ option('home_section1_colOneTitle') }}</h3>--}}
{{--                                <div class="fbox-content">--}}
{{--                                    <p> {{ option('home_section1_colOneSummary') }} </p>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- End Feature box -->--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 col-xs-12 odd">--}}
{{--                    <!-- Feature box -->--}}
{{--                    <div class="feature boxed">--}}
{{--                        <a href="#">--}}
{{--                            <div class="fbox-photo">--}}
{{--                                <img src="{{ option('home_section1_colTwoImg') }}" alt="{{ option('home_section1_colTwoTitle') }}">--}}
{{--                            </div>--}}
{{--                            <div class="fbox-over">--}}
{{--                                <h3 class="title">{{ option('home_section1_colTwoTitle') }}</h3>--}}
{{--                                <div class="fbox-content">--}}
{{--                                    <p>{{ option('home_section1_colTwoSummary') }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- End Feature box -->--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 col-xs-12 even">--}}
{{--                    <!-- Feature box -->--}}
{{--                    <div class="feature boxed">--}}
{{--                        <a href="#">--}}
{{--                            <div class="fbox-photo">--}}
{{--                                <img src="{{ option('home_section1_colThreeImg') }}" alt="{{ option('home_section1_colThreeTitle') }}">--}}
{{--                            </div>--}}
{{--                            <div class="fbox-over">--}}
{{--                                <h3 class="title">{{ option('home_section1_colThreeTitle') }}</h3>--}}
{{--                                <div class="fbox-content">--}}
{{--                                    <p>{{ option('home_section1_colThreeSummary') }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- End Feature box -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Feature Row  #end -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- End Content -->--}}
