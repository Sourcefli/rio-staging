
{{-- # ====== INCLUDE FILE VARIABLES ===== #--}}

@php
// Shorten Links 
$links = config('sourcefli.siteData.nav.items');

// hero slider HEADING SET ONE 
$headingOne = "Full Medicare Services";
$subheadingOne = "Whether Medicare Advantage, Supplements, Special Needs, or anything in between - you can throw it all at us!";

// hero slider HEADING SET TWO 
$headingTwo = "Risk Free Retirement Strategies";
$subheadingTwo = "Full financial planning and advisement services to help hit your goals and mitigate your financial risk";

// hero slider HEADING SET THREE 
$headingThree = "Full Service Retirement Agency";
$subheadingThree = "Whether retired or not, you still gain to access over 150 different insurance providers in one place. We do the shopping for you!";
// ====== END VARIABLES ===== 

@endphp

<div id="slider" class="banner banner-slider carousel slide carousel-fade">
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <!-- // -->
        <div class="item active">
            <div class="fill" id="responsiveHeroOne">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                        
                            <div class="banner-text al-left pos-left light">
                                <div class="animated fadeInRight">
                                    <h3 class="page-title"><strong>{{ $headingOne }}</strong></h3>
                                    <p class="lead">{{ $subheadingOne }}</p>
                                    <p class="more-cta"><a href="{{ $links["services"]["uri"] }}" class="btn">Learn More</a> <a href="{{ $links["contact"]["uri"] }}" class="btn btn-alt">Get a Quote</a></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <div class="item">
            <div class="fill" id="responsiveHeroTwo">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-right light">
                                <div class="animated fadeInRight">
                                    <h3 class="page-title"><strong>{{ $headingTwo }}</strong></h3>
                                    <p class="lead">{{ $subheadingTwo }}</p>
                                    <p class="more-cta"><a href="{{ $links["services"]["uri"] }}" class="btn">Learn More</a> <a href="{{ $links["contact"]["uri"] }}" class="btn btn-alt">Get a Quote</a></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <div class="item">
            <div class="fill" id="responsiveHeroThree">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left light">
                                <div class="animated fadeInRight">
                                    <h3 class="page-title"><strong>{{ $headingThree }}</strong></h3>
                                    <p class="lead">{{ $subheadingThree }}</p>
                                    <p class="more-cta"><a href="{{ $links["services"]["uri"] }}" class="btn">Learn More</a> <a href="{{ $links["contact"]["uri"] }}" class="btn btn-alt">Get a Quote</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
    </div>
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