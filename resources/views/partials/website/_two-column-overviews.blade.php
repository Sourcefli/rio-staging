<div class="section section-content section-pad bg-light">
	@php
        // 3 Items within this section

        //Item One - full width section with 2 column layout ... text on left - img on right
        $SectionItemOneTitle = config('sourcefli.siteData.aboutPageData.heroHeading');
        $SectionItemOneSummary = config('sourcefli.siteData.aboutPageData.fullRetirementServicesParagraph');
        $SectionItemOneImg = "img/sections/opt-income-protection.png";

        //Item Two - Image with text overlay
        $SectionItemTwoTitle = '';
        $SectionItemTwoSummary = '';
        $SectionItemTwoImg = "img/sections/opt-medicare-card.jpg";

        //Item Three - Image with text overlay
        $SectionItemThreeTitle = '';
        $SectionItemThreeSummary = '';
        $SectionItemThreeImg = "img/sections/opt-retirement-savings.jpg";
	@endphp

    <div class="container">
		<div class="content row">

{{--			<div class="box-s1 pd-x5 no-round">--}}
{{--				<div class="row row-vm">--}}
{{--					<div class="col-sm-6 res-m-bttm pad-r-md">--}}
{{--						<h2 class="color-primary"></h2>--}}
{{--						<h4>{{ $SectionItemOneTitle }}</h4>--}}
{{--						<p>{{ $SectionItemOneSummary }}</p>--}}
{{--						<h5>We're here to help on every level</h5>--}}
{{--					</div>--}}
{{--					<div class="col-sm-6 pad-l-md">--}}
{{--						<img src="{{ $SectionItemOneImg }}" alt="{{ $SectionItemOneTitle }}">--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

                <div class="gaps size-md"></div>

                <div class="row">
                    <div class="col-sm-6 res-s-bttm">
                        <div class="feature-imagebox has-bg light pd-x5">
                            <div class="block">
                                <span class="gaps size-lg"></span>
                                <h3>Switch to Insurify <strong>Home</strong> <br> <strong>Insurance</strong> and you could
                                    <br><strong>Save up 16%</strong>.</h3>
                                <a href="#" class="btn-link">Learn about homeowners</a>
                            </div>
                            <div class="imagebg">
                                <img src="{{ $SectionItemTwoImg }}" alt="{{ $SectionItemTwoTitle }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-imagebox has-bg light pd-x5">
                            <div class="block">
                                <span class="gaps size-lg"></span>
                                <h3>Protecting <strong>Auto + Property</strong> <br> <strong>Insurance</strong> now you could <br><strong>Save 5% extra.</strong></h3>
                                <a href="#" class="btn-link">Learn about personal</a>
                            </div>
                            <div class="imagebg">
                                <img src="{{ $SectionItemThreeImg }}" alt="{{ $SectionItemThreeTitle }}">
                            </div>
                        </div>
                    </div>
                </div>

			<div class="gaps size-md"></div>


{{--            <div class="row">--}}
{{--                <div class="col-sm-6 res-s-bttm">--}}
{{--                    <div class="feature-imagebox has-bg light pd-x5">--}}
{{--                        <div class="block">--}}
{{--                            <span class="gaps size-lg"></span>--}}
{{--                            <h3>Switch to Insurify <strong>Home</strong> <br> <strong>Insurance</strong> and you could--}}
{{--                                <br><strong>Save up 16%</strong>.</h3>--}}
{{--                            <a href="#" class="btn-link">Learn about homeowners</a>--}}
{{--                        </div>--}}
{{--                        <div class="imagebg">--}}
{{--                            <img src="{{ $SectionItemTwoImg }}" alt="{{ $SectionItemTwoTitle }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="feature-imagebox has-bg light pd-x5">--}}
{{--                        <div class="block">--}}
{{--                            <span class="gaps size-lg"></span>--}}
{{--                            <h3>Protecting <strong>Auto + Property</strong> <br> <strong>Insurance</strong> now you could <br><strong>Save 5% extra.</strong></h3>--}}
{{--                            <a href="#" class="btn-link">Learn about personal</a>--}}
{{--                        </div>--}}
{{--                        <div class="imagebg">--}}
{{--                            <img src="{{ $SectionItemThreeImg }}" alt="{{ $SectionItemThreeTitle }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
</div>
