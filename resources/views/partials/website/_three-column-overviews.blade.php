@php
    // 3 Card Items within this section

    //Card Item One - full width section with 2 column layout ... text on left - img on right
    $SectionItemOneTitle = config('sourcefli.siteData.aboutPageData.heroHeading');
    $SectionItemOneSummary = config('sourcefli.siteData.aboutPageData.fullRetirementServicesParagraph');
//    $SectionItemOneImg = "img/sections/opt-income-protection.png";

    //Card Item Two - Image with text overlay
    $SectionItemTwoTitle = '';
    $SectionItemTwoSummary = '';
    $SectionItemTwoImg = "img/sections/opt-medicare-card.jpg";

    //Card Item Three - Image with text overlay
    $SectionItemThreeTitle = '';
    $SectionItemThreeSummary = '';
    $SectionItemThreeImg = "img/sections/opt-retirement-savings.jpg";
@endphp


<div class="section section-service section-pad bdr-top">
    <div class="container">
        <div class="content row">
            <div class="wide-md center">
                <h6 class="color-primary"></h6>
            </div>
            <!-- Feature Row  -->
            <div class="row row-feature row-column feature-s5">
                <div class="col-sm-4 col-xs-12 even">
                    <!-- Feature box -->
                    <div class="feature boxed">
                        <a href="#">
                            <div class="fbox-photo">
                                <img src="{{ option('home_cardOneImg') }}" alt="{{ option('home_cardOneTitle') }}">
                            </div>
                            <div class="fbox-over">
                                <h3 class="title">{{ option('home_cardOneTitle') }}</h3>
                                <div class="fbox-content">
                                    <p> {{ option('home_cardOneSummary') }} </p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <!-- End Feature box -->
                </div>
                <div class="col-sm-4 col-xs-12 odd">
                    <!-- Feature box -->
                    <div class="feature boxed">
                        <a href="#">
                            <div class="fbox-photo">
                                <img src="{{ option('home_cardTwoImg') }}" alt="{{ option('home_cardTwoTitle') }}">
                            </div>
                            <div class="fbox-over">
                                <h3 class="title text-center">{{ option('home_cardTwoTitle') }}</h3>
                                <div class="fbox-content text-center">
                                    <p>{{ option('home_cardTwoSummary') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Feature box -->
                </div>
                <div class="col-sm-4 col-xs-12 even">
                    <!-- Feature box -->
                    <div class="feature boxed">
                        <a href="#">
                            <div class="fbox-photo">
                                <img src="{{ option('home_cardThreeImg') }}" alt="{{ option('home_cardThreeTitle') }}">
                            </div>
                            <div class="fbox-over">
                                <h3 class="title text-center">{{ option('home_cardThreeTitle') }}</h3>
                                <div class="fbox-content text-center">
                                    <p>{{ option('home_cardThreeSummary') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Feature box -->
                </div>
            </div>
            <!-- Feture Row  #end -->
        </div>
    </div>
</div>
<!-- End Content -->
