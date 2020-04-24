
<div id="slider" class="banner banner-slider carousel slide carousel-fade">
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        @foreach($slidesData as $slide)
            @if ($loop->iteration === 1)
                <div class="item active">
            @else
                <div class="item">
            @endif
                    <div class="fill" id="{{ $slide->html_id }}">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">

                                    <div class="{{ $slide->classes }}">
                                        <div class="animated fadeInRight">
                                            <h3 class="page-title"><strong>{{ $slide->heading }}</strong></h3>
                                            <p class="lead">{{ $slide->subheading }}</p>
                                            <p class="more-cta"><a href="{{ route('servicesPage') }}" class="btn">Learn More</a> <a href="{{ route('getAQuotePage') }}" class="btn btn-alt">Get a Quote</a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
        <!-- // -->
{{--        <div class="item active">--}}
{{--            <div class="fill" id="responsiveHeroOne">--}}
{{--                <div class="banner-content">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}

{{--                            <div class="banner-text al-left pos-left light">--}}
{{--                                <div class="animated fadeInRight">--}}
{{--                                    <h3 class="page-title"><strong>{{ $headingOne }}</strong></h3>--}}
{{--                                    <p class="lead">{{ $subheadingOne }}</p>--}}
{{--                                    <p class="more-cta"><a href="{{ route('servicesPage') }}" class="btn">Learn More</a> <a href="{{ route('contactPage') }}" class="btn btn-alt">Get a Quote</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- // -->--}}
{{--        <div class="item">--}}
{{--            <div class="fill" id="responsiveHeroTwo">--}}
{{--                <div class="banner-content">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="banner-text al-left pos-right light">--}}
{{--                                <div class="animated fadeInRight">--}}
{{--                                    <h3 class="page-title"><strong>{{ $headingTwo }}</strong></h3>--}}
{{--                                    <p class="lead">{{ $subheadingTwo }}</p>--}}
{{--                                    <p class="more-cta"><a href="{{ route('servicesPage') }}" class="btn">Learn More</a> <a href="{{ route('contactPage') }}" class="btn btn-alt">Get a Quote</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- // -->--}}
{{--        <div class="item">--}}
{{--            <div class="fill" id="responsiveHeroThree">--}}
{{--                <div class="banner-content">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="banner-text al-left pos-left light">--}}
{{--                                <div class="animated fadeInRight">--}}
{{--                                    <h3 class="page-title"><strong>{{ $headingThree }}</strong></h3>--}}
{{--                                    <p class="lead">{{ $subheadingThree }}</p>--}}
{{--                                    <p class="more-cta"><a href="{{ route('servicesPage') }}" class="btn">Learn More</a> <a href="{{ route('contactPage') }}" class="btn btn-alt">Get a Quote</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- // -->--}}
{{--    </div>--}}
    <!-- Arrow Controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
